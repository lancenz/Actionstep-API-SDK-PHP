<?php

class Actionstep_Api_ResourceHelper {
    /**
     * @var Actionstep_Api_oAuthClient
     */
    private $_oauth;

    public function setOauthObject($oauth) {
        $this->_oauth = $oauth;
    }

    /**
     * @return Actionstep_Api_ResourceHelper
     */
    public static function getInstance() {
        static $instance=null;
        if ($instance === null) {
            $instance = new Actionstep_Api_ResourceHelper();
        }
        return $instance;
    }

    /**
     * @param string|Actionstep_Api_Resources_Abstract $resource
     * @param string|int $id
     *
     * @return string
     * @throws Exception
     */
    public function generateUserInterFaceUrl($resource, $id) {
        $resourceName = $this->getResourceNameFromResource($resource);
        return $this->_oauth->generateUserInterfaceUrl($resourceName, $id);
    }

    public function normalizeGetUrlOptions($resource, $options) {
        $return = array(
            'include'   => array(),
            'fields'    => array(),
            'filters'   => array(),
            'pageSize'  => null,
            'page'      => null,
            'sort'      => ''
        );

        if (isset($options['include'])) {
            $includedResources = $this->getIncludedResourcesFromIncludes($resource, $options['include']);
        } else {
            $includedResources = array();
        }

        foreach ($options as $key => $value) {
            switch ($key) {
                case 'include':
                    $return['include'] = $this->validateIncludes($resource, $options['include']);
                    break;
                case 'pageSize':
                    $return['pageSize'] = $this->validatePageSize($resource, $options['pageSize']);
                    break;
                case 'page':
                    $return['page'] = $this->validatePageNumber($resource, $options['page']);
                    break;
                case 'fields':
                    $return['fields'] = $this->validateFields($resource, $options['fields'], $includedResources);
                    break;
                case 'filters':
                    $return['filters'] = $this->validateFilters($resource, $options['filters'], $includedResources);
                    break;
                case 'sort':
                    $return['sort'] = $this->validateSort($resource, $options['sort'], $includedResources);
                    break;
                default:
                    throw new Exception("Unexpected GET option: '{$key}' set");
            }
        }
        echo '<pre>'.htmlspecialchars(print_r($return,1)).'</pre>';
        return $return;
    }

    /**
     * @param $resource
     * @param $options
     * @return bool|Actionstep_Api_Response_Get returns false if no results found
     * @throws Exception
     */
    public function findMany($resource, $options) {
        $urlArgs=$this->normalizeGetUrlOptions($resource, $options);
        $url = $this->_buildGetUrl($resource, $urlArgs);

        return $this->makeGetRequest($url);
    }

    /**
     * @param $url
     * @return bool|Actionstep_Api_Response_Get returns false if no results found
     * @throws Exception
     */
    public function makeGetRequest($url) {
        $httpClient = new Actionstep_Api_HttpClient($this->_oauth->getUserAgent());
        $httpClient->setUrl($url);
        $httpClient->setHeader('Content-Type', 'application/vnd.api+json');
        $httpClient->setMethod('GET');
        $httpClient->setHeader("Accept", "application/vnd.api+json");
        $httpClient = $this->_oauth->addAuthenticationToHttpRequest($httpClient);
        $response   = $httpClient->send();
        switch ($response->getStatusCode()) {
            case 200: // ok!
                $responseObj = new Actionstep_Api_Response_Get();
                $responseObj->fromJson($response->getBody());
                return $responseObj;
            case 204: // no records found
                return false;

            default:
                throw new Exception("Unexpected API Response: " . $response->getStatusCode() . ": " . $response->getStatusText());
                // @TODO: change exception type to allow additional data in the exception
        }
    }


    public function validatePageSize($resource, $pageSize) {
        if ($pageSize < 0) {
            throw new Exception("Invalid page size detected: [{$pageSize}] must be >= 0");
        }
        if (($pageSize == 0) && ("{$pageSize}" != '0')) {
            throw new Exception("Invalid page size detected: [{$pageSize}] must be a number");
        }
        if (preg_replace("/[^0-9]/", '', $pageSize) != $pageSize) {
            throw new Exception("Invalid page size detected: [{$pageSize}] must be a number");
        }
        if ($pageSize > 200) {
            throw new Exception("Invalid page size detected: [{$pageSize}] can not be > 200");
        }
        return intval($pageSize);
    }


    public function validatePageNumber($resource, $pageNumber) {
        if (preg_replace("/[^0-9]/", '', $pageNumber) != $pageNumber) {
            throw new Exception("Invalid page size detected: [{$pageNumber}] must be a number");
        }
        if ($pageNumber < 1) {
            throw new Exception("Invalid page size number: [{$pageNumber}] must be >= 1");
        }
        return intval($pageNumber);
    }


    protected function _buildFilterUrl($filters, $path=null) {
        $return = '';
        foreach ($filters as $key => $value) {
            $tmp = explode($key, "_");
            if (isset($tmp[1]) || !is_array($value)) {
                $return .= (($return == '') ? '' : '&');
                if (!empty($path)) {
                    $return .= "{$path}[{$key}]=";
                } else {
                    $return .= "{$key}=";
                }
                $return .= is_array($value) ? implode(",",$value) : $value;
            } else {
                if (!empty($path)) {
                    $subPath = "{$path}[{$key}]";
                } else {
                    $subPath = "{$key}";
                }
                $return .= (($return == '') ? '' : '&');
                $return .= $this->_buildFilterUrl($value, $subPath);
            }
        }
        return $return;
    }

    protected function _buildGetUrl($resource, $args) {
        $url = $this->getResourceUrlFromResource($resource);

        if (!empty($args['include'])) {
            $url .= (strpos($url, '?') === false) ? '?' : '&';
            $url .= 'include=' . urlencode(implode(",", $args['include']));
        }

        if (!empty($args['fields'])) {
            foreach ($args['fields'] as $resourceName => $fields) {
                $url .= (strpos($url, '?') === false) ? '?' : '&';
                $url .= 'fields['.urlencode($resourceName).']=' . urlencode(implode(",", $fields));
            }
        }
        if (!empty($args['filters'])) {
            $filterUrl = $this->_buildFilterUrl($args['filters']);
            if (!empty($filterUrl)) {
                $url .= (strpos($url, '?') === false) ? '?' : '&';
                $url .= $filterUrl;
            }
        }

        if (!empty($args['sort'])) {
            foreach ($args['sort'] as $resourceName => $fields) {
                $url .= (strpos($url, '?') === false) ? '?' : '&';
                $url .= 'sort['.urlencode($resourceName).']=' . urlencode(implode(",", $fields));
            }
        }

        if (!empty($args['pageSize'])) {
            $url .= (strpos($url, '?') === false) ? '?' : '&';
            $url .= 'pageSize=' . intval($args['pageSize']);
        }
        if (!empty($args['page'])) {
            $url .= (strpos($url, '?') === false) ? '?' : '&';
            $url .= 'page=' . intval($args['page']);
        }

        return $url;
    }

    /**
     *
     * @param $resource
     * @param $fields
     * @param $includedResources
     *
     * @return array
     * @throws Exception
     */
    public function validateFields($resource, $fields, $includedResources) {
        $baseResourceName = $this->getResourceNameFromResource($resource);

        if (is_string($fields)) {
            // parse
            $tmp = explode(",", $fields);
            $fields = array();
            foreach ($tmp as $field) {
                $field = explode(".", $field);
                if (sizeof($field) > 2) {
                    throw new Exception("Unexpected field format: [{$field}], expecting fieldName or resourceName.fieldName");
                }
                if (sizeof($field) == 1) {
                    if (!isset($fields[$baseResourceName])) {
                        $fields[$baseResourceName]=array();
                    }
                    $fields[$baseResourceName][] = $field[0];
                } else {
                    if (!isset($fields[$field[0]])) {
                        $fields[$field[0]]=array();
                    }
                    $fields[$field[0]][] = $field[1];
                }
            }
        } else {
            foreach ($fields as $index => $field) {
                if (is_numeric($index)) {
                    $fields[$baseResourceName][] = $field;
                    unset($fields[$index]);
                }
            }
        }

        foreach ($fields as $resourceName => $resourceFields) {
            if ($resourceName <> $baseResourceName) {
                if (!isset($includedResources[$resourceName])) {
                    throw new Exception("Detected error with fields request where you want to include fields from resource '{$resourceName}' which is not included in the 'include' list'");
                }
            }
            $fieldMap = $this->getFieldMapFromResource($resourceName);
            foreach ($resourceFields as $fieldName) {
                if ($fieldName == ':default') {
                    continue;
                }
                if (!isset($fieldMap[$fieldName])) {
                    throw new Exception("Detected unknown field '{$fieldName}' for resource '{$resourceName}' while validating the 'fields' to return parameter");
                }
            }
        }

        return $fields;
    }
    /**
     *
     * @param $resource
     * @param $fields
     * @param $includedResources
     *
     * @return array
     * @throws Exception
     */
    public function validateSort($resource, $fields, $includedResources) {
        $baseResourceName = $this->getResourceNameFromResource($resource);
        foreach ($fields as $index => $field) {
            if (is_numeric($index)) {
                $fields[$baseResourceName][] = $field;
                unset($fields[$index]);
            }
        }

        foreach ($fields as $resourceName => $resourceFields) {
            if (!is_array($resourceFields)) {
                $fields[$resourceName] = array($resourceFields);
                $resourceFields = array($resourceFields);

            }
            if ($resourceName <> $baseResourceName) {
                if (!isset($includedResources[$resourceName])) {
                    throw new Exception("Detected error with fields request where you want to include fields from resource '{$resourceName}' which is not included in the 'include' list'");
                }
            }
            $fieldMap = $this->getFieldMapFromResource($resourceName);
            foreach ($resourceFields as $fieldName) {
                if(substr($fieldName, 0, 1) == '-') {
                    $fieldName = substr($fieldName, 1);
                }
                if (!isset($fieldMap[$fieldName])) {
                    throw new Exception("Detected unknown field '{$fieldName}' for resource '{$resourceName}' while validating the 'fields' to return parameter");
                }
            }
        }

        return $fields;
    }
    /**
     *
     * @param $resource
     * @param $filters
     * @param $includes
     *
     * @return array
     * @throws Exception
     */
    public function validateFilters($resource, $filters, $includes) {
        $baseResourceName = $this->getResourceNameFromResource($resource);
        return $this->_validateFiltersRecursive($baseResourceName, $filters, $includes);
    }

    protected function _validateFiltersRecursive($resourceName, $filters, $includes) {
        $return = array();
        $fieldMap = $this->getFieldMapFromResource($resourceName);
        foreach ($filters as $key => $value) {
            $tmp = explode("_", $key);
            $fieldName = $tmp[0];
            if (!isset($fieldMap[$fieldName])) {
                throw new Exception("Unknown field '{$fieldName}' for resource type '{$resourceName}' when parsing filters");
            }
            if (isset($tmp[1]) || !is_array($value)) {
                // this is a filter
                if (!isset($tmp[1])) {
                    $tmp[1] = 'eq';
                }
                $allowedTypes   = array('int4', 'int8', 'decimal', 'varchar', 'date', 'timestamp');
                $isArray        = false;
                $allowNull      = false;
                switch ($tmp[1]) {
                    case 'in':      // in (...)
                    case 'ntin':    // not in (...)
                        $isArray = true;
                        $allowNull = true;
                        break;
                    case 'lt':      // <
                    case 'lteq':    // <=
                    case 'gt':      // >
                    case 'gteq':    // >=
                        $allowedTypes   = array('int4', 'int8', 'date', 'timestamp');
                        break;
                    case 'eq':      // ==
                    case 'nteq':    // !=
                    case 'ilike':   // contains (case-ignored)
                    case 'ntilike': // does not contain (case-ignored)
                    case 'like':    // contains (case sensitive)
                    case 'ntlike':  // does not contain (case sensitive)
                        break;
                    default:
                        throw new Exception("Unexpected operator '{$tmp[1]}' on filter for field '{$fieldName}' for resource type '{$resourceName}'");
                }
                $fieldDataType = explode(".", $fieldMap[$fieldName]['dataType']);
                $fieldDataLength = isset($fieldDataType[1]) ? $fieldDataType[1] : -1;
                $fieldDataType = $fieldDataType[0];

                // check data-type
                if (!in_array($fieldDataType, $allowedTypes)) {
                    throw new Exception("Unexpected operator '{$tmp[1]}' on filter for field '{$fieldName}' for resource type '{$resourceName}', data type '{$fieldDataType}' does not support this operator");
                }

                // check array
                if (($isArray === false) && (is_array($value))) {
                    throw new Exception("Operator '{$tmp[1]}' on filter for field '{$fieldName}' for resource type '{$resourceName}' does not support a filter value which is an array.");
                } else if (($isArray === true) && (!is_array($value))) {
                    $value = array($value);
                }

                $checkValues = is_array($value) ? $value : array($value);
                if (($fieldDataLength > 0) && ($allowNull == false)) {
                    foreach ($checkValues as $val) {
                        if ($val == ':NULL') {
                            throw new Exception("Filter value '{$val}' using operator '{$tmp[1]}' for filter for field '{$fieldName}' for resource type '{$resourceName}' is not allowed).");
                        }
                    }
                }
                if (($fieldDataLength > 0) && ($isArray == true)) {
                    foreach ($checkValues as $val) {
                        if (($val != ':NULL') && (strlen($val) > $fieldDataLength)) {
                            throw new Exception("Filter value '{$val}' on filter for field '{$fieldName}' for resource type '{$resourceName}' is too long (field length is '{$fieldDataLength}').");
                        }
                    }
                }

                if (($fieldDataType == 'int4') || ($fieldDataType == 'int8')) {
                    foreach ($checkValues as $val) {
                        if (($val != ':NULL') && (preg_replace('/[^0-9]/', '', $val) != "{$val}")) {
                            throw new Exception("Filter value '{$val}' on filter for field '{$fieldName}' for resource type '{$resourceName}' is not a valid integer.");
                        }
                    }
                }
                if ($fieldDataType == 'decimal') {
                    foreach ($checkValues as $val) {
                        if (($val != ':NULL') && (preg_replace('/[^0-9\.]/', '', $val) != "{$val}")) {
                            throw new Exception("Filter value '{$val}' on filter for field '{$fieldName}' for resource type '{$resourceName}' is not a valid decimal number.");
                        }
                    }
                }
                if ($fieldDataType == 'date') {
                    foreach ($checkValues as $val) {
                        if (($val != ':NULL') && (strtotime($val) === false)) {
                            throw new Exception("Filter value '{$val}' on filter for field '{$fieldName}' for resource type '{$resourceName}' is not a valid date, expeting YYYY-MM-DD{T}HH:MM:SS format.");
                        }
                    }
                }

                if ($fieldDataType == 'timestamp') {
                    foreach ($checkValues as $val) {
                        if (($val != ':NULL') && (strtotime($val) === false)) {
                            throw new Exception("Filter value '{$val}' on filter for field '{$fieldName}' for resource type '{$resourceName}' is not a valid date, expeting YYYY-MM-DD{T}HH:MM:SS format.");
                        }
                    }
                }

                $return[$key] = $value; // valid!
            } else {
                // this is a sub-filter
                if ($fieldMap[$fieldName]['fieldType'] != 'link') {
                    throw new Exception("Invalid filter detected, trying to use sub-filter on a non-link on field '{$fieldName}' of resource type '{$resourceName}'");
                }
                $subResourceName = $fieldMap[$fieldName]['resource'];
                $tmp = $this->_validateFiltersRecursive($subResourceName, $value, $includes);
                foreach ($tmp as $subKey => $subValue) {
                    $return[$fieldName][$subKey] = $subValue;
                }
            }
        }
        return $return;
    }

    public function getIncludedResourcesFromIncludes($resource, $includes) {
        $return = array();
        if (is_string($includes)) {
            $includes = explode(",",str_replace(array(" ", ";", ","), ",", $includes));
        }
        foreach ($includes as $index => $include) {
            $include = trim($include);
            if (empty($include)) {
                unset($includes[$index]);
            }
        }

        $fieldMaps = array();
        $baseResourceName = $this->getResourceNameFromResource($resource);
        $fieldMaps[$baseResourceName] = $this->getFieldMapFromResource($resource);

        $scopes = explode(" ", $this->_oauth->getAuthorizedScopes());
        if (!in_array($baseResourceName, $scopes)) {
            throw new Exception("Error, the current Access Token does not have scope to access the '{$baseResourceName}' resource");
        }

        $return[$baseResourceName] = $baseResourceName;

        foreach ($includes as $include) {
            $tmp = explode(".", $include);
            $resourceName = $baseResourceName;
            $path = array();
            foreach ($tmp as $fieldName) {
                $path[] = $fieldName;
                if (!isset($fieldMap[$resourceName])) {
                    $fieldMaps[$resourceName] = $this->getFieldMapFromResource($resourceName);
                }
                if (!isset($fieldMaps[$resourceName][$fieldName])) {
                    throw new Exception("Invalid include path: [" . implode(".", $path) . "], unknown field: [{$fieldName}] on resource [{$resourceName}] (for include=[{$include}])");
                }

                if ($fieldMaps[$resourceName][$fieldName]['fieldType'] != 'link') {
                    throw new Exception("Invalid include path: [" . implode(".", $path) . "], field: [{$fieldName}] on resource [{$resourceName}] is not of type 'link' (for include=[{$include}])");
                }

                $resourceName = $fieldMaps[$resourceName][$fieldName]['resource'];
                if (!in_array($resourceName, $scopes)) {
                    throw new Exception("Invalid include path: [" . implode(".", $path) . "], the current Access Token does not have have the scope for resource [{$resourceName}] (for include=[{$include}])");
                }
                $return[$resourceName] = $resourceName;
            }
        }

        return $return;
    }

    /**
     * Loop through the includes and ensure they are valid.
     * We also check the Access Token has scope for the requested includes and the current resource also
     *
     * @param string|Actionstep_Api_Resources_Abstract $resource
     * @param string|string[] $includes
     *
     * @return string
     * @throws Exception
     */
    public function validateIncludes($resource, $includes) {
        if (is_string($includes)) {
            $includes = explode(",",str_replace(array(" ", ";", ","), ",", $includes));
        }
        foreach ($includes as $index => $include) {
            $include = trim($include);
            if (empty($include)) {
                unset($includes[$index]);
            }
        }

        $fieldMaps = array();
        $baseResourceName = $this->getResourceNameFromResource($resource);
        $fieldMaps[$baseResourceName] = $this->getFieldMapFromResource($resource);

        $scopes = explode(" ", $this->_oauth->getAuthorizedScopes());
        if (!in_array($baseResourceName, $scopes)) {
            throw new Exception("Error, the current Access Token does not have scope to access the '{$baseResourceName}' resource");
        }

        foreach ($includes as $include) {
            $tmp = explode(".", $include);
            $resourceName = $baseResourceName;
            $path = array();
            foreach ($tmp as $fieldName) {
                $path[] = $fieldName;
                if (!isset($fieldMap[$resourceName])) {
                    $fieldMaps[$resourceName] = $this->getFieldMapFromResource($resourceName);
                }
                if (!isset($fieldMaps[$resourceName][$fieldName])) {
                    throw new Exception("Invalid include path: [" . implode(".", $path) . "], unknown field: [{$fieldName}] on resource [{$resourceName}] (for include=[{$include}])");
                }

                if ($fieldMaps[$resourceName][$fieldName]['fieldType'] != 'link') {
                    throw new Exception("Invalid include path: [" . implode(".", $path) . "], field: [{$fieldName}] on resource [{$resourceName}] is not of type 'link' (for include=[{$include}])");
                }

                $resourceName = $fieldMaps[$resourceName][$fieldName]['resource'];
                if (!in_array($resourceName, $scopes)) {
                    throw new Exception("Invalid include path: [" . implode(".", $path) . "], the current Access Token does not have have the scope for resource [{$resourceName}] (for include=[{$include}])");
                }
            }
        }

        return $includes;
    }

    /**
     * @param string|Actionstep_Api_Resources_Abstract $resource
     *
     * @return string
     */
    public function getFieldMapFromResource($resource) {
        static $cache=array();
        if (is_object($resource)) {
            $resourceName = $this->getResourceNameFromResource($resource);
        } else {
            $resourceName = $resource;
        }
        if (!isset($cache[$resourceName])) {
            if (is_string($resource)) {
                $resourceObj = Actionstep_Api_ResourceFactory::factory($resource);
                $cache[$resourceName] = $resourceObj->getFieldMap();
            } else {
                $cache[$resourceName] = $resource->getFieldMap();
            }
        }
        return $cache[$resourceName];
    }

    public function getResourceNameFromResource($resource) {
        if (is_object($resource)) {
            $class = get_class($resource);
        } else {
            $class = $resource;
        }
        $tmp = explode("_", $class);
        return strtolower(array_pop($tmp));
    }

    /**
     * @param string|Actionstep_Api_Resources_Abstract $resource
     *
     * @return string
     */
    public function getResourceUrlFromResource($resource) {
        return "/api/rest/" . $this->getResourceNameFromResource($resource);
    }

}
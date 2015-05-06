<?php

class Actionstep_Api_Resources_Abstract {

    protected  $_fieldMap = array();
    private $_attributes=array();

    public function getFieldMap() {
        return $this->_fieldMap;
    }

    /**
     * @var Actionstep_Api_Response_Get
     */
    private $_response;

    public function __construct($data, $response=null) {
        $this->_response    = $response;
        $this->_attributes  = array();
        if (!empty($data)) {
            foreach ($this->_fieldMap as $key => $field) {
                $this->_attributes[$key] = null;
                if ($field['fieldType'] == 'attribute') {
                    if (array_key_exists($key, $data)) {
                        $this->_attributes[$key] = $data[$key];
                    }
                } else {
                    if (array_key_exists($key, $data['links'])) {
                        $this->_attributes[$key] = $data['links'][$key];
                    }
                }
            }
        }
    }

    /**
     * @param string $id
     * @return $this
     */
    public function findOne($id) {
        return Actionstep_Api_ResourceHelper::getInstance()->findOne($this, $id);
    }

    /**
     * @param array $options
     *
     * @return $this[]
     */
    public function findMany(array $options=array()) {
        return Actionstep_Api_ResourceHelper::getInstance()->findMany($this, $options);
    }

    /**
     * @return boolean
     */
    public function deleteOne() {
        return Actionstep_Api_ResourceHelper::getInstance()->deleteOne($this);
    }

    /**
     * @param array $ids
     *
     * @return boolean
     */
    public function deleteMany(array $ids) {
        return Actionstep_Api_ResourceHelper::getInstance()->deleteMany($this, $ids);
    }

    /**
     * @return $this
     */
    public function insertOne() {
        return Actionstep_Api_ResourceHelper::getInstance()->insertOne($this);
    }

    /**
     * @param array Actionstep_Api_Resources_Abstract[]
     * @return Actionstep_Api_Resources_Abstract[]
     */
    public function insertMany(array $resources) {
        return Actionstep_Api_ResourceHelper::getInstance()->insertMany($this, $resources);
    }

    /**
     * @return $this
     */
    public function updateOne() {
        return Actionstep_Api_ResourceHelper::getInstance()->updateOne($this);
    }

    /**
     * @param array Actionstep_Api_Resources_Abstract[]
     * @return Actionstep_Api_Resources_Abstract[]
     */
    public function updateMany(array $resources) {
        return Actionstep_Api_ResourceHelper::getInstance()->updateMany($this, $resources);
    }


    public function __get($key) {
        if ($this->__isset($key) === false) {
            throw new Exception("Unknown field: {$key}");
        }
        return $this->_attributes[$key];
    }

    public function __isset($key) {
        if (!array_key_exists($key, $this->_fieldMap)) {
            return false;
        }
        return true;
    }

    public function __set($key, $value) {
        if ($this->__isset($key) === false) {
            throw new Exception("Unknown field: {$key}");
        }
        $this->_attributes[$key] = $value;
        return $this;
    }

    public function __call($method, $arguments) {
        if (!isset($this->_fieldMap[$method]) || $this->_fieldMap[$method]['fieldType'] != 'link') {
            throw new Exception("Unknown link: '{$method}'");
        }

        $resourceName = $this->_fieldMap[$method]['resource'];
        return $this->_response->getResourceById($resourceName, $this->_attributes[$method]);
    }


}
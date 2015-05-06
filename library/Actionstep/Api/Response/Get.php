<?php

class Actionstep_Api_Response_Get {
    private $_resourcesById=array();

    public function getResourceById($resourceName, $id) {

        if (!isset($this->_resourcesById[$resourceName][$id])) {
            die("not set: [{$resourceName}][{$id}]");
            return null;
        }

        return $this->_resourcesById[$resourceName][$id];
    }

    public function fromJson($jsonString) {
        $tmp = json_decode($jsonString,true);
        // remove junk
        unset($tmp['links']); // we already have knowledge of these
        unset($tmp['meta']);
        unset($tmp['debug']);
        foreach ($tmp['linked'] as $key => $rows) {
            $tmp[$key] = $rows;
            unset($tmp['linked'][$key]);
        }
        unset($tmp['linked']);

        foreach ($tmp as $resourceName => $data) {
            if (isset($data['id'])) {
                $data = array($data);
            }
            $this->_resourcesById[$resourceName] = array();
            foreach ($data as $row) {
                $id = $row['id'];
                $this->_resourcesById[$resourceName][$id] = Actionstep_Api_ResourceFactory::factory($resourceName, $row, $this);
            }
        }
    }

    /**
     * @return Actionstep_Api_Resources_Actions[]
     */
    public function actions() {
        return $this->getResourcesArray("actions");
    }

    public function getResourcesArray($resourceName) {
        if (!isset($this->_resourcesById[$resourceName])) {
            throw new Exception("Resource {$resourceName} not set in response data");
        }
        return $this->_resourcesById[$resourceName];
    }
}
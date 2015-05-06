<?php

class Actionstep_Api_ResourceFactory {
    /**
     * @param array $data
     * @param Actionstep_Api_Resource_Get $response
     *
     * @return Actionstep_Api_Resources_Abstract
     */
    public static function factory($resourceName, $data=array(), $response=null) {
        $class = "Actionstep_Api_Resources_" . ucfirst($resourceName);
        require_once dirname(__FILE__) . '/Resources/' . ucfirst($resourceName) . ".php";
        $obj = new $class($data, $response);
        return $obj;
    }

    /**
     * @param array $data
     * @param Actionstep_Api_Resource_Get $response
     *
     * @return Actionstep_Api_Resources_Actions
     */
    public static function actions($data=array(), $response=null) {
        return self::factory("actions", $data, $response);
    }


    /**
     * @param array $data
     * @param Actionstep_Api_Resource_Get $response
     *
     * @return Actionstep_Api_Resources_Actiontypes
     */
    public static function actiontypes($data=array(), $response=null) {
        return self::factory("actiontypes", $data, $response);
    }

}
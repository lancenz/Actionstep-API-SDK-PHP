<?php
/**
 * "datacollections" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $multipleRecords
 * @property integer $navbarOrder
 * @property string $navbarLabel
 * @property string $pluginUrl
 * @property string $alwaysShowDescriptions
 * @property integer $actionType
 *
 * @method Actionstep_Api_Resources_Actiontypes actionType()
 */
class Actionstep_Api_Resources_Datacollections extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                     => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'                   => array('fieldType'=>'attribute','dataType'=>'varchar.50','default'=>false,'required'=>true,'readOnly'=>false),
        'description'            => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'multipleRecords'        => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'navbarOrder'            => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'navbarLabel'            => array('fieldType'=>'attribute','dataType'=>'varchar.25','default'=>false,'required'=>false,'readOnly'=>false),
        'pluginUrl'              => array('fieldType'=>'attribute','dataType'=>'varchar.255','default'=>false,'required'=>false,'readOnly'=>false),
        'alwaysShowDescriptions' => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'actionType'             => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actiontypes')
    );
}
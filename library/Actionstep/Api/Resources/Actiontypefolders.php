<?php
/**
 * "actiontypefolders" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property integer $actionType
 * @property integer $parentFolder
 *
 * @method Actionstep_Api_Resources_Actiontypes actionType()
 * @method Actionstep_Api_Resources_Actiontypefolders parentFolder()
 */
class Actionstep_Api_Resources_Actiontypefolders extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'           => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'         => array('fieldType'=>'attribute','dataType'=>'varchar.255','default'=>false,'required'=>true,'readOnly'=>false),
        'actionType'   => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actiontypes'),
        'parentFolder' => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'actiontypefolders')
    );
}
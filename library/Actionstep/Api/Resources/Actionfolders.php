<?php
/**
 * "actionfolders" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property integer $action
 * @property integer $parentFolder
 *
 * @method Actionstep_Api_Resources_Actions action()
 * @method Actionstep_Api_Resources_Actionfolders parentFolder()
 */
class Actionstep_Api_Resources_Actionfolders extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'           => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'         => array('fieldType'=>'attribute','dataType'=>'varchar.255','default'=>false,'required'=>true,'readOnly'=>false),
        'action'       => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actions'),
        'parentFolder' => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'actionfolders')
    );
}
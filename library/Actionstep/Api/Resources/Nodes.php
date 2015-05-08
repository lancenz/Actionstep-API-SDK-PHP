<?php
/**
 * "nodes" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property integer $stepNumber
 * @property string $isActive
 * @property integer $weight
 * @property integer $actionType
 * @property integer $parent
 *
 * @method Actionstep_Api_Resources_Actiontypes actionType()
 * @method Actionstep_Api_Resources_Nodes parent()
 */
class Actionstep_Api_Resources_Nodes extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'         => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'stepNumber' => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'isActive'   => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'weight'     => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'actionType' => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actiontypes'),
        'parent'     => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'nodes')
    );
}
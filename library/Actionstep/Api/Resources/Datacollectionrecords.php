<?php
/**
 * "datacollectionrecords" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $canWrite
 * @property string $canDelete
 * @property integer $action
 * @property integer $dataCollection
 *
 * @method Actionstep_Api_Resources_Actions action()
 * @method Actionstep_Api_Resources_Datacollections dataCollection()
 */
class Actionstep_Api_Resources_Datacollectionrecords extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'             => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'canWrite'       => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>true),
        'canDelete'      => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>true),
        'action'         => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actions'),
        'dataCollection' => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'datacollections')
    );
}
<?php
/**
 * "datacollectionrecordvalues" resource, this is generated code, do not modify.
 *
 * @property string $id
 * @property string $stringValue
 * @property integer $action
 * @property string $dataCollectionField
 * @property integer $dataCollectionRecord
 *
 * @method Actionstep_Api_Resources_Actions action()
 * @method Actionstep_Api_Resources_Datacollectionfields dataCollectionField()
 * @method Actionstep_Api_Resources_Datacollectionrecords dataCollectionRecord()
 */
class Actionstep_Api_Resources_Datacollectionrecordvalues extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'stringValue'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'action'               => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actions'),
        'dataCollectionField'  => array('fieldType'=>'link','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'datacollectionfields'),
        'dataCollectionRecord' => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'datacollectionrecords')
    );
}
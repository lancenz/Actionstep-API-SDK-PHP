<?php
/**
 * "timerecordactivities" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $group
 * @property integer[] $divisions
 *
 * @method Actionstep_Api_Resources_Divisions[] divisions()
 */
class Actionstep_Api_Resources_Timerecordactivities extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'          => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'name'        => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'description' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'group'       => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'divisions'   => array('fieldType'=>'link','dataType'=>'int4[]','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'divisions')
    );
}
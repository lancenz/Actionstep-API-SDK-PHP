<?php
/**
 * "rates" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property float $rate
 * @property string $includesTax
 * @property float $costRate
 * @property string $isActive
 * @property integer $unit
 *
 * @method Actionstep_Api_Resources_Units unit()
 */
class Actionstep_Api_Resources_Rates extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'          => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'name'        => array('fieldType'=>'attribute','dataType'=>'varchar.255','default'=>true,'required'=>true,'readOnly'=>false),
        'rate'        => array('fieldType'=>'attribute','dataType'=>'numeric.2','default'=>true,'required'=>true,'readOnly'=>false),
        'includesTax' => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>true,'required'=>true,'readOnly'=>false),
        'costRate'    => array('fieldType'=>'attribute','dataType'=>'numeric.2','default'=>true,'required'=>false,'readOnly'=>false),
        'isActive'    => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>true,'required'=>true,'readOnly'=>false),
        'unit'        => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'units')
    );
}
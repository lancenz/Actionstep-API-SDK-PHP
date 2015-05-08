<?php
/**
 * "currency" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $symbol
 *
 */
class Actionstep_Api_Resources_Currency extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'     => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'symbol' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false)
    );
}
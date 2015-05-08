<?php
/**
 * "countries" resource, this is generated code, do not modify.
 *
 * @property string $id
 * @property string $name
 * @property string $dialingCode
 * @property string $currencyCode
 *
 */
class Actionstep_Api_Resources_Countries extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'name'         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'dialingCode'  => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'currencyCode' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false)
    );
}
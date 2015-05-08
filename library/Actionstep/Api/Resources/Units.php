<?php
/**
 * "units" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $symbol
 * @property string $nameSingular
 * @property string $namePlural
 * @property string $description
 * @property string $category
 * @property integer $defaultSortOrder
 *
 */
class Actionstep_Api_Resources_Units extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'               => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'symbol'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'nameSingular'     => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'namePlural'       => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'description'      => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'category'         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'defaultSortOrder' => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>false,'readOnly'=>false)
    );
}
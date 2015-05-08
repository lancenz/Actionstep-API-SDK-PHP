<?php
/**
 * "accountincomesections" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $displayName
 * @property string $sortOrder
 *
 */
class Actionstep_Api_Resources_Accountincomesections extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'          => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'        => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'displayName' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'sortOrder'   => array('fieldType'=>'attribute','dataType'=>'varchar.20','default'=>false,'required'=>false,'readOnly'=>false)
    );
}
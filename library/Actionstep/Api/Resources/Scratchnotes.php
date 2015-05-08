<?php
/**
 * "scratchnotes" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $timestamp
 * @property string $text
 * @property string $status
 *
 */
class Actionstep_Api_Resources_Scratchnotes extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'        => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'timestamp' => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>true,'required'=>false,'readOnly'=>false),
        'text'      => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'status'    => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>true)
    );
}
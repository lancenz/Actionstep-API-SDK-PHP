<?php
/**
 * "tags" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $parentTag
 *
 * @method Actionstep_Api_Resources_Tags parentTag()
 */
class Actionstep_Api_Resources_Tags extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'          => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'        => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'description' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'parentTag'   => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'tags')
    );
}
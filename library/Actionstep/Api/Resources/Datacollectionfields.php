<?php
/**
 * "datacollectionfields" resource, this is generated code, do not modify.
 *
 * @property string $id
 * @property string $name
 * @property string $dataType
 * @property string $label
 * @property integer $formOrder
 * @property integer $listOrder
 * @property string $required
 * @property integer $width
 * @property integer $height
 * @property string $class
 * @property string $style
 * @property string $description
 * @property string $customHtmlBelow
 * @property string $customHtmlAbove
 * @property string $listViewTotal
 * @property integer $dataCollection
 * @property integer $tag
 *
 * @method Actionstep_Api_Resources_Datacollections dataCollection()
 * @method Actionstep_Api_Resources_Tags tag()
 */
class Actionstep_Api_Resources_Datacollectionfields extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'              => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'name'            => array('fieldType'=>'attribute','dataType'=>'varchar.50','default'=>false,'required'=>true,'readOnly'=>false),
        'dataType'        => array('fieldType'=>'attribute','dataType'=>'varchar.20','default'=>false,'required'=>true,'readOnly'=>false),
        'label'           => array('fieldType'=>'attribute','dataType'=>'varchar.50','default'=>false,'required'=>false,'readOnly'=>false),
        'formOrder'       => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'listOrder'       => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'required'        => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'width'           => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'height'          => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'class'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'style'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'description'     => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'customHtmlBelow' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'customHtmlAbove' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'listViewTotal'   => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'dataCollection'  => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'datacollections'),
        'tag'             => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'tags')
    );
}
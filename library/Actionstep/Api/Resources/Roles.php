<?php
/**
 * "roles" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $menusMain
 * @property string $menusActionDetails
 * @property string $rate
 *
 * @method Actionstep_Api_Resources_Rates rate()
 */
class Actionstep_Api_Resources_Roles extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                 => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'name'               => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'description'        => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'menusMain'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'menusActionDetails' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'rate'               => array('fieldType'=>'link','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'rates')
    );
}
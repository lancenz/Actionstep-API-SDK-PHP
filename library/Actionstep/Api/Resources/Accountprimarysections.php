<?php
/**
 * "accountprimarysections" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property integer $sortOrder
 * @property string $reportingName
 * @property string $creditIncreasesBalance
 *
 */
class Actionstep_Api_Resources_Accountprimarysections extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                     => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'                   => array('fieldType'=>'attribute','dataType'=>'varchar.50','default'=>false,'required'=>true,'readOnly'=>false),
        'sortOrder'              => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'reportingName'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'creditIncreasesBalance' => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false)
    );
}
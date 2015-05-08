<?php
/**
 * "taxcodes" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $code
 * @property string $description
 * @property float $percentage
 * @property integer $sortOrder
 * @property string $collectedMemo
 * @property string $paidMemo
 * @property string $effectiveFrom
 * @property string $effectiveTo
 * @property string $externalInput
 * @property string $externalOutput
 * @property integer $nextGstCode
 * @property integer $previousGstCode
 *
 * @method Actionstep_Api_Resources_Taxcodes nextGstCode()
 * @method Actionstep_Api_Resources_Taxcodes previousGstCode()
 */
class Actionstep_Api_Resources_Taxcodes extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'              => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'code'            => array('fieldType'=>'attribute','dataType'=>'varchar.20','default'=>false,'required'=>true,'readOnly'=>false),
        'description'     => array('fieldType'=>'attribute','dataType'=>'varchar.255','default'=>false,'required'=>true,'readOnly'=>false),
        'percentage'      => array('fieldType'=>'attribute','dataType'=>'numeric.2','default'=>false,'required'=>false,'readOnly'=>false),
        'sortOrder'       => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'collectedMemo'   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'paidMemo'        => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'effectiveFrom'   => array('fieldType'=>'attribute','dataType'=>'date','default'=>false,'required'=>false,'readOnly'=>false),
        'effectiveTo'     => array('fieldType'=>'attribute','dataType'=>'date','default'=>false,'required'=>false,'readOnly'=>false),
        'externalInput'   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'externalOutput'  => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'nextGstCode'     => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'taxcodes'),
        'previousGstCode' => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'taxcodes')
    );
}
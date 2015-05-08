<?php
/**
 * "actionrates" resource, this is generated code, do not modify.
 *
 * @property string $id
 * @property float $overrideRate
 * @property integer $action
 * @property integer $rate
 *
 * @method Actionstep_Api_Resources_Actions action()
 * @method Actionstep_Api_Resources_Rates rate()
 */
class Actionstep_Api_Resources_Actionrates extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'overrideRate' => array('fieldType'=>'attribute','dataType'=>'numeric.2','default'=>true,'required'=>false,'readOnly'=>false),
        'action'       => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actions'),
        'rate'         => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'rates')
    );
}
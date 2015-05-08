<?php
/**
 * "divisions" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $timezoneName
 * @property integer $timezoneOffset
 * @property string $isActive
 * @property integer $taxMonths
 * @property string $taxAccountingMethod
 * @property string $lockoutTimestamp
 * @property string $openingBalanceTimestamp
 * @property string $emailSignature
 * @property string $invoiceAccountingMethod
 * @property string $cashAccountingAllocation
 * @property string $invoiceAccountingAllocation
 * @property string $trustLockoutTimestamp
 * @property integer $participant
 * @property integer $parent
 *
 * @method Actionstep_Api_Resources_Participants participant()
 * @method Actionstep_Api_Resources_Divisions parent()
 */
class Actionstep_Api_Resources_Divisions extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                          => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'timezoneName'                => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'timezoneOffset'              => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'isActive'                    => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>true,'required'=>true,'readOnly'=>false),
        'taxMonths'                   => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'taxAccountingMethod'         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'lockoutTimestamp'            => array('fieldType'=>'attribute','dataType'=>'date','default'=>false,'required'=>false,'readOnly'=>false),
        'openingBalanceTimestamp'     => array('fieldType'=>'attribute','dataType'=>'date','default'=>false,'required'=>false,'readOnly'=>false),
        'emailSignature'              => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'invoiceAccountingMethod'     => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'cashAccountingAllocation'    => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'invoiceAccountingAllocation' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'trustLockoutTimestamp'       => array('fieldType'=>'attribute','dataType'=>'date','default'=>false,'required'=>false,'readOnly'=>false),
        'participant'                 => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participants'),
        'parent'                      => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'divisions')
    );
}
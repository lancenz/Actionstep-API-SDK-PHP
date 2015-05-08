<?php
/**
 * "accounts" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $accountNumber
 * @property string $name
 * @property string $active
 * @property string $header
 * @property string $cashflowSection
 * @property string $actionEntriesOnly
 * @property integer $preferenceOrder
 * @property string $naturalAllocationType
 * @property integer $accountType
 * @property integer $currency
 * @property integer $taxcode
 * @property integer $incomeAccount
 * @property integer $parentAccount
 *
 * @method Actionstep_Api_Resources_Accounttypes accountType()
 * @method Actionstep_Api_Resources_Currencies currency()
 * @method Actionstep_Api_Resources_Taxcodes taxcode()
 * @method Actionstep_Api_Resources_Accounts incomeAccount()
 * @method Actionstep_Api_Resources_Accounts parentAccount()
 */
class Actionstep_Api_Resources_Accounts extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                    => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'accountNumber'         => array('fieldType'=>'attribute','dataType'=>'varchar.255','default'=>false,'required'=>true,'readOnly'=>false),
        'name'                  => array('fieldType'=>'attribute','dataType'=>'varchar.255','default'=>false,'required'=>true,'readOnly'=>false),
        'active'                => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'header'                => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'cashflowSection'       => array('fieldType'=>'attribute','dataType'=>'varchar.25','default'=>false,'required'=>false,'readOnly'=>false),
        'actionEntriesOnly'     => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'preferenceOrder'       => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'naturalAllocationType' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'accountType'           => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'accounttypes'),
        'currency'              => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'currencies'),
        'taxcode'               => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'taxcodes'),
        'incomeAccount'         => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'accounts'),
        'parentAccount'         => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'accounts')
    );
}
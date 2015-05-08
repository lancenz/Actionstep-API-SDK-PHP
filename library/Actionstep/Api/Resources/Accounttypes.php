<?php
/**
 * "accounttypes" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property integer $primarySectionOrder
 * @property integer $primarySection
 * @property integer $incomeStatementSection
 *
 * @method Actionstep_Api_Resources_Accountprimarysections primarySection()
 * @method Actionstep_Api_Resources_Accountincomesections incomeStatementSection()
 */
class Actionstep_Api_Resources_Accounttypes extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                     => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'                   => array('fieldType'=>'attribute','dataType'=>'varchar.255','default'=>false,'required'=>true,'readOnly'=>false),
        'primarySectionOrder'    => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'primarySection'         => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'accountprimarysections'),
        'incomeStatementSection' => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'accountincomesections')
    );
}
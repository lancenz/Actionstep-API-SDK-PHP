<?php
/**
 * "billingpreferences" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $amountsIncludeTax
 * @property string $taskGrouping
 * @property string $taskGroupingTitle
 * @property string $taskGroupingDescription
 * @property string $disbursementGrouping
 * @property string $disbursementGroupingTitle
 * @property string $disbursementGroupingDescription
 * @property string $purchasedItemGrouping
 * @property string $purchasedItemGroupingTitle
 * @property string $purchasedItemGroupingDescription
 * @property string $progressClaimGrouping
 * @property string $progressClaimGroupingTitle
 * @property string $progressClaimGroupingDescription
 * @property string $showTaskHeaderLineItems
 * @property string $showTaskHeaderItemPrices
 * @property string $showTaskHeaderTotal
 * @property string $showTaskHeaderQuantityUom
 * @property string $purchasedItemsIgnoredBefore
 * @property integer $disbursementOrder
 * @property integer $purchasedItemOrder
 * @property integer $progressClaimOrder
 * @property integer $taskOrder
 * @property string $tasksIgnoredBefore
 * @property string $progressClaimsIgnoredBefore
 * @property string $disbursementsIgnoredBefore
 * @property string $populateInvoiceDescriptionFromLineItems
 * @property string $groupTaskNamesByDescription
 * @property string $disbursementTitlesAsDescription
 * @property string $purchasedItemTitlesAsDescription
 * @property string $progressClaimTitlesAsDescription
 * @property string $lineItemSortBy
 * @property integer $disbursementTaxcode
 * @property integer $disbursementIncomeAccount
 * @property integer $progressCliamTaxcode
 * @property integer $progressClaimIncomeAccount
 * @property integer $purchasedItemTaxcode
 * @property integer $purchasedItemIncomeAccount
 * @property integer $salePurchaseType
 * @property integer $taskTaxcode
 * @property integer $taskIncomeAmount
 *
 * @method Actionstep_Api_Resources_Taxcodes disbursementTaxcode()
 * @method Actionstep_Api_Resources_Accounts disbursementIncomeAccount()
 * @method Actionstep_Api_Resources_Taxcodes progressCliamTaxcode()
 * @method Actionstep_Api_Resources_Accounts progressClaimIncomeAccount()
 * @method Actionstep_Api_Resources_Taxcodes purchasedItemTaxcode()
 * @method Actionstep_Api_Resources_Accounts purchasedItemIncomeAccount()
 * @method Actionstep_Api_Resources_Salepurchasetypes salePurchaseType()
 * @method Actionstep_Api_Resources_Taxcodes taskTaxcode()
 * @method Actionstep_Api_Resources_Accounts taskIncomeAmount()
 */
class Actionstep_Api_Resources_Billingpreferences extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                                      => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'                                    => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'amountsIncludeTax'                       => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'taskGrouping'                            => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'taskGroupingTitle'                       => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'taskGroupingDescription'                 => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'disbursementGrouping'                    => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'disbursementGroupingTitle'               => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'disbursementGroupingDescription'         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'purchasedItemGrouping'                   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'purchasedItemGroupingTitle'              => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'purchasedItemGroupingDescription'        => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'progressClaimGrouping'                   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'progressClaimGroupingTitle'              => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'progressClaimGroupingDescription'        => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'showTaskHeaderLineItems'                 => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'showTaskHeaderItemPrices'                => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'showTaskHeaderTotal'                     => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'showTaskHeaderQuantityUom'               => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'purchasedItemsIgnoredBefore'             => array('fieldType'=>'attribute','dataType'=>'date','default'=>false,'required'=>true,'readOnly'=>false),
        'disbursementOrder'                       => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'purchasedItemOrder'                      => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'progressClaimOrder'                      => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'taskOrder'                               => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'tasksIgnoredBefore'                      => array('fieldType'=>'attribute','dataType'=>'date','default'=>false,'required'=>true,'readOnly'=>false),
        'progressClaimsIgnoredBefore'             => array('fieldType'=>'attribute','dataType'=>'date','default'=>false,'required'=>true,'readOnly'=>false),
        'disbursementsIgnoredBefore'              => array('fieldType'=>'attribute','dataType'=>'date','default'=>false,'required'=>true,'readOnly'=>false),
        'populateInvoiceDescriptionFromLineItems' => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'groupTaskNamesByDescription'             => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'disbursementTitlesAsDescription'         => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'purchasedItemTitlesAsDescription'        => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'progressClaimTitlesAsDescription'        => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'lineItemSortBy'                          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'disbursementTaxcode'                     => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'taxcodes'),
        'disbursementIncomeAccount'               => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'accounts'),
        'progressCliamTaxcode'                    => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'taxcodes'),
        'progressClaimIncomeAccount'              => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'accounts'),
        'purchasedItemTaxcode'                    => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'taxcodes'),
        'purchasedItemIncomeAccount'              => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'accounts'),
        'salePurchaseType'                        => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'salepurchasetypes'),
        'taskTaxcode'                             => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'taxcodes'),
        'taskIncomeAmount'                        => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'accounts')
    );
}
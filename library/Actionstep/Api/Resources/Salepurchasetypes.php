<?php
/**
 * "salepurchasetypes" resource, this is generated code, do not modify.
 *
 * @property string $id
 * @property string $isQuoteOrderInvoice
 * @property string $isSaleOrPurchase
 * @property string $theirNameAlias
 * @property integer $sortOrder
 * @property string $description
 * @property string $ourReferenceAlias
 * @property string $theirReferenceAlias
 * @property string $expectedShippingDateAlias
 * @property string $shipToAlias
 * @property string $overrideTitle
 * @property string $isCredit
 * @property string $pdfFilename
 * @property string $showCodeOrSupplierCode
 * @property string $allowDuplicateTheirReference
 * @property string $allowDuplicateOurReference
 * @property string $useFlags
 * @property string $sectionName
 * @property string $defaultEmailSubject
 * @property string $defaultEmailBodyHtml
 * @property string $showConvertTo
 * @property string $showImportFrom
 * @property string $showSort
 * @property string $showCreateCredit
 * @property string $showReports
 * @property string $showVariations
 * @property string $showUpdateFromInventory
 * @property string $showExportTo
 * @property string $showDocuments
 * @property string $allocateReferencesOnPost
 * @property string $syncCostAndSell
 * @property string $updateFromInventory
 *
 */
class Actionstep_Api_Resources_Salepurchasetypes extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'isQuoteOrderInvoice'          => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'isSaleOrPurchase'             => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'theirNameAlias'               => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'sortOrder'                    => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'description'                  => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'ourReferenceAlias'            => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'theirReferenceAlias'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'expectedShippingDateAlias'    => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'shipToAlias'                  => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'overrideTitle'                => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'isCredit'                     => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'pdfFilename'                  => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'showCodeOrSupplierCode'       => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'allowDuplicateTheirReference' => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'allowDuplicateOurReference'   => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'useFlags'                     => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'sectionName'                  => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'defaultEmailSubject'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'defaultEmailBodyHtml'         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'showConvertTo'                => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'showImportFrom'               => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'showSort'                     => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'showCreateCredit'             => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'showReports'                  => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'showVariations'               => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'showUpdateFromInventory'      => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'showExportTo'                 => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'showDocuments'                => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'allocateReferencesOnPost'     => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'syncCostAndSell'              => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'updateFromInventory'          => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false)
    );
}
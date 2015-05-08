<?php
/**
 * "actiontypes" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $copyrightHolder
 * @property string $copyrightContact
 * @property string $copyrightEmail
 * @property string $trackActualTime
 * @property string $trackBillableTime
 * @property string $isForMarketingCampaigns
 * @property string $isForMarketingEvents
 * @property string $isForEmployees
 * @property string $isForCrm
 * @property string $isForDebtCollection
 * @property string $isDisabled
 * @property string $isBillable
 * @property string $enableActionImage
 * @property string $defaultEmailSubject
 * @property string $logoFilename
 * @property string $customLogoFilename
 * @property string $customLogoDirectory
 * @property integer $customLogoFilesize
 * @property string $customLogoModifiedTimestamp
 * @property string $templateIdentifier
 * @property string $allowCloseWithOpenInvoice
 * @property string $allowInlineCustomizing
 * @property string $canCreate
 * @property integer $primaryParticipantType
 *
 * @method Actionstep_Api_Resources_Participanttypes primaryParticipantType()
 */
class Actionstep_Api_Resources_Actiontypes extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                          => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'                        => array('fieldType'=>'attribute','dataType'=>'varchar.50','default'=>false,'required'=>true,'readOnly'=>false),
        'description'                 => array('fieldType'=>'attribute','dataType'=>'varchar.255','default'=>false,'required'=>true,'readOnly'=>false),
        'copyrightHolder'             => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'copyrightContact'            => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'copyrightEmail'              => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'trackActualTime'             => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'trackBillableTime'           => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'isForMarketingCampaigns'     => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'isForMarketingEvents'        => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'isForEmployees'              => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'isForCrm'                    => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'isForDebtCollection'         => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'isDisabled'                  => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'isBillable'                  => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'enableActionImage'           => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'defaultEmailSubject'         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'logoFilename'                => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'customLogoFilename'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'customLogoDirectory'         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'customLogoFilesize'          => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'customLogoModifiedTimestamp' => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>false),
        'templateIdentifier'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'allowCloseWithOpenInvoice'   => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'allowInlineCustomizing'      => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'canCreate'                   => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>true),
        'primaryParticipantType'      => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>true,'resource'=>'participanttypes')
    );
}
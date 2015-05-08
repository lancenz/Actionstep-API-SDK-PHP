<?php
/**
 * "participants" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $displayName
 * @property string $isCompany
 * @property string $companyName
 * @property string $salutation
 * @property string $firstName
 * @property string $middleNmae
 * @property string $lastName
 * @property string $suffix
 * @property string $preferredName
 * @property string $physicalAddressLine1
 * @property string $physicalAddressLine1
 * @property string $physicalCity
 * @property string $physicalStateProvince
 * @property string $physicalPostCode
 * @property string $mailingAddressLine1
 * @property string $mailingAddressLine1
 * @property string $mailingCity
 * @property string $mailingStateProvince
 * @property string $mailingPostCode
 * @property string $phone1Label
 * @property integer $phone1Country
 * @property integer $phone1Area
 * @property string $phone1Number
 * @property string $phone1Notes
 * @property string $phone2Label
 * @property integer $phone2Country
 * @property integer $phone2Area
 * @property string $phone2Number
 * @property string $phone2Notes
 * @property string $phone3Label
 * @property integer $phone3Country
 * @property integer $phone3Area
 * @property string $phone3Number
 * @property string $phone3Notes
 * @property string $phone4Label
 * @property integer $phone4Country
 * @property integer $phone4Area
 * @property string $phone4Number
 * @property string $phone4Notes
 * @property string $fax
 * @property string $sms
 * @property string $email
 * @property string $website
 * @property string $occupation
 * @property string $taxNumber
 * @property string $birthTimestamp
 * @property string $deathTimestamp
 * @property string $maritalStatus
 * @property string $gender
 * @property string $modifiedTimestamp
 * @property string $createdTimestamp
 * @property string $baseParticipantType
 * @property string $physicalCountry
 * @property string $mailingCountry
 * @property integer $division
 *
 * @method Actionstep_Api_Resources_Participanttypes baseParticipantType()
 * @method Actionstep_Api_Resources_Countries physicalCountry()
 * @method Actionstep_Api_Resources_Countries mailingCountry()
 * @method Actionstep_Api_Resources_Divisions division()
 */
class Actionstep_Api_Resources_Participants extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                    => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'displayName'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'isCompany'             => array('fieldType'=>'attribute','dataType'=>'bpchar.1','default'=>true,'required'=>true,'readOnly'=>false),
        'companyName'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'salutation'            => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'firstName'             => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'middleNmae'            => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'lastName'              => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'suffix'                => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'preferredName'         => array('fieldType'=>'attribute','dataType'=>'varchar.50','default'=>false,'required'=>false,'readOnly'=>false),
        'physicalAddressLine1'  => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'physicalAddressLine1'  => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'physicalCity'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'physicalStateProvince' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'physicalPostCode'      => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'mailingAddressLine1'   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'mailingAddressLine1'   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'mailingCity'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'mailingStateProvince'  => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'mailingPostCode'       => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'phone1Label'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'phone1Country'         => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>false,'readOnly'=>false),
        'phone1Area'            => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>false,'readOnly'=>false),
        'phone1Number'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'phone1Notes'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'phone2Label'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'phone2Country'         => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'phone2Area'            => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'phone2Number'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'phone2Notes'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'phone3Label'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'phone3Country'         => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'phone3Area'            => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'phone3Number'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'phone3Notes'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'phone4Label'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'phone4Country'         => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'phone4Area'            => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'phone4Number'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'phone4Notes'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'fax'                   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'sms'                   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'email'                 => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'website'               => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'occupation'            => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'taxNumber'             => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'birthTimestamp'        => array('fieldType'=>'attribute','dataType'=>'date','default'=>true,'required'=>false,'readOnly'=>false),
        'deathTimestamp'        => array('fieldType'=>'attribute','dataType'=>'date','default'=>false,'required'=>false,'readOnly'=>false),
        'maritalStatus'         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'gender'                => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>true,'required'=>false,'readOnly'=>false),
        'modifiedTimestamp'     => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>true),
        'createdTimestamp'      => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>true),
        'baseParticipantType'   => array('fieldType'=>'link','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participanttypes'),
        'physicalCountry'       => array('fieldType'=>'link','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'countries'),
        'mailingCountry'        => array('fieldType'=>'link','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'countries'),
        'division'              => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'divisions')
    );
}
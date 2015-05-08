<?php
/**
 * "emails" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $direction
 * @property string $status
 * @property string $uniqueMessageId
 * @property string $subject
 * @property string $bodyText
 * @property string $bodyHtml
 * @property string $readConfirmedTimestamp
 * @property string $deliveryConfirmedTimestamp
 * @property string $createdTimestamp
 * @property string $priority
 * @property string $sensitivity
 * @property string $sentTimestamp
 * @property string $receivedTimestamp
 * @property integer $flag
 * @property integer $attachmentCount
 * @property integer $emailSize
 * @property string $recipients
 * @property string $to
 * @property string $cc
 * @property string $bcc
 * @property string $from
 * @property string $deliveredTo
 * @property string $replyTo
 * @property string $readConfirmationTo
 * @property string $deliveryConfirmationTo
 * @property string $bodyHtml
 * @property integer $size
 * @property string $externalReference
 * @property integer $createdBy
 * @property integer $parent
 *
 * @method Actionstep_Api_Resources_Participants createdBy()
 * @method Actionstep_Api_Resources_Emails parent()
 */
class Actionstep_Api_Resources_Emails extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                         => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'direction'                  => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>false),
        'status'                     => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'uniqueMessageId'            => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'subject'                    => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'bodyText'                   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'bodyHtml'                   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'readConfirmedTimestamp'     => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>false),
        'deliveryConfirmedTimestamp' => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>false),
        'createdTimestamp'           => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>false),
        'priority'                   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'sensitivity'                => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'sentTimestamp'              => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>false),
        'receivedTimestamp'          => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>false),
        'flag'                       => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'attachmentCount'            => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'emailSize'                  => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'recipients'                 => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'to'                         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'cc'                         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'bcc'                        => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'from'                       => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'deliveredTo'                => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'replyTo'                    => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'readConfirmationTo'         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'deliveryConfirmationTo'     => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'bodyHtml'                   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'size'                       => array('fieldType'=>'attribute','dataType'=>'int','default'=>false,'required'=>false,'readOnly'=>false),
        'externalReference'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'createdBy'                  => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'participants'),
        'parent'                     => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'emails')
    );
}
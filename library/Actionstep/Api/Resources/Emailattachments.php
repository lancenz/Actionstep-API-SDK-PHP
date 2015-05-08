<?php
/**
 * "emailattachments" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $contentDisposition
 * @property string $mimeContentId
 * @property string $displayName
 * @property string $attachmentSize
 * @property string $oldNfsPath
 * @property string $file
 * @property integer $email
 *
 * @method Actionstep_Api_Resources_Emails email()
 */
class Actionstep_Api_Resources_Emailattachments extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                 => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'contentDisposition' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'mimeContentId'      => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'displayName'        => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'attachmentSize'     => array('fieldType'=>'attribute','dataType'=>'integer','default'=>false,'required'=>false,'readOnly'=>false),
        'oldNfsPath'         => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'file'               => array('fieldType'=>'attribute','dataType'=>'file','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'files'),
        'email'              => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'emails')
    );
}
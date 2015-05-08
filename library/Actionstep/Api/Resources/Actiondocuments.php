<?php
/**
 * "actiondocuments" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $modifiedTimestamp
 * @property string $status
 * @property string $keywords
 * @property string $summary
 * @property string $checkedOutTimestamp
 * @property string $fileType
 * @property string $checkedOutTo
 * @property string $checkedOutEtaTimestamp
 * @property integer $fileSize
 * @property string $extension
 * @property string $sharepointUrl
 * @property string $fileName
 * @property integer $action
 * @property integer $checkedOutBy
 * @property integer $folder
 * @property integer $createdBy
 * @property integer $tag
 * @property integer $documentTemplate
 * @property string $file
 *
 * @method Actionstep_Api_Resources_Actions action()
 * @method Actionstep_Api_Resources_Participants checkedOutBy()
 * @method Actionstep_Api_Resources_Actionfolders folder()
 * @method Actionstep_Api_Resources_Participants createdBy()
 * @method Actionstep_Api_Resources_Tag tag()
 * @method Actionstep_Api_Resources_Documenttemplates documentTemplate()
 */
class Actionstep_Api_Resources_Actiondocuments extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                     => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'                   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'modifiedTimestamp'      => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>true),
        'status'                 => array('fieldType'=>'attribute','dataType'=>'varchar.20','default'=>false,'required'=>false,'readOnly'=>true),
        'keywords'               => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'summary'                => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'checkedOutTimestamp'    => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>true),
        'fileType'               => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>true),
        'checkedOutTo'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>true),
        'checkedOutEtaTimestamp' => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>true),
        'fileSize'               => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>true),
        'extension'              => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>true),
        'sharepointUrl'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>true),
        'fileName'               => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>true),
        'action'                 => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actions'),
        'checkedOutBy'           => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>true,'resource'=>'participants'),
        'folder'                 => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'actionfolders'),
        'createdBy'              => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>true,'resource'=>'participants'),
        'tag'                    => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'tag'),
        'documentTemplate'       => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'documenttemplates'),
        'file'                   => array('fieldType'=>'attribute','dataType'=>'file','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'files')
    );
}
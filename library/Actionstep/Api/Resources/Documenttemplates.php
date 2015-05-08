<?php
/**
 * "documenttemplates" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $fileName
 * @property string $directory
 * @property integer $fileSize
 * @property string $createdTimestamp
 * @property string $modifiedTimestamp
 * @property string $oldNfsPath
 * @property string $documentIdentifier
 * @property integer $currentVersion
 * @property integer $installedVersion
 * @property string $lastCheckinTimestamp
 * @property integer $generatedCount
 * @property integer $actionType
 * @property integer $createdBy
 * @property integer $actionTypeFolder
 * @property integer $modifiedBy
 *
 * @method Actionstep_Api_Resources_Actiontypes actionType()
 * @method Actionstep_Api_Resources_Participants createdBy()
 * @method Actionstep_Api_Resources_Folders actionTypeFolder()
 * @method Actionstep_Api_Resources_Participants modifiedBy()
 */
class Actionstep_Api_Resources_Documenttemplates extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                   => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'name'                 => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'description'          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>false),
        'fileName'             => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'directory'            => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'fileSize'             => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'createdTimestamp'     => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>false),
        'modifiedTimestamp'    => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>false),
        'oldNfsPath'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'documentIdentifier'   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'currentVersion'       => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'installedVersion'     => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'lastCheckinTimestamp' => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>false),
        'generatedCount'       => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'actionType'           => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actiontypes'),
        'createdBy'            => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participants'),
        'actionTypeFolder'     => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'folders'),
        'modifiedBy'           => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participants')
    );
}
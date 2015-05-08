<?php
/**
 * "filenotes" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $enteredTimestamp
 * @property string $text
 * @property string $enteredBy
 * @property string $source
 * @property string $noteTimestamp
 * @property integer $action
 * @property integer $document
 * @property integer $participant
 *
 * @method Actionstep_Api_Resources_Actions action()
 * @method Actionstep_Api_Resources_Documents document()
 * @method Actionstep_Api_Resources_Participants participant()
 */
class Actionstep_Api_Resources_Filenotes extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'               => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>true),
        'enteredTimestamp' => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>true,'required'=>false,'readOnly'=>true),
        'text'             => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'enteredBy'        => array('fieldType'=>'attribute','dataType'=>'varchar.100','default'=>false,'required'=>false,'readOnly'=>true),
        'source'           => array('fieldType'=>'attribute','dataType'=>'varchar.25','default'=>false,'required'=>false,'readOnly'=>false),
        'noteTimestamp'    => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>false),
        'action'           => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actions'),
        'document'         => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'documents'),
        'participant'      => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>true,'resource'=>'participants')
    );
}
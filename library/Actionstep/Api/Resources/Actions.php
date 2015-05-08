<?php
/**
 * "actions" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $reference
 * @property integer $priority
 * @property string $status
 * @property string $statusTimestamp
 * @property string $isBillableOverride
 * @property string $createdTimestamp
 * @property string $modifiedTimestamp
 * @property string $isDeleted
 * @property string $deletedBy
 * @property string $deletedTimestamp
 * @property string $isFavorite
 * @property integer $assignedTo
 * @property integer $division
 * @property integer $actionType
 * @property integer[] $primaryParticipants
 *
 * @method Actionstep_Api_Resources_Participants assignedTo()
 * @method Actionstep_Api_Resources_Divisions division()
 * @method Actionstep_Api_Resources_Actiontypes actionType()
 * @method Actionstep_Api_Resources_Participants[] primaryParticipants()
 */
class Actionstep_Api_Resources_Actions extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                  => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>true),
        'name'                => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'reference'           => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'priority'            => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>false,'readOnly'=>false),
        'status'              => array('fieldType'=>'attribute','dataType'=>'varchar.25','default'=>true,'required'=>false,'readOnly'=>false,'validValues'=>array('Active', 'Inactive', 'Template', 'Closed')),
        'statusTimestamp'     => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>true,'readOnly'=>true),
        'isBillableOverride'  => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false,'validValues'=>array(null, 'T', 'F')),
        'createdTimestamp'    => array('fieldType'=>'attribute','dataType'=>'date','default'=>false,'required'=>false,'readOnly'=>true),
        'modifiedTimestamp'   => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>true),
        'isDeleted'           => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>true,'readOnly'=>true),
        'deletedBy'           => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>true),
        'deletedTimestamp'    => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>true),
        'isFavorite'          => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'assignedTo'          => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participants'),
        'division'            => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>true,'resource'=>'divisions'),
        'actionType'          => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actiontypes'),
        'primaryParticipants' => array('fieldType'=>'link','dataType'=>'int4[]','default'=>false,'required'=>true,'readOnly'=>true,'resource'=>'participants')
    );
}
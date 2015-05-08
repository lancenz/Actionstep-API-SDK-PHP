<?php
/**
 * "timerecords" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $startTimestamp
 * @property string $notes
 * @property float $actualHours
 * @property float $billableHours
 * @property string $createdTimestamp
 * @property integer $task
 * @property integer $activity
 * @property integer $division
 * @property integer $createdBy
 * @property integer $owner
 * @property integer $action
 * @property integer $rate
 *
 * @method Actionstep_Api_Resources_Tasks task()
 * @method Actionstep_Api_Resources_Timerecordactivities activity()
 * @method Actionstep_Api_Resources_Divisions division()
 * @method Actionstep_Api_Resources_Participants createdBy()
 * @method Actionstep_Api_Resources_Participants owner()
 * @method Actionstep_Api_Resources_Actions action()
 * @method Actionstep_Api_Resources_Rates rate()
 */
class Actionstep_Api_Resources_Timerecords extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'               => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'startTimestamp'   => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>true,'readOnly'=>false),
        'notes'            => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'actualHours'      => array('fieldType'=>'attribute','dataType'=>'numeric.2','default'=>false,'required'=>true,'readOnly'=>false),
        'billableHours'    => array('fieldType'=>'attribute','dataType'=>'numeric.2','default'=>false,'required'=>false,'readOnly'=>false),
        'createdTimestamp' => array('fieldType'=>'attribute','dataType'=>'timestamptz','default'=>false,'required'=>false,'readOnly'=>false),
        'task'             => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'tasks'),
        'activity'         => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'timerecordactivities'),
        'division'         => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'divisions'),
        'createdBy'        => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participants'),
        'owner'            => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participants'),
        'action'           => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'actions'),
        'rate'             => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'rates')
    );
}
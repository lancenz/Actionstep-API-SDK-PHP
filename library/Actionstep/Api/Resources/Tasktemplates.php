<?php
/**
 * "tasktemplates" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property integer $stepNumber
 * @property string $taskName
 * @property string $priority
 * @property integer $dueDaysAhead
 * @property integer $listOrder
 * @property integer $completeBeforeStep
 * @property integer $completeByStep
 * @property float $estimatedHours
 * @property integer $expectedDuration
 * @property string $expectedDurationUnits
 * @property string $showOnGanttChart
 * @property string $description
 * @property string $isDueDaysAheadWeekDays
 * @property string $dueDataTrigger
 * @property string $generatedCount
 * @property integer $actionType
 * @property integer $participantType
 * @property integer $defaultRate
 * @property integer $dataCollection
 * @property integer $template
 * @property integer $activity
 * @property integer $tag
 * @property integer $dataCollectionTrigger
 *
 * @method Actionstep_Api_Resources_Actiontypes actionType()
 * @method Actionstep_Api_Resources_ParticipantTypes participantType()
 * @method Actionstep_Api_Resources_Rates defaultRate()
 * @method Actionstep_Api_Resources_Datacollections dataCollection()
 * @method Actionstep_Api_Resources_Documenttemplates template()
 * @method Actionstep_Api_Resources_Timerecordactivities activity()
 * @method Actionstep_Api_Resources_Tags tag()
 * @method Actionstep_Api_Resources_Datacollectionfields dataCollectionTrigger()
 */
class Actionstep_Api_Resources_Tasktemplates extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                     => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'stepNumber'             => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false),
        'taskName'               => array('fieldType'=>'attribute','dataType'=>'varchar.255','default'=>false,'required'=>true,'readOnly'=>false),
        'priority'               => array('fieldType'=>'attribute','dataType'=>'varchar.20','default'=>false,'required'=>false,'readOnly'=>false),
        'dueDaysAhead'           => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'listOrder'              => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'completeBeforeStep'     => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'completeByStep'         => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'estimatedHours'         => array('fieldType'=>'attribute','dataType'=>'numeric.2','default'=>false,'required'=>false,'readOnly'=>false),
        'expectedDuration'       => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'expectedDurationUnits'  => array('fieldType'=>'attribute','dataType'=>'varchar.25','default'=>false,'required'=>false,'readOnly'=>false),
        'showOnGanttChart'       => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'description'            => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'isDueDaysAheadWeekDays' => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'dueDataTrigger'         => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'generatedCount'         => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'actionType'             => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actiontypes'),
        'participantType'        => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participantTypes'),
        'defaultRate'            => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'rates'),
        'dataCollection'         => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'datacollections'),
        'template'               => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'documenttemplates'),
        'activity'               => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'timerecordactivities'),
        'tag'                    => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'tags'),
        'dataCollectionTrigger'  => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'datacollectionfields')
    );
}
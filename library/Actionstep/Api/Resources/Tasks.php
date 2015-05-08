<?php
/**
 * "tasks" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $status
 * @property string $priority
 * @property string $dueTimestamp
 * @property string $startedTimestamp
 * @property string $completedTimestamp
 * @property float $actualHours
 * @property float $billableHours
 * @property string $description
 * @property string $assignedBy
 * @property integer $completeDuringStep
 * @property integer $completeBeforeStep
 * @property string $mustStartBeforeTimestamp
 * @property integer $expectedDurationValue
 * @property string $expectedDurationUnits
 * @property string $isBillingHold
 * @property string $isPartBilled
 * @property string $confirmedNonBillable
 * @property string $confirmedNonBillableTimestamp
 * @property string $hasTriggerDate
 * @property string $triggerField
 * @property integer $triggerOffset
 * @property string $triggerWeekdaysOnly
 * @property integer $triggerDataCollection
 * @property integer $action
 * @property integer $assignee
 * @property integer $rate
 * @property integer $confirmedNonBillableBy
 * @property integer $linkedDocumentTemplate
 * @property integer $linkedDataCollection
 * @property integer $template
 *
 * @method Actionstep_Api_Resources_Datacollections triggerDataCollection()
 * @method Actionstep_Api_Resources_Actions action()
 * @method Actionstep_Api_Resources_Participants assignee()
 * @method Actionstep_Api_Resources_Rates rate()
 * @method Actionstep_Api_Resources_Participants confirmedNonBillableBy()
 * @method Actionstep_Api_Resources_Documenttemplates linkedDocumentTemplate()
 * @method Actionstep_Api_Resources_Datacollections linkedDataCollection()
 * @method Actionstep_Api_Resources_Tasktemplates template()
 */
class Actionstep_Api_Resources_Tasks extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                            => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'name'                          => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'status'                        => array('fieldType'=>'attribute','dataType'=>'varchar.20','default'=>true,'required'=>true,'readOnly'=>false),
        'priority'                      => array('fieldType'=>'attribute','dataType'=>'varchar.20','default'=>true,'required'=>false,'readOnly'=>false),
        'dueTimestamp'                  => array('fieldType'=>'attribute','dataType'=>'timestamp','default'=>true,'required'=>true,'readOnly'=>false),
        'startedTimestamp'              => array('fieldType'=>'attribute','dataType'=>'timestamp','default'=>true,'required'=>false,'readOnly'=>false),
        'completedTimestamp'            => array('fieldType'=>'attribute','dataType'=>'timestamp','default'=>true,'required'=>false,'readOnly'=>false),
        'actualHours'                   => array('fieldType'=>'attribute','dataType'=>'numeric.2','default'=>true,'required'=>false,'readOnly'=>false),
        'billableHours'                 => array('fieldType'=>'attribute','dataType'=>'numeric.2','default'=>true,'required'=>false,'readOnly'=>false),
        'description'                   => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false),
        'assignedBy'                    => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'completeDuringStep'            => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'completeBeforeStep'            => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'mustStartBeforeTimestamp'      => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'expectedDurationValue'         => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'expectedDurationUnits'         => array('fieldType'=>'attribute','dataType'=>'varchar.25','default'=>false,'required'=>false,'readOnly'=>false),
        'isBillingHold'                 => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'isPartBilled'                  => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'confirmedNonBillable'          => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'confirmedNonBillableTimestamp' => array('fieldType'=>'attribute','dataType'=>'timestamp','default'=>false,'required'=>false,'readOnly'=>false),
        'hasTriggerDate'                => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'triggerField'                  => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>false,'readOnly'=>false),
        'triggerOffset'                 => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false),
        'triggerWeekdaysOnly'           => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>false,'required'=>false,'readOnly'=>false),
        'triggerDataCollection'         => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'datacollections'),
        'action'                        => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actions'),
        'assignee'                      => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participants'),
        'rate'                          => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'rates'),
        'confirmedNonBillableBy'        => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'participants'),
        'linkedDocumentTemplate'        => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'documenttemplates'),
        'linkedDataCollection'          => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'datacollections'),
        'template'                      => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'tasktemplates')
    );
}
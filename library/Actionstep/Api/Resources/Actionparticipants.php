<?php
/**
 * "actionparticipants" resource, this is generated code, do not modify.
 *
 * @property string $id
 * @property integer $participantNumber
 * @property integer $action
 * @property integer $participantType
 * @property integer $participant
 *
 * @method Actionstep_Api_Resources_Actions action()
 * @method Actionstep_Api_Resources_Participanttypes participantType()
 * @method Actionstep_Api_Resources_Participants participant()
 */
class Actionstep_Api_Resources_Actionparticipants extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>false,'required'=>true,'readOnly'=>true),
        'participantNumber' => array('fieldType'=>'attribute','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>true),
        'action'            => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'actions'),
        'participantType'   => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participanttypes'),
        'participant'       => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participants')
    );
}
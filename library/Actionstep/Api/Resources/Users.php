<?php
/**
 * "users" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $isCurrent
 * @property string $emailAddress
 * @property string $isActive
 * @property string $hasAuthority
 * @property integer $defaultRate
 * @property integer $division
 * @property integer $participant
 * @property integer $role
 *
 * @method Actionstep_Api_Resources_Rates defaultRate()
 * @method Actionstep_Api_Resources_Divisions division()
 * @method Actionstep_Api_Resources_Participants participant()
 * @method Actionstep_Api_Resources_Roles role()
 */
class Actionstep_Api_Resources_Users extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'           => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'isCurrent'    => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>true,'required'=>false,'readOnly'=>false),
        'emailAddress' => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>true,'readOnly'=>false),
        'isActive'     => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>true,'required'=>true,'readOnly'=>false),
        'hasAuthority' => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>true,'required'=>true,'readOnly'=>false),
        'defaultRate'  => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>false,'readOnly'=>false,'resource'=>'rates'),
        'division'     => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'divisions'),
        'participant'  => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'participants'),
        'role'         => array('fieldType'=>'link','dataType'=>'int4','default'=>false,'required'=>true,'readOnly'=>false,'resource'=>'roles')
    );
}
<?php

/**
 * Class Actionstep_Api_Resources_Actiontypes
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 */
class Actionstep_Api_Resources_Actiontypes extends Actionstep_Api_Resources_Abstract {

    // @TODO: more
    protected  $_fieldMap = array(
        'id'                => array('fieldType'=>'attribute', 'dataType'=>'int4',         'default'=>true,    'required'=>true,           'readOnly'=>true),
        'name'              => array('fieldType'=>'attribute', 'dataType'=>'varchar',      'default'=>true,    'required'=>true),
        'description'       => array('fieldType'=>'attribute', 'dataType'=>'varchar',      'default'=>false,   'required'=>false),
        'primaryParticipantType' => array('fieldType'=>'link',  'dataType'=>'int4',         'required'=>true, 'resource'=>'participanttypes', 'custom'=>true, 'readOnly'=>true)
    );
}
<?php

/**
 * Class Actionstep_Api_Resources_Participanttypes
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $isBaseParticipantType
 * @property string $companyFlag
 * @property string $taxNumberAlias
 */
class Actionstep_Api_Resources_Participanttypes extends Actionstep_Api_Resources_Abstract {
    protected  $_fieldMap = array(
        'id'                    => array('fieldType'=>'attribute', 'dataType'=>'int4',         'default'=>true,    'required'=>true,           'readOnly'=>true),
        'name'                  => array('fieldType'=>'attribute', 'dataType'=>'varchar',      'default'=>true,    'required'=>true),
        'description'           => array('fieldType'=>'attribute', 'dataType'=>'varchar',      'default'=>false,   'required'=>false),
        'isBaseParticipantType' => array('fieldType'=>'attribute', 'dataType'=>'varchar.1',    'default'=>true,    'required'=>false),
        'companyFlag'           => array('fieldType'=>'attribute', 'dataType'=>'varchar.1',    'default'=>true,    'required'=>false),
        'taxNumberAlias'        => array('fieldType'=>'attribute', 'dataType'=>'varchar',      'default'=>true,    'required'=>false)
    );
}
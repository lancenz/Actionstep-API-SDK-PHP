<?php

/**
 * "actions" resource, generated code, do not modify!
 *
 * @property integer $id
 * @property string $name
 * @property string $reference
 * @property integer $priority
 * @property string $status
 * @property string $statusTimestamp
 * @property string $isbillableOverride
 * @property string $createdTimestamp
 * @property string $modifiedTimestamp
 * @property string $isDeleted
 * @property string $deletedBy
 * @property string $deletedTimestamp
 * @property string $isFavorite
 * @property integer $assignedTo
 * @property integer $division
 * @property integer $actionType
 *
 * @method Actionstep_Api_Resources_Participants assignedTo()
 * @method Actionstep_Api_Resources_Divisions division()
 * @method Actionstep_Api_Resources_Actiontypes actionType()
 */
class Actionstep_Api_Resources_Actions extends Actionstep_Api_Resources_Abstract {

    protected  $_fieldMap = array(
        'id'                => array('fieldType'=>'attribute', 'dataType'=>'int4',         'default'=>true,    'required'=>true,           'readOnly'=>true),
        'name'              => array('fieldType'=>'attribute', 'dataType'=>'varchar',      'default'=>true,    'required'=>true),
        'reference'         => array('fieldType'=>'attribute', 'dataType'=>'varchar',      'default'=>false,   'required'=>false),
        'priority'          => array('fieldType'=>'attribute', 'dataType'=>'int4',         'default'=>true,    'required'=>false),
        'stats'             => array('fieldType'=>'attribute', 'dataType'=>'varchar.25',   'default'=>true,    'required'=>false,          'validValues'=>array('Active', 'Inactive', 'Template', 'Closed')),
        'statusTimestamp'   => array('fieldType'=>'attribute', 'dataType'=>'timestamptz',  'default'=>false,   'required'=>true,           'readOnly'=>true),
        'isbillableOverride'=> array('fieldType'=>'attribute', 'dataType'=>'varchar.1',    'default'=>false,   'required'=>false,          'validValues'=>array(null, 'T', 'F')),
        'createdTimestamp'  => array('fieldType'=>'attribute', 'dataType'=>'date',         'default'=>false,   'required'=>false,          'readOnly'=>true),
        'modifiedTimestamp' => array('fieldType'=>'attribute', 'dataType'=>'timestamptz',  'default'=>false,   'required'=>false,          'readOnly'=>true),
        'isDeleted'         => array('fieldType'=>'attribute', 'dataType'=>'varchar.1',    'default'=>false,   'required'=>true,           'readOnly'=>true),
        'deletedBy'         => array('fieldType'=>'attribute', 'dataType'=>'varchar.1',    'default'=>false,   'required'=>false,          'readOnly'=>true),
        'deletedTimestamp'  => array('fieldType'=>'attribute', 'dataType'=>'timestamptz',  'default'=>false,   'required'=>false,          'readOnly'=>true),
        'isFavorite'        => array('fieldType'=>'attribute', 'dataType'=>'varchar.1',    'default'=>false,   'required'=>false),
        'assignedTo'        => array('fieldType'=>'link',      'dataType'=>'int4',         'default'=>false,   'required'=>true,    'resource'=>'participants'),
        'division'          => array('fieldType'=>'link',      'dataType'=>'int4',         'default'=>false,   'required'=>false,   'resource'=>'divisions', 'readOnly'=>true),
        'actionType'        => array('fieldType'=>'link',      'dataType'=>'int4',         'default'=>false,   'required'=>true,    'resource'=>'actiontypes')
    );

}
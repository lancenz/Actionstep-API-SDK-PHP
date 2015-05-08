<?php
/**
 * "participanttypes" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $isBaseParticipantType
 * @property string $companyFlag
 * @property string $taxNumberAlias
 *
 */
class Actionstep_Api_Resources_Participanttypes extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'                    => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'name'                  => array('fieldType'=>'attribute','dataType'=>'varchar.50','default'=>true,'required'=>true,'readOnly'=>false),
        'description'           => array('fieldType'=>'attribute','dataType'=>'varchar.255','default'=>true,'required'=>false,'readOnly'=>false),
        'isBaseParticipantType' => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>true,'required'=>false,'readOnly'=>false),
        'companyFlag'           => array('fieldType'=>'attribute','dataType'=>'varchar.1','default'=>true,'required'=>false,'readOnly'=>false),
        'taxNumberAlias'        => array('fieldType'=>'attribute','dataType'=>'varchar','default'=>true,'required'=>false,'readOnly'=>false)
    );
}
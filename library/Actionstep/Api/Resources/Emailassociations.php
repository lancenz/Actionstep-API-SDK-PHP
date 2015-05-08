<?php
/**
 * "emailassociations" resource, this is generated code, do not modify.
 *
 * @property integer $id
 * @property integer $email
 * @property integer $action
 *
 * @method Actionstep_Api_Resources_Emails email()
 * @method Actionstep_Api_Resources_Actions action()
 */
class Actionstep_Api_Resources_Emailassociations extends Actionstep_Api_Resources_Abstract {

    protected $_fieldMap = array(
        'id'     => array('fieldType'=>'attribute','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false),
        'email'  => array('fieldType'=>'link','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false,'resource'=>'emails'),
        'action' => array('fieldType'=>'link','dataType'=>'int4','default'=>true,'required'=>true,'readOnly'=>false,'resource'=>'actions')
    );
}
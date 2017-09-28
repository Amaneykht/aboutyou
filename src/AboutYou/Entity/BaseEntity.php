<?php
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 28/09/2017
 * Time: 04:34 م
 */

namespace AboutYou\Entity;


use AboutYou\Validation\Validator;

Abstract class BaseEntity
{
    protected $_errors;

    public function validate() {

        $validator = new Validator($this);
        $validator->setValidationRules($this->rules());
        $result = $validator->validate();
        $this->_errors = $validator->getErrors();
        return $result;
    }

    public abstract function rules();
}
<?php
namespace AboutYou\Validation;
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 28/09/2017
 * Time: 04:05 م
 */
class Validator implements ValidatorInterface
{
    const VALIDATION_RULES_ERROR_MESSAGE = "Invalid validation rules!";
    private $model;
    private $errors;
    private $validationRules;

    public function __construct($model) {
        $this->model = $model;
    }

    public function addError($error_message) {
        $this->errors[] = $error_message;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function setValidationRules($rules) {
        $this->validationRules = $rules;
    }

    public function checkRequiredAttributes($attribute, $params)
    {
        if(empty($this->model->$attribute))
            $this->addError(self::REQUIRED_ERROR_MESSAGE);
    }

    public function checkIntegerAttributes($attribute, $params)
    {
        if(!is_int($this->model->$attribute))
            $this->addError(self::INTEGER_ERROR_MESSAGE);
    }

    public function checkBooleanAttributes($attribute, $params)
    {
        if(!is_bool($this->model->$attribute))
            $this->addError(self::BOOLEAN_ERROR_MESSAGE);
    }

    public function checkInAttributes($attribute, $params)
    {
        if(!in_array($this->model->$attribute, $params))
            $this->addError(self::BOOLEAN_ERROR_MESSAGE);
    }

    public function validate() {
        if(empty($this->validationRules))
            return self::VALIDATION_RULES_ERROR_MESSAGE;

        foreach($this->validationRules as $attribute => $rule) {
            $validator = null;
            $params = [];
            if(is_array($rule))
            {
                $validator = $rule[0];
                $params = array_slice($rule, 1);
            }
            else
                $validator = $rule;

            switch($validator) {
                case 'required' :
                    $this->checkRequiredAttributes($attribute, $params);
                    break;
                case 'integer' :
                    $this->checkIntegerAttributes($attribute, $params);
                    break;
                case 'boolean' :
                    $this->checkBooleanAttributes($attribute, $params);
                    break;
                case 'in' :
                    $this->checkInAttributes($attribute, $params);
                    break;
            }
        }

        if(!empty($this->errors))
            return false;

        return true;
    }
}
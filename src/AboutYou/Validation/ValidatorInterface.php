<?php
namespace AboutYou\Validation;
/**
 * Created by PhpStorm.
 * User: Amaney-kht
 * Date: 28/09/2017
 * Time: 03:48 م
 */
interface ValidatorInterface
{
    const REQUIRED_ERROR_MESSAGE = "";
    const INTEGER_ERROR_MESSAGE = "";
    const BOOLEAN_ERROR_MESSAGE = "";
    const IN_ERROR_MESSAGE = "";

    public function checkRequiredAttributes($attribute, $params);

    public function checkIntegerAttributes($attribute, $params);

    public function checkBooleanAttributes($attribute, $params);

    public function checkInAttributes($attribute, $params);

    public function validate();

}
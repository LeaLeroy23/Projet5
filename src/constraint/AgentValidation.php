<?php

namespace Hestia\src\constraint;

use Hestia\config\Parameter;

class AgentValidation extends Validation
{
    private $errors = [];
    private $constraint;

    public function __construct()
    {
        $this->constraint = new Constraint();
    }

    public function check(Parameter $post)
    {
        foreach ($post->all() as $key => $value) {
            $this->checkField($key, $value);
        }
        return $this->errors;
    }

    private function checkField($name, $value)
    {
        if($name === 'function') {
            $error = $this->checkFunction($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'email') {
            $error = $this->checkEmail($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'firstname') {
            $error = $this->checkFirstname($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'lastname') {
            $error = $this->checkLastname($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'phone') {
            $error = $this->checkPhone($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'autorisation') {
            $error = $this->checkAutorisation($name, $value);
            $this->addError($name, $error);
        }
        elseif ($name === 'password') {
            $error = $this->checkPassword($name, $value);
            $this->addError($name, $error);
        }
        elseif ($name === 'status') {
            $error = $this->checkStatus($name, $value);
            $this->addError($name, $error);
        }
        elseif ($name === 'newPassword') {
            $error = $this->checkPassword($name, $value);
            $this->addError($name, $error);
        }
        elseif ($name === 'confirmPassword') {
            $error = $this->checkPassword($name, $value);
            $this->addError($name, $error);
        }
    }

    private function addError($name, $error) {
        if($error) {
            $this->errors += [
                $name => $error
            ];
        }
    }

    private function checkFunction($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('function', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('function', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 30)) {
            return $this->constraint->maxLength('function', $value, 30);
        }
    }

    private function checkFirstname($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('firstname', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('firstname', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 30)) {
            return $this->constraint->maxLength('firstname', $value, 30);
        }
    }

    private function checkLastname($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('lastname', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('lastname', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 30)) {
            return $this->constraint->maxLength('lastname', $value, 30);
        }
    }

    private function checkEmail($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('email', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('email', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 50)) {
            return $this->constraint->maxLength('email', $value, 50);
        }
    }

    private function checkPhone($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('phone', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('phone', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 30)) {
            return $this->constraint->maxLength('phone', $value, 30);
        }
    }

    private function checkAutorisation($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('autorisation', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('autorisation', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 30)) {
            return $this->constraint->maxLength('autorisation', $value, 30);
        }
    }

    private function checkPassword($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('password', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('password', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 255)) {
            return $this->constraint->maxLength('password', $value, 255);
        }
    }

    private function checkStatus($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('password', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('password', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 2)) {
            return $this->constraint->maxLength('password', $value, 2);
        }
    }

    private function checkNewPassword($name, $value)
    {
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('password', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 75)) {
            return $this->constraint->maxLength('password', $value, 75);
        }
    }

    private function checkConfirmPassword($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('password', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('password', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 75)) {
            return $this->constraint->maxLength('password', $value, 75);
        }
    }
}
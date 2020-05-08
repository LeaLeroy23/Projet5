<?php

namespace App\src\constraint;

use App\config\Parameter;

class TypeValidation extends Validation
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
        if($name === 'type') {
            $error = $this->checkType($name, $value);
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

    private function checkType($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('type', $value);
        }
        if($this->constraint->minLength($name, $value, 4)) {
            return $this->constraint->minLength('type', $value, 4);
        }
        if($this->constraint->maxLength($name, $value, 40)) {
            return $this->constraint->maxLength('type', $value, 40);
        }
    }

}
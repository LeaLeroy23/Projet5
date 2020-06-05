<?php

namespace Hestia\src\constraint;

use Hestia\config\Parameter;

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
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('type', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 40)) {
            return $this->constraint->maxLength('type', $value, 40);
        }
        if($this->constraint->uniqueType($name, $value)) {
            return $this->constraint->uniqueType('type', $value);
        }
    }

}
<?php

namespace App\src\constraint;

use App\config\Parameter;

class FrequencyValidation extends Validation
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
        if($name === 'frequency') {
            $error = $this->checkFrequency($name, $value);
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

    private function checkFrequency($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('frequency', $value);
        }
        if($this->constraint->minLength($name, $value, 4)) {
            return $this->constraint->minLength('frequency', $value, 4);
        }
        if($this->constraint->maxLength($name, $value, 40)) {
            return $this->constraint->maxLength('frequency', $value, 40);
        }
    }

}
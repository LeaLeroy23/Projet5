<?php

namespace Hestia\src\constraint;

use Hestia\config\Parameter;

class EstateValidation extends Validation
{
    private $errors = [];
    private $constraint;

    public function __construct(){
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
        if($name === 'title') {
            $error = $this->checkTitle($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'floor') {
            $error = $this->checkFloor($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'area') {
            $error = $this->checkArea($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'zip_code') {
            $error = $this->checkZip_code($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'building_year') {
            $error = $this->checkBuilding_year($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'excerpt') {
            $error = $this->checkExcerpt($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'description') {
            $error = $this->checkDescription($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'charge_price') {
            $error = $this->checkCharge_price($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'price') {
            $error = $this->checkPrice($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'fees') {
            $error = $this->checkFees($name, $value);
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

    private function checkTitle($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('title', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('title', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 75)) {
            return $this->constraint->maxLength('title', $value, 75);
        }
    }

    private function checkFloor($name, $value)
    {
        if($this->constraint->minLength($name, $value, 0)) {
            return $this->constraint->minLength('floor', $value, 0);
        }
        if($this->constraint->maxLength($name, $value, 2)) {
            return $this->constraint->maxLength('floor', $value, 2);
        }
    }

    private function checkArea($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('area', $value);
        }
        if($this->constraint->minLength($name, $value, 1)) {
            return $this->constraint->minLength('area', $value, 1);
        }
        if($this->constraint->maxLength($name, $value, 4)) {
            return $this->constraint->maxLength('area', $value, 4);
        }
    }

    private function checkCity($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('city', $value);
        }
        if($this->constraint->minLength($name, $value, 1)) {
            return $this->constraint->minLength('city', $value, 1);
        }
        if($this->constraint->maxLength($name, $value, 7)) {
            return $this->constraint->maxLength('city', $value, 7);
        }
    }

    private function checkBuilding_year($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('building_year', $value);
        }
        if($this->constraint->minLength($name, $value, 1)) {
            return $this->constraint->minLength('building_year', $value, 1);
        }
        if($this->constraint->maxLength($name, $value, 4)) {
            return $this->constraint->maxLength('building_year', $value, 4);
        }
    }

    private function checkExcerpt($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('excerpt', $value);
        }
        if($this->constraint->minLength($name, $value, 5)) {
            return $this->constraint->minLength('excerpt', $value, 5);
        }
        if($this->constraint->maxLength($name, $value, 100)) {
            return $this->constraint->maxLength('excerpt', $value, 100);
        }
    }

    private function checkDescription($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('description', $value);
        }
        if($this->constraint->minLength($name, $value, 20)) {
            return $this->constraint->minLength('description', $value, 20);
        }
        if($this->constraint->maxLength($name, $value, 850)) {
            return $this->constraint->maxLength('description', $value, 850);
        }
    }

    private function checkCharge_price($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('charge_price', $value);
        }
        if($this->constraint->minLength($name, $value, 1)) {
            return $this->constraint->minLength('charge_price', $value, 1);
        }
        if($this->constraint->maxLength($name, $value, 5)) {
            return $this->constraint->maxLength('charge_price', $value, 5);
        }
    }

    private function checkPrice($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('price', $value);
        }
        if($this->constraint->minLength($name, $value, 1)) {
            return $this->constraint->minLength('price', $value, 1);
        }
        if($this->constraint->maxLength($name, $value, 9)) {
            return $this->constraint->maxLength('price', $value, 9);
        }
    }

    private function checkFees($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('fees', $value);
        }
        if($this->constraint->minLength($name, $value, 1)) {
            return $this->constraint->minLength('fees', $value, 1);
        }
        if($this->constraint->maxLength($name, $value, 6)) {
            return $this->constraint->maxLength('fees', $value, 6);
        }
    }
    
}
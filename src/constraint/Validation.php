<?php

namespace Projet5\src\constraint;

class Validation
{
    public function validate($data, $name)
    {
        if($name === 'Estate'){
            $estateValidation = new EstateValidation();
            $errors = $estateValidation->check($data);
            return $errors;
        } else {
            
        }
        
    }
}
<?php

namespace App\src\constraint;

class Validation
{
    public function validate($data, $name)
    {
        if($name === 'Estate'){
            $estateValidation = new EstateValidation();
            $errors = $estateValidation->check($data);
            return $errors;
        } elseif ($name === "Agent"){
            $agentValidation = new AgentValidation();
            $errors = $agentValidation->check($data);
            return $errors;
        }
        
    }
}
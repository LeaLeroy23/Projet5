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
        } elseif ($name === "Category"){
            $categoryValidation = new CategoryValidation();
            $errors = $categoryValidation->check($data);
            return $errors;
        }
        elseif ($name === "Type"){
            $typeValidation = new TypeValidation();
            $errors = $typeValidation->check($data);
            return $errors;
        }
        elseif ($name === "Energy"){
            $energyValidation = new EnergyValidation();
            $errors = $energyValidation->check($data);
            return $errors;
        }
        elseif ($name === "Frequency"){
            $frequencyValidation = new FrequencyValidation();
            $errors = $frequencyValidation->check($data);
            return $errors;
        }
        
    }
}
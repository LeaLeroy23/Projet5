<?php

namespace Projet5\src\constraint;

use Projet5\config\Parameter;

class EstateValidation extends EstateValidation
{
    private $errors = [];
    private $constraint;

    public function __construct(){
        $this->constraint = new Constraint();
    }

    
}
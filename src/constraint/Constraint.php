<?php

namespace App\src\constraint;
use App\config\Parameter;
use App\src\DAO\CategoryDAO;

class Constraint
{
    public function notBlank($name, $value)
    {
        if(empty($value)) {
            return '<p class="alert alert-danger" role="alert">Le champ saisi est vide</p>';
        }
    }
    public function minLength($name, $value, $minSize)
    {
        if(strlen($value) < $minSize) {
            return '<p class="alert alert-danger" role="alert">Le champ doit contenir au moins '.$minSize.' caractères</p>';
        }
    }
    public function maxLength($name, $value, $maxSize)
    {
        if(strlen($value) > $maxSize) {
            return '<p class="alert alert-danger" role="alert">Le champ doit contenir au maximum '.$maxSize.' caractères</p>';
        }
    }
    public function unique($name, $value)
    {
        $categoryDAO = new \App\src\DAO\CategoryDAO;
        
        foreach ($keys as $key){
            if (array_key_exists($key)){
                var_dump($key);
                die();
                return '<p class="alert alert-danger" role="alert">La valeur '.$value.' existe déjà</p>';
            }
        }
       
    }

}
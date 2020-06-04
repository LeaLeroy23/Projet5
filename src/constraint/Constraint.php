<?php

namespace App\src\constraint;
use App\config\Parameter;


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
    public function uniqueCategory($name, $value)
    {
        $categoryDAO = new \App\src\DAO\CategoryDAO;
        $category = $categoryDAO->getCategoryByName($value);

        if ($category['nb_category'] && $category > 0){
            return '<p class="alert alert-danger" role="alert">La valeur '.$value.' existe déjà</p>';
        }
    }
    public function uniqueType($name, $value)
    {
        $typeDAO = new \App\src\DAO\TypeDAO;
        $type = $typeDAO->getTypeByName($value);

        if ($type['nb_type'] && $type > 0){
            return '<p class="alert alert-danger" role="alert">La valeur '.$value.' existe déjà</p>';
        }
    }
    public function uniqueFrequency($name, $value)
    {
        $frequencyDAO = new \App\src\DAO\FrequencyDAO;
        $frequency = $frequencyDAO->getFrequencyByName($value);

        if ($frequency['nb_frequency'] && $frequency > 0){
            return '<p class="alert alert-danger" role="alert">La valeur '.$value.' existe déjà</p>';
        }
    }
    public function uniqueEnergy($name, $value)
    {
        $energyDAO = new \App\src\DAO\EnergyDAO;
        $energy = $energyDAO->getEnergyByName($value);

        if ($energy['nb_energy'] && $energy > 0){
            return '<p class="alert alert-danger" role="alert">La valeur '.$value.' existe déjà</p>';
        }
    }

}
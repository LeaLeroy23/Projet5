<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\src\model\Type;

class TypeDAO extends DAO
{
    public function addType(){
        $sql = 'INSERT INTO type (type = ?) VALUES (?)';
    }
}
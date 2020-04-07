<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

//Uniquement pour la classe DAO
use PDO;
use Exception;

class EstateDAO extends DAO
{
    public function getEstates(){
        $sql ='SELECT * FROM estate ORDER BY id DESC';
        return $this->createQuery($sql);
    }

    public function getEstate($estateId)
    {
        $sql= 'SELECT * FROM estate WHERE id = ?';
        return $this->createQuery($sql, [$estateId]);
    }
}
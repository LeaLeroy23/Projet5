<?php

//Pour toutes les classes dans DAO
namespace Projet5\src\DAO;

use Projet5\config\Parameter;
use Projet5\src\model\Estate;

//Uniquement pour la classe DAO
use PDO;
use Exception;

class EstateDAO extends DAO
{
    private function buildObject($row)
    {
        $article = new Estate();
        return $article;
    }


}
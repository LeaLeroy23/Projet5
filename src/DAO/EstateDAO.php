<?php

//Pour toutes les classes dans DAO
namespace Projet5\src\DAO;

use Projet5\config\Parameter;
use Projet5\src\model\Estate;

//Uniquement pour la classe DAO
use PDO;
use Exception;

class EstateDAO
{
    private function buildObject($row)
    {
        $estate = new Estate();
        return $estate;
    }

    public function getEstates()
    {
        $sql = '';
        $result = $this->query($sql);
        $estates = [];
        foreach ($result as $row){
            $estateId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $estates;
    }

    public function getEstate($estateId)
    {
        $sql = 'SELECT * FROM estate WHERE id = ?';
        $result = $this->createQuery($sql, [$estateId]);
        $estate = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($estate);
    }


}
<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\src\model\Estate;

class EstateDAO extends DAO
{
    private function buildObject($row){
        $estate = new Estate;
        $estate->setId($row['id']);
        $estate->setTtitle($row['title']);
        $estate->setRooms($row['rooms']);
        $estate->setBedrooms($row['bedrooms']);
        $estate->setBathrooms($row['bathrooms']);
        $estate->setPrice($row['price']);
        return $estate;
    }

    public function getEstates(){
        $sql ='SELECT * FROM estate ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $estates = [];
        foreach ($result as $row){
            $estateId = $row['id'];
            $estates[$estateId] = $this->buidObject($row);
        }
        $result->closeCursor();
        return $estates;
    }

    public function getEstate($estateId)
    {
        $sql= 'SELECT * FROM estate WHERE id = ?';
        $result = $this->createQuery($sql, [$estateId]);
        $estate = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($estate);
    }
}
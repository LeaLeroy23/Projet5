<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\src\model\Energy;

class EnergyDAO extends DAO
{
    private function buildObject($row){
        $energy = new Energy;
        $energy->setId($row['id']);
        $energy->setTtitle($row['title']);
        $energy->setRooms($row['rooms']);
        $energy->setBedrooms($row['bedrooms']);
        return $energy;
    }

    public function allEnergies(){

    }

    public function addEnergy(){
        $sql = 'INSERT INTO energy () VALUES (:)';
        $this->createQuery($sql, [
            '' => $post->get(''),
            '' => $post->get(''),
            '' => $post->get('')
        ]);
    }

}
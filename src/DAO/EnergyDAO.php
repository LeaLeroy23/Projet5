<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Energy;

class EnergyDAO extends DAO
{
    private function buildObject($row){
        $energy = new Energy;
        $energy->setId($row['id']);
        $energy->setName($row['name']);
        return $energy;
    }

    public function getEnergies(){
        $sql ='SELECT * FROM energy';
        $result = $this->createQuery($sql);
        $energies = [];
        foreach ($result as $row){
            $energyId = $row['id'];
            $energies[$energyId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $energies;
    }

    public function getEnergy($energyId)
    {
        $sql= 'SELECT * FROM energy WHERE id = ?';
        $result = $this->createQuery($sql, [$energyId]);
        $energy = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($energy);
    }

    public function addEnergy($post){
        $sql = 'INSERT INTO energy (energy_diagnostic)
        VALUES (:energy_diagnostic)';
        $this->createQuery($sql, [
            'energy_diagnostic' => $post->get('energy_diagnostic')
        ]);
    }

    public function deleteEnergy($energyId){
        $sql = 'DELETE FROM energy WHERE id = ?';
        $this->createQuery($sql, [$energyId]);
    }

}
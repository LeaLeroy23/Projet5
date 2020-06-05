<?php

//Pour toutes les classes dans DAO
namespace Hestia\src\DAO;

use Hestia\config\Parameter;
use Hestia\src\model\Charges;

class FrequencyDAO extends DAO
{
    private function buildObject($row){
        $frequency = new Charges;
        $frequency->setId($row['id']);
        $frequency->setFrequency($row['frequency']);
        return $frequency;
    }

    public function getFrequencies(){
        $sql ='SELECT * FROM charge_frequency';
        $result = $this->createQuery($sql);
        $frequencies = [];
        foreach ($result as $row){
            $frequencyId = $row['id'];
            $frequencies[$frequencyId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $frequencies;
    }

    public function getFrequency($frequencyId)
    {
        $sql= 'SELECT * FROM charge_frequency WHERE id = ?';
        $result = $this->createQuery($sql, [$frequencyId]);
        $frequency = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($frequency);
    }

    public function getFrequencyByName($frequency)
    {
        $sql= 'SELECT count(id) as nb_frequency FROM frequency WHERE frequency = ?';
        $result = $this->createQuery($sql, [$frequency]);
        return $result->fetch();
    }

    public function addFrequency($post)
    {
        $sql = 'INSERT INTO charge_frequency (frequency) 
        VALUES (:frequency)';
        $strName = ucfirst(strtolower($post->get('frequency')));
        $this->createQuery($sql, [
            'frequency' => $strName
        ]);
    }

    public function deleteFrequency($frequencyId){
        $sql = 'DELETE FROM charge_frequency WHERE id = ?';
        $this->createQuery($sql, [$frequencyId]);
    }

}
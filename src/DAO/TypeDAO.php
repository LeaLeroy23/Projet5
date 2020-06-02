<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Type;

class TypeDAO extends DAO
{
    private function buildObject($row){
        $type = new Type;
        $type->setId($row['id']);
        $type->setType($row['type']);
        return $type;
    }

    public function getTypes(){
        $sql ='SELECT * FROM type';
        $result = $this->createQuery($sql);
        $types = [];
        foreach ($result as $row){
            $typeId = $row['id'];
            $types[$typeId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $types;
    }

    public function getType($typeId)
    {
        $sql= 'SELECT * FROM type WHERE id = ?';
        $result = $this->createQuery($sql, [$typeId]);
        $type = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($type);
    }

    public function getTypeByName($type)
    {
        $sql= 'SELECT count(id) as nb_type FROM type WHERE type = ?';
        $result = $this->createQuery($sql, [$type]);
        return $result->fetch();
    }

    public function addType($post){
        $sql = 'INSERT INTO type (type) 
        VALUES (:type)';
        $strName = ucfirst(strtolower($post->get('type')));
        $this->createQuery($sql, [
            'type' => $strName
        ]);
    }

    public function deleteType($typeId){
        $sql = 'DELETE FROM type WHERE id = ?';
        $this->createQuery($sql, [$typeId]);
    }

}
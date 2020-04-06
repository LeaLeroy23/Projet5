<?php

class Estate 
{
    public function getEstates(){
        $db = new Database();
        $connection = $db->getConnection();
        $result = $connection->query('SELECT * FROM estate ORDER BY id DESC');
        return $result;
    }

    public function getEstate($estateId)
    {
        $db = new Database();
        $connection = $db->getConnection();
        $result = $connection->prepare('SELECT * FROM estate WHERE id = ?');
        $result->execute([
            $estateId
        ]);
        return $result;
    }
}
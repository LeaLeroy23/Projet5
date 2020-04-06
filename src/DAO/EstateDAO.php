<?php

class Estate extends Database
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
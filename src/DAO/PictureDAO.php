<?php

//Pour toutes les classes dans DAO
namespace Hestia\src\DAO;

use Hestia\config\Parameter;
use Hestia\src\model\Picture;

class PictureDAO extends DAO
{
    private function buildObject($row){
        $picture = new Picture;
        $picture->setId($row['id']);
        $picture->setFile($row['file']);
        $picture->setEstateId($row['estate_id']);
        return $picture;
    }

    public function getPictures(){
        $sql ='SELECT * FROM picture';
        $result = $this->createQuery($sql);
        $pictures = [];
        foreach ($result as $row){
            $pictureId = $row['id'];
            $pictures[$pictureId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $pictures;
    }

    public function getPicture($pictureId)
    {
        $sql= 'SELECT * FROM picture where id = ?';
        $result = $this->createQuery($sql, [$pictureId]);
        $picture = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($picture);
    }

    public function getPicturesByEstateId($estateId)
    {
        $sql= 'SELECT * FROM picture WHERE estate_id =' . $estateId;
        $result = $this->createQuery($sql);
        $pictures = [];
        foreach ($result as $row) {
            $pictureId = $row['id'];
            $pictures[$pictureId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $pictures;
    }

    public function addPictures($filename, $estateId)
    {       
        $sql = 'INSERT INTO picture (file, estate_id) VALUES (:file, :estate_id)';

        $this->createQuery($sql, [
            'file' => $filename,
            'estate_id' => $estateId
        ]);
    }

    public function deletePicture($pictureId){
        $sql = "DELETE FROM picture WHERE id=?";
        $this->createQuery($sql, [$pictureId]);
    }

}
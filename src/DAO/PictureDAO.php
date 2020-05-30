<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Picture;

class PictureDAO extends DAO
{
    private function buildObject($row){
        $picture = new Picture;
        $picture->setId($row['id']);
        $picture->setFilename($row['filename']);
        $picture->setEstate_id($row['estate_id']);
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
        $sql= 'SELECT * FROM picture WHERE id = ?';
        $result = $this->createQuery($sql, [$pictureId]);
        $picture = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($picture);
    }

    public function addPictures($post, $filename)
    {
        $sql = 'INSERT INTO picture (filename, estate_id) VALUES (:filename, :estate_id)';
        $result = $this->createQuery($sql, [
            'filename' => $filename,
            'estate_id' => $post->get('estate_id')
        ]);

    }

}
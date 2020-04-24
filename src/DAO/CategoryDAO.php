<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\src\model\Category;

class CategoryDAO extends DAO
{
    public function allCategory(){

    }

    public function addCategory(){
        $sql = 'INSERT INTO `category`(`id`, `name`) VALUES ([value-1],[value-2])';
        $this->createQuery($sql, [
            'name' => $post->get('name')
        ]);
    }

}
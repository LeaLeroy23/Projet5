<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Category;

class CategoryDAO extends DAO
{
    private function buildObject($row){
        $category = new Category;
        $category->setId($row['id']);
        $category->setName($row['name']);
        return $category;
    }

    public function getCategories(){
        $sql ='SELECT * FROM category';
        $result = $this->createQuery($sql);
        $categories = [];
        foreach ($result as $row){
            $categoryId = $row['id'];
            $categories[$categoryId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $categories;
    }

    public function getCategory($categoryId)
    {
        $sql= 'SELECT * FROM category WHERE id = ?';
        $result = $this->createQuery($sql, [$categoryId]);
        $category = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($category);
    }

    public function addCategory($post){
        $sql = 'INSERT INTO category (name)
        VALUES (:name)';
        $this->createQuery($sql, [
            'name' => $post->get('name')
        ]);
    }

    public function deleteCategory($categoryId){
        $sql = 'DELETE FROM category WHERE id = ?';
        $this->createQuery($sql, [$categoryId]);
    }

}
<?php

//Pour toutes les classes dans DAO
namespace Hestia\src\DAO;

use Hestia\config\Parameter;
use Hestia\src\model\Category;

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

    public function getCategoryByName($category)
    {
        $sql= 'SELECT count(id) as nb_category FROM category WHERE name = ?';
        $result = $this->createQuery($sql, [$category]);
        return $result->fetch();
    }

    public function addCategory($post){
        $sql = 'INSERT INTO category (name) VALUES (:name)';
        $strName = ucfirst(strtolower($post->get('name')));
        $this->createQuery($sql, [
            'name' => $strName
        ]);
    }

    public function deleteCategory($categoryId){
        $sql = 'DELETE FROM category WHERE id = ?';
        $this->createQuery($sql, [$categoryId]);
    }

    public function getEstatesByCategory(){
        $sql = "SELECT e.title as title, e.excerpt as excerpt, e.status as status, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.area as area, e.city as city, c.name as category, t.type as type, a.firstname as firstname, a.lastname as lastname
                FROM category c
                INNER JOIN estate e
                ON e.title = c.id
                INNER JOIN type t
                ON e.type_id = t.id
                INNER JOIN agent a
                ON e.agent_id = a.id
                WHERE c.id =" . $categoryId ;
        $result = $this->createQuery($sql)->fetchAll();
        return $result;
    }

}
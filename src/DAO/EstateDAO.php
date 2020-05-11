<?php

//Pour toutes les classes dans DAO
namespace App\src\DAO;

use App\src\model\Estate;

class EstateDAO extends DAO
{
    private function buildObject($row){
        $estate = new Estate;
        $estate->setId($row['id']);
        $estate->setType_id($row['type_id']);
        $estate->setCategory_id($row['category_id']);
        $estate->setTitle($row['title']);
        $estate->setExcerpt($row['excerpt']);
        $estate->setDescription($row['description']);
        $estate->setArea($row['area']);
        $estate->setRooms($row['rooms']);
        $estate->setBedrooms($row['bedrooms']);
        $estate->setBathrooms($row['bathrooms']);
        $estate->setParking($row['parking']);
        $estate->setParking_type($row['parking_type']);
        $estate->setAgent_id($row['agent_id']);
        $estate->setOutside($row['outside']);
        $estate->setOutside_area($row['outside_area']);
        $estate->setFloor($row['floor']);
        $estate->setCharge_price($row['charge_price']);
        $estate->setPrice($row['price']);
        $estate->setFees($row['fees']);
        $estate->setAvailable($row['available']);
        $estate->setBuilding_year($row['building_year']);
        $estate->setZip_code($row['zip_code']);
        $estate->setCreated_at($row['created_at']);
        $estate->setCharge_frequency_id($row['charge_frequency_id']);
        $estate->setStatus($row['status']);
        $estate->setPicture_url($row['picture_url']);
        return $estate;
    }

    public function getEstates(){
        $sql ='SELECT * FROM estate ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $estates = [];
        foreach ($result as $row){
            $estateId = $row['id'];
            $estates[$estateId] = $this->buidObject($row);
        }
        $result->closeCursor();
        return $estates;
    }

    public function getEstate($estateId)
    {
        $sql= 'SELECT * FROM estate WHERE id = ?';
        $result = $this->createQuery($sql, [$estateId]);
        $estate = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($estate);
    }

    public function addEstate(Parameter $post){
        $sql = "INSERT INTO estate (type_id, category_id, title, excerpt, description, area, rooms, bedrooms, bathrooms, parking, parking_type, agent_id, outside, outside_area, floor, charge_price, price, fees, available, building_year, zip_code, created_at, charge_frequency_id, status, picture_url)
                VALUES (:firstname, :lastname, :phone, :email, :function, :description, :avatar, :password, :token, :status, :created_at)";
        
        $this->createQuery($sql, [
            'firstname' => $post->get('firstname'),
            'lastname' => $post->get('lastname'),
            'phone' => $post->get('phone'),
            'email' => $post->get('email'),
            'function' => $post->get('function'),
            'description' => null,
            'avatar' => null,
            'password' => $password,
            'token' => $token,
            'status' => $post->get('status'),
            'created_at' => $createdAt
        ]);
    }

   
}
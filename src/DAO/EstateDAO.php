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
        $estate->setConvertible_attic($row['convertible_attic']);
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
            $estates[$estateId] = $this->buildObject($row);
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

    public function addEstate($post){
        print_r($post);
        $sql = "INSERT INTO estate (type_id, category_id, title, floor, area, rooms, bedrooms, bathrooms, convertible_attic, outside, outside_area, parking, parking_type, zip_code, building_year, available, excerpt, description, picture_url, charge_price, charge_frequency_id, price, fees, created_at, agent_id, status)
                VALUES (:type_id, :category_id, :title, :floor, :area, :rooms, :bedrooms, :bathrooms, :convertible_attic, :outside, :outside_area, :parking, :parking_type, :zip_code, :building_year, :available, :excerpt, :description, :picture_url, :charge_price, :charge_frequency_id, :price, :fees, :created_at, :agent_id, :status)";
        
        $this->createQuery($sql, [
            'type_id' => $post->get('type_id'),
            'category_id' => $post->get('category_id'),
            'title' => $post->get('title'),
            'floor' => $post->get('floor'),
            'area' => $post->get('area'),
            'rooms' => $post->get('rooms'),
            'bedrooms' => $post->get('bedrooms'),
            'bathrooms' => $post->get('bathrooms'),
            'convertible_attic' => $post->get('convertible_attic'),
            'outside' => $post->get('outside'),
            'outside_area' => $post->get('outside_area'),
            'parking' => $post->get('parking'),
            'parking_type' => $post->get('parking_type'),
            'zip_code' => $post->get('zip_code'),
            'building_year' => $post->get('building_year'),
            'available' => $post->get('available'),
            'excerpt' => $post->get('excerpt'),
            'description' => $post->get('description'),
            'picture_url' => $post->get('picture_url'),
            'charge_price' => $post->get('charge_price'),
            'charge_frequency_id' => $post->get('charge_frequency_id'),
            'price' => $post->get('price'),
            'fees' => $post->get('fees'),
            'created_at' => $post->get('created_at'),
            'agent_id' => $post->get('agent_id'),
            'status' => $post->get('status'),
        ]);
    }

   
}
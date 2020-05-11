<?php

namespace App\src\model;

class Estate
{
    
    private $id;

    private $type_id;

    private $category_id;

    private $title;

    private $excerpt;

    private $description;

    private $area;

    private $rooms;

    private $bedrooms;

    private $bathrooms;

    private $parking;

    private $parking_type;

    private $agent_id;

    private $outside;

    private $outside_area;

    private $floor;

    private $charge_price;

    private $price;

    private $fees;

    private $available;

    private $building_year;

    private $zip_code;

    private $created_at;

    private $balcony;

    private $terrace;

    private $convertible_attic;

    private $charge_frequency_id;

    private $status;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getType_id()
    {
        return $this->type_id;
    }

    public function setType_id($type_id)
    {
        $this->type_id = $type_id;
    }

    public function getCategory_id()
    {
        return $this->category_id;
    }

    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getExcerpt()
    {
        return $this->excerpt;
    }

    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }

    public function getRooms()
    {
        return $this->rooms;
    }

    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }

    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;
    }

    public function getBathrooms()
    {
        return $this->bathrooms;
    }

    public function setBathrooms($bathrooms)
    {
        $this->bathrooms = $bathrooms;
    }

    public function getParking()
    {
        return $this->parking;
    }

    public function setParking($parking)
    {
        $this->parking = $parking;
    }

    public function getParking_type()
    {
        return $this->parking_type;
    }

    public function setParking_type($parking_type)
    {
        $this->parking_type = $parking_type;
    }

    public function getAgent_id()
    {
        return $this->agent_id;
    }

    public function setAgent_id($agent_id)
    {
        $this->agent_id = $agent_id;
    }

    public function getOutside()
    {
        return $this->outside;
    }

    public function setOutside($outside)
    {
        $this->outside = $outside;
    }
    
    public function getOutside_area()
    {
        return $this->outside_area;
    }

    public function setOutside_area($outside_area)
    {
        $this->outside_area = $outside_area;
    }

    public function getFloor()
    {
        return $this->floor;
    }

    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

    public function getCharge_price()
    {
        return $this->charge_price;
    }

    public function setCharge_price($charge_price)
    {
        $this->charge_price = $charge_price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getFees()
    {
        return $this->fees;
    }

    public function setFees($fees)
    {
        $this->fees = $fees;
    }

    public function getAvailable()
    {
        return $this->available;
    }

    public function setAvailable($available)
    {
        $this->available = $available;
    }

    public function getBuilding_year()
    {
        return $this->building_year;
    }

    public function setBuilding_year($building_year)
    {
        $this->building_year = $building_year;
    }

    public function getZip_code()
    {
        return $this->zip_code;
    }

    public function setZip_code($zip_code)
    {
        $this->zip_code = $zip_code;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getBalcony()
    {
        return $this->balcony;
    }

    public function setBalcony($balcony)
    {
        $this->balcony = $balcony;
    }

    public function getTerrace()
    {
        return $this->terrace;
    }

    public function setTerrace($terrace)
    {
        $this->terrace = $terrace;
    }

    public function getConvertible_attic()
    {
        return $this->convertible_attic;
    }

    public function setConvertible_attic($convertible_attic)
    {
        $this->convertible_attic = $convertible_attic;
    }

    public function getCharge_frequency_id()
    {
        return $this->charge_frequency_id;
    }

    public function setCharge_frequency_id($charge_frequency_id)
    {
        $this->charge_frequency_id = $charge_frequency_id;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getPicture_url()
    {
        return $this->picture_url;
    }

    public function setPicture_url($picture_url)
    {
        $this->picture_url = $picture_url;
    }


}
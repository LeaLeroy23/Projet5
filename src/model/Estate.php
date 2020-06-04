<?php

namespace App\src\model;

class Estate
{
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $type_id;

    /**
     * @var int
     */
    private $category_id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $excerpt;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $area;

    /**
     * @var int
     */
    private $rooms;

    /**
     * @var int
     */
    private $bedrooms;

    /**
     * @var int
     */
    private $bathrooms;

    /**
     * @var int
     */
    private $convertible_attic;

    /**
     * @var int
     */
    private $parking;

    /**
     * @var string
     */
    private $parking_type;

    /**
     * @var int
     */
    private $energy_id;

       /**
     * @var int
     */
    private $level_energy_diagnostic;

       /**
     * @var string
     */
    private $level_climat_diagnostic;


    /**
     * @var int
     */
    private $agent_id;

    /**
     * @var string
     */
    private $outside;

    /**
     * @var int
     */
    private $outside_area;

    /**
     * @var int
     */
    private $floor;

            /**
     * @var string
     */
    private $picture_url;

    /**
     * @var int
     */
    private $charge_price;

    /**
     * @var int
     */
    private $price;

    /**
     * @var int
     */
    private $fees;

    /**
     * @var \DateTime
     */
    private $available;

    /**
     * @var int
     */
    private $building_year;

    /**
     * @var int
     */
    private $city;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var int
     */
    private $charge_frequency_id;

    /**
     * @var string
     */
    private $status;




    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * @param int $type_id
     */
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;
    }

    /**
     * @return int
     */
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id

     */
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * @param string $excerpt
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param int $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return int
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param int $rooms
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * @return int
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    /**
     * @param int $bedrooms
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;
    }

    /**
     * @return int
     */
    public function getBathrooms()
    {
        return $this->bathrooms;
    }

    /**
     * @param int $bathrooms
     */
    public function setBathrooms($bathrooms)
    {
        $this->bathrooms = $bathrooms;
    }

    /**
     * @return int
     */
    public function getConvertible_attic()
    {
        return $this->convertible_attic;
    }

    /**
     * @param int $convertible_attic
     */
    public function setConvertible_attic($convertible_attic)
    {
        $this->convertible_attic = $convertible_attic;
    }

    /**
     * @return int
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * @param int $parking
     */
    public function setParking($parking)
    {
        $this->parking = $parking;
    }

    /**
     * @return string
     */
    public function getParking_type()
    {
        return $this->parking_type;
    }

    /**
     * @param string $parking_type
     */
    public function setParking_type($parking_type)
    {
        $this->parking_type = $parking_type;
    }

    /**
     * @return int
     */
    public function getEnergy_id()
    {
        return $this->energy_id;
    }

    /**
     * @param int $energy_id
     */
    public function setEnergy_id($energy_id)
    {
        $this->energy_id = $energy_id;
    }

    /**
     * @return string
     */
    public function getLevel_energy_diagnostic()
    {
        return $this->level_energy_diagnostic;
    }

    /**
     * @param string $level_energy_diagnostic
     */
    public function setLevel_energy_diagnostic($level_energy_diagnostic)
    {
        $this->level_energy_diagnostic = $level_energy_diagnostic;
    }

    /**
     * @return string
     */
    public function getLevel_climat_diagnostic()
    {
        return $this->level_climat_diagnostic;
    }

    /**
     * @param string $level_climat_diagnostic
     */
    public function setLevel_climat_diagnostic($level_climat_diagnostic)
    {
        $this->level_climat_diagnostic = $level_climat_diagnostic;
    }

    /**
     * @return int
     */
    public function getAgent_id()
    {
        return $this->agent_id;
    }

    /**
     * @param int $agent_id
     */
    public function setAgent_id($agent_id)
    {
        $this->agent_id = $agent_id;
    }

    /**
     * @return string
     */
    public function getOutside()
    {
        return $this->outside;
    }

    /**
     * @param string $outside
     */
    public function setOutside($outside)
    {
        $this->outside = $outside;
    }
    
    /**
     * @return int
     */
    public function getOutside_area()
    {
        return $this->outside_area;
    }

    /**
     * @param int $outside_area
     */
    public function setOutside_area($outside_area)
    {
        $this->outside_area = $outside_area;
    }

    /**
     * @return int
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param int $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

        /**
     * @return string
     */
    public function getPicture_url()
    {
        return $this->picture_url;
    }

    /**
     * @param string $picture_url
     */
    public function setPicture_url($picture_url)
    {
        $this->picture_url = $picture_url;
    }

    /**
     * @return int
     */
    public function getCharge_price()
    {
        return $this->charge_price;
    }

    /**
     * @param int $charge_price
     */
    public function setCharge_price($charge_price)
    {
        $this->charge_price = $charge_price;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * @param int $fees
     */
    public function setFees($fees)
    {
        $this->fees = $fees;
    }

    /**
     * @return \Date
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param \Date $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * @return int
     */
    public function getBuilding_year()
    {
        return $this->building_year;
    }

    /**
     * @param int $building_year
     */
    public function setBuilding_year($building_year)
    {
        $this->building_year = $building_year;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return \DateTime
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * @param \DateTime $created_at
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return int
     */
    public function getCharge_frequency_id()
    {
        return $this->charge_frequency_id;
    }

    /**
     * @param int $charge_frequency_id
     */
    public function setCharge_frequency_id($charge_frequency_id)
    {
        $this->charge_frequency_id = $charge_frequency_id;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}
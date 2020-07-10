<?php

//Pour toutes les classes dans DAO
namespace Hestia\src\DAO;

use Hestia\config\Parameter;
use Hestia\src\model\Estate;
use Hestia\src\model\Type;

class EstateDAO extends DAO
{
    private function buildObject($row){
        $estate = new Estate;
        $type = new Type;
        $estate->setId($row['id']);
        $estate->setType_id($row['type_id']);
        //$estate->setCategory_id($row['category_id']);
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
        //$estate->setEnergy_id($row['energy_id']);
        $estate->setLevel_energy_diagnostic($row['level_energy_diagnostic']);
        $estate->setLevel_climat_diagnostic($row['level_climat_diagnostic']);
        //$estate->setAgent_id($row['agent_id']);
        $estate->setOutside($row['outside']);
        $estate->setOutside_area($row['outside_area']);
        $estate->setFloor($row['floor']);
        $estate->setCharge_price($row['charge_price']);
        $estate->setPrice($row['price']);
        $estate->setFees($row['fees']);
        $estate->setBuilding_year($row['building_year']);
        $estate->setcity($row['city']);
        $estate->setCreated_at($row['created_at']);
        //$estate->setCharge_frequency_id($row['charge_frequency_id']);
        $estate->setStatus($row['status']);
        $estate->setPicture_url($row['picture_url']);
        return $estate;
    }

    public function getEstate($estateId)
    {
        $sql= 'SELECT e.id as id, e.title as title, e.floor as floor, e.excerpt as excerpt, e.description as description, e.status as status, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.bathrooms as bathrooms, e.convertible_attic as convertible_attic, e.outside as outside, e.outside_area as outside_area, e.area as area, e.parking as parking, e.parking_type as parking_type, e.energy_id as energy, e.level_energy_diagnostic as level_energy_diagnostic, e.level_climat_diagnostic as level_climat_diagnostic, e.city as city, c.name as category, t.type as type, a.firstname as firstname, a.lastname as lastname, e.picture_url as picture_url, e.charge_price as charge_price, e.fees as fees, e.building_year as building_year, e.created_at as created_at, e.charge_frequency_id as charge_frequency
            FROM estate e
            INNER JOIN category c
            ON e.category_id = c.id
            INNER JOIN type t
            ON e.type_id = t.id
            INNER JOIN energy y
            on e.energy_id = y.id
            INNER JOIN agent a
            ON e.agent_id = a.id
            INNER JOIN charge_frequency f
            ON e.charge_frequency_id = f.id
            WHERE e.id = ?';
        $result = $this->createQuery($sql, [$estateId]);
        $estate = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($estate);
    }

    public function getEstates(){
        $sql = "SELECT e.id as id, e.title as title, e.excerpt as excerpt, e.status as status, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.area as area, e.parking as parking, e.parking_type as parking_type, e.level_energy_diagnostic as level_energy_diagnostic,  e.city as city, c.name as category, t.type as type, a.firstname as firstname, a.lastname as lastname, e.picture_url as picture_url
                FROM estate e
                INNER JOIN category c
                ON e.category_id = c.id
                INNER JOIN type t
                ON e.type_id = t.id
                INNER JOIN agent a
                ON e.agent_id = a.id
                ORDER BY e.id DESC
                ";
        $result = $this->createQuery($sql)->fetchAll();
        return $result;
    }

    public function getPublishedEstates(){
        $sql = "SELECT e.id as id, e.title as title, e.excerpt as excerpt, e.status as status, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.area as area, e.city as city, c.name as category, t.type as type, a.firstname as firstname, a.lastname as lastname, e.picture_url as picture_url
                FROM estate e
                INNER JOIN category c
                ON e.category_id = c.id
                INNER JOIN type t
                ON e.type_id = t.id
                INNER JOIN agent a
                ON e.agent_id = a.id
                WHERE e.status = '1'
                ";
        $result = $this->createQuery($sql)->fetchAll();
        return $result;
    }

    public function forSaleEstates(){
        $sql = "SELECT e.id as id, e.title as title, e.excerpt as excerpt, e.status as status, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.area as area, e.city as city, c.name as category, t.type as type, a.firstname as firstname, a.lastname as lastname, e.picture_url as picture_url
                FROM estate e
                INNER JOIN category c
                ON e.category_id = c.id
                INNER JOIN type t
                ON e.type_id = t.id
                INNER JOIN agent a
                ON e.agent_id = a.id
                WHERE e.status = '1'
                AND c.id = '21'
                ORDER BY e.id DESC
                LIMIT 3
                ";
        $result = $this->createQuery($sql)->fetchAll();
        return $result;
    }

    public function allPropertiesSales(){
        $sql = "SELECT e.id as id, e.title as title, e.excerpt as excerpt, e.status as status, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.area as area, e.city as city, c.name as category, t.type as type, a.firstname as firstname, a.lastname as lastname, e.picture_url as picture_url
                FROM estate e
                INNER JOIN category c
                ON e.category_id = c.id
                INNER JOIN type t
                ON e.type_id = t.id
                INNER JOIN agent a
                ON e.agent_id = a.id
                WHERE e.status = '1'
                AND c.id = '21'
                ORDER BY e.id DESC
                ";
        $result = $this->createQuery($sql)->fetchAll();
        return $result;
    }

    public function forRentEstates(){
        $sql = "SELECT e.id as id, e.title as title, e.excerpt as excerpt, e.status as status, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.area as area, e.city as city, c.name as category, t.type as type, a.firstname as firstname, a.lastname as lastname, e.picture_url as picture_url
                FROM estate e
                INNER JOIN category c
                ON e.category_id = c.id
                INNER JOIN type t
                ON e.type_id = t.id
                INNER JOIN agent a
                ON e.agent_id = a.id
                WHERE e.status = '1'
                AND c.id = '24'
                ORDER BY e.id DESC
                LIMIT 3
                ";
        $result = $this->createQuery($sql)->fetchAll();
        return $result;
    }

    public function allPropertiesRents(){
        $sql = "SELECT e.id as id, e.title as title, e.excerpt as excerpt, e.status as status, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.area as area, e.city as city, c.name as category, t.type as type, a.firstname as firstname, a.lastname as lastname, e.picture_url as picture_url
                FROM estate e
                INNER JOIN category c
                ON e.category_id = c.id
                INNER JOIN type t
                ON e.type_id = t.id
                INNER JOIN agent a
                ON e.agent_id = a.id
                WHERE e.status = '1'
                AND c.id = '24'
                ORDER BY e.id DESC
                ";
        $result = $this->createQuery($sql)->fetchAll();
        return $result;
    }


    public function addEstate($post, $filename){
        $sql = "INSERT INTO estate (type_id, category_id, title, floor, area, rooms, bedrooms, bathrooms, convertible_attic, outside, outside_area, parking, parking_type, energy_id, level_energy_diagnostic, level_climat_diagnostic, city, building_year, excerpt, description, picture_url, charge_price, charge_frequency_id, price, fees, created_at, agent_id, status)
                VALUES (:type_id, :category_id, :title, :floor, :area, :rooms, :bedrooms, :bathrooms, :convertible_attic, :outside, :outside_area, :parking, :parking_type, :energy_id, :level_energy_diagnostic, :level_climat_diagnostic, :city, :building_year, :excerpt, :description, :picture_url, :charge_price, :charge_frequency_id, :price, :fees, :created_at, :agent_id, :status)";
        
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
            'energy_id' => $post->get('energy_id'),
            'level_energy_diagnostic' => $post->get('level_energy_diagnostic'),
            'level_climat_diagnostic' => $post->get('level_climat_diagnostic'),
            'city' => $post->get('city'),
            'building_year' => $post->get('building_year'),
            'excerpt' => $post->get('excerpt'),
            'description' => $post->get('description'),
            'picture_url' => $filename,
            'charge_price' => $post->get('charge_price'),
            'charge_frequency_id' => $post->get('charge_frequency_id'),
            'price' => $post->get('price'),
            'fees' => $post->get('fees'),
            'created_at' => $post->get('created_at'),
            'agent_id' => $post->get('agent_id'),
            'status' => $post->get('status')
        ]);
    }

    public function editEstate(Parameter $post, $filename, $estateId)
    {
        $sql = 'UPDATE estate SET
        type_id=:type_id, category_id=:category_id, title=:title, floor=:floor, area=:area, rooms=:rooms, bedrooms=:bedrooms, bathrooms=:bathrooms, convertible_attic=:convertible_attic, outside=:outside, outside_area=:outside_area, parking=:parking, parking_type=:parking_type, energy_id=:energy_id, level_energy_diagnostic=:level_energy_diagnostic, level_climat_diagnostic=:level_climat_diagnostic, city=:city, building_year=:building_year, excerpt=:excerpt, description=:description, picture_url=:picture_url, charge_price=:charge_price, charge_frequency_id=:charge_frequency_id, price=:price, fees=:fees, status=:status WHERE id=:estateId';
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
            'energy_id' => $post->get('energy_id'),
            'level_energy_diagnostic' => $post->get('level_energy_diagnostic'),
            'level_climat_diagnostic' => $post->get('level_climat_diagnostic'),
            'city' => $post->get('city'),
            'building_year' => $post->get('building_year'),
            'excerpt' => $post->get('excerpt'),
            'description' => $post->get('description'),
            'picture_url' => $filename,
            'charge_price' => $post->get('charge_price'),
            'charge_frequency_id' => $post->get('charge_frequency_id'),
            'price' => $post->get('price'),
            'fees' => $post->get('fees'),
            'status' => $post->get('status'),
            'estateId' => $estateId
        ]);
    }

    public function getPublishEstate($estateId, $status){
        $sql = "UPDATE estate SET status=:status WHERE id=estateId";
        $this->createQuery($sql, [
            'status' => $status
        ]);
    }

    public function deleteEstate($estateId){
        $sql = "DELETE FROM estate WHERE id=?";
        $this->createQuery($sql, [$estateId]);
    }

    public function getEstatePublishCount(){
        $sql = "SELECT COUNT(*) FROM estate";
        $count = $this->createQuery($sql);
        return $count->fetch()[0];
    }

    public function getEstateDraftCount(){
        $sql = "SELECT COUNT(*) FROM estate WHERE status = 0";
        $countDraft = $this->createQuery($sql);
        return $countDraft->fetch()[0];
    }

    public function getEstatesByAgent($agentId){
        $sql = "SELECT e.id as id, e.title as title, e.excerpt as excerpt, e.status as status, e.charge_price as charge_price, e.fees as fees, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.area as area, e.city as city, e.picture_url as picture_url, c.name as category, t.type as type, a.id as agent
        FROM estate e
        INNER JOIN category c
        ON e.category_id = c.id
        INNER JOIN type t
        ON e.type_id = t.id
        INNER JOIN agent a
        ON e.agent_id = a.id
        WHERE e.status = '1'
        AND e.agent_id = " . $agentId;
        $result = $this->createQuery($sql)->fetchAll();
        return $result;
    }

    public function getEstateByAgentCount($agentId){
        $sql = "SELECT COUNT(*) FROM estate WHERE agent_id = " . $agentId;
        $estateByAgentCount = $this->createQuery($sql);
        return $estateByAgentCount->fetch()[0];
    }

    public function getCountEstateByAgentDraft($agentId){
        $sql = "SELECT COUNT(*) FROM estate WHERE status = 0 AND agent_id = " . $agentId;
        $countEstateByAgentDraft = $this->createQuery($sql);
        return $countEstateByAgentDraft->fetch()[0];
    }

    public function getSliders(){
        $sql = "SELECT e.id as id, e.title as title, e.excerpt as excerpt, e.status as status, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.area as area, e.city as city, c.name as category, t.type as type, e.picture_url as picture_url
                FROM estate e
                INNER JOIN category c
                ON e.category_id = c.id
                INNER JOIN type t
                ON e.type_id = t.id
                WHERE e.status = '1'
                ORDER BY e.id DESC
                LIMIT 5
                ";
        $result = $this->createQuery($sql)->fetchAll();
        return $result;
    }

    public function latestEstates(){
        $sql = "SELECT e.id as id, e.title as title, e.excerpt as excerpt, e.status as status, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.area as area, e.city as city, c.name as category, t.type as type, e.picture_url as picture_url
                FROM estate e
                INNER JOIN category c
                ON e.category_id = c.id
                INNER JOIN type t
                ON e.type_id = t.id
                WHERE e.status = '1'
                ORDER BY e.id DESC
                LIMIT 3
                ";
        $result = $this->createQuery($sql)->fetchAll();
        return $result;
    }

    public function otherEstates(){
        $sql = "SELECT e.id as id, e.title as title, e.excerpt as excerpt, e.status as status, e.price as price, e.rooms as rooms, e.bedrooms as bedrooms, e.area as area, e.city as city, c.name as category, t.type as type, e.picture_url as picture_url
                FROM estate e
                INNER JOIN category c
                ON e.category_id = c.id
                INNER JOIN type t
                ON e.type_id = t.id
                WHERE e.category_id > 25 
                ORDER BY e.id DESC
                LIMIT 3
                ";
        $result = $this->createQuery($sql)->fetchAll();
        return $result;
    }
}
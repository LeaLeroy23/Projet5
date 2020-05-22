<?php

namespace App\src\model;

class Picture
{
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var int
     */
    private $estate_id;

    
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
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return int
     */
    public function getEstate_id()
    {
        return $this->estate_id;
    }

    /**
     * @param string $estate_id
     */
    public function setEstate_id($estate_id)
    {
        $this->estate_id = $estate_id;
    }

}
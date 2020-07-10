<?php

namespace Hestia\src\model;

class Picture
{
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $file;

    /**
     * @var int
     */
    private $estateId;

    
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
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return int
     */
    public function getEstateId()
    {
        return $this->estateId;
    }

    /**
     * @param string $estate_id
     */
    public function setEstateId($estateId)
    {
        $this->estateId = $estateId;
    }

}
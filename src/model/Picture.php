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
    private $filename;

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
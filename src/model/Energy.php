<?php

namespace Hestia\src\model;

class Energy
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $energy;

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
    public function getEnergy()
    {
        return $this->energy;
    }

        /**
     * @param int $energy
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;
    }

}
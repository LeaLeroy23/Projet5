<?php

namespace App\src\model;

class Energy
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $energy_diagnostic;

    /**
     * @var string
     */
    private $level_energy_diagnostic;

    /**
     * @var string
     */
    private $level_climat_diagnostic;

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
    public function getEnergy_diagnostic()
    {
        return $this->energy_diagnostic;
    }

    /**
     * @param string $energy_diagnostic
     */
    public function setEnergy_diagnostic($energy_diagnostic)
    {
        $this->energy_diagnostic = $energy_diagnostic;
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
}
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
    private $energyDiagnostic;

    /**
     * @var string
     */
    private $levelEnergyDiagnostic;

    /**
     * @var string
     */
    private $levelClimatDiagnostic;

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
    public function getEnergyDiagnostic()
    {
        return $this->energy_diagnostic;
    }

    /**
     * @param string $energy_diagnostic
     */
    public function setEnergyDiagnostic($energyDiagnostic)
    {
        $this->energy_diagnostic = $energyDiagnostic;
    }

    /**
     * @return string
     */
    public function getLevel_energy_diagnostic()
    {
        return $this->levelEnergyDiagnostic;
    }

    /**
     * @param string $level_energy_diagnostic
     */
    public function setLevel_energy_diagnostic($levelEnergyDiagnostic)
    {
        $this->level_energy_diagnostic = $levelEnergyDiagnostic;
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
    public function setLevel_climat_diagnostic($levelClimatDiagnostic)
    {
        $this->level_climat_diagnostic = $levelClimatDiagnostic;
    }
}
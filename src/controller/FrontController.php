<?php

namespace App\src\controller;
use App\src\DAO\EstateDAO;

class FrontController
{
    private $estateDAO;

    public function __construct(){
        $this->estateDAO = new EstateDAO();
    }

    public function home()
    {
        $estates = $this->estateDAO->getEstates();
        require '../templates/home.php';
    }

    public function estate($estateId)
    {
        $estates = $this->estateDAO->getEstate($estateId);
        require '../templates/single-property.php';
    }
    
}
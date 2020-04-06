<?php

namespace Projet5\src\controller;

use Projet5\src\DAO\EstateDAO;


class FrontController
{
    private $estateDAO;

    public function __construct(){
        $this->estateDAO = new EstateDAO;
    }

    public function home(){
        
        $estates = $estate->getEstates();
        require '../templates/home.php';
    }

    public function estate($estateId){
        $estates = $estate->getEstate($estateId);
        require '../templates/single-property.php';
    }

}
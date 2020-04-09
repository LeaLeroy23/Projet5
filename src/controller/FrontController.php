<?php

namespace App\src\controller;
use App\src\DAO\EstateDAO;
use App\src\model\View;

class FrontController
{
    private $estateDAO;
    private $view;

    public function __construct()
    {
        $this->estateDAO = new EstateDAO();
        $this->view = new View();
    }

    public function home()
    {
        $estates = $this->estateDAO->getEstates();
        return $this->view->render('home', [
            'estates' => $estates
        ]);
    }

    public function estate($estateId)
    {
        $estate = $this->estateDAO->getEstate($estateId);
        return $this->view->render('single', [
            'estate' => $estate
        ]);
    }
}
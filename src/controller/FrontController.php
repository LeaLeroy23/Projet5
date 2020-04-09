<?php

namespace App\src\controller;

use App\src\DAO\EstateDAO;
use App\src\DAO\AgentDAO;
use App\src\model\View;

class FrontController
{
    private $estateDAO;
    private $agentDAO;
    private $view;

    public function __construct()
    {
        $this->estateDAO = new EstateDAO();
        $this->agentDAO = new AgentDAO();
        $this->view = new View();
    }

    public function home()
    {
        $estates = $this->estateDAO->getEstates();
        $agents = $this->agentDAO->getAgents();
        return $this->view->render('home', [
            'estates' => $estates,
            'agents' => $agents
        ]);
    }

    public function estate($estateId)
    {
        $estate = $this->estateDAO->getEstate($estateId);
        return $this->view->render('single-property', [
            'estate' => $estate
        ]);
    }

    public function agent($agentId)
    {
        $agent = $this->agentDAO->getAgent($agentId);
        return $this->view->render('single-agent', [
            'estate' => $estate
        ]);
    }
}
<?php

namespace App\src\controller;

use blog\config\Parameter;

class FrontController extends Controller
{
    
    public function home()
    {
        $estates = $this->estateDAO->getEstates();
        $agents = $this->agentDAO->getAgents();
        return $this->view->render('home', [
            'estates' => $estates,
            'agents' => $agents
        ]);
    }

    public function dashboard()
    {
        $estates = $this->estateDAO->getEstates();
        $agents = $this->agentDAO->getAgents();
        return $this->view->renderTemplate('dashboard', [
            'estates' => $estates,
            'agents' => $agents
        ]);
    }

    public function contact()
    {
        return $this->view->render('contact', [
        ]);
    }

    public function all_estate()
    {
        $estates = $this->estateDAO->getEstates();
        return $this->view->render('properties', [
            'estates' => $estates
        ]);
    }

    public function estate($estateId)
    {
        $estate = $this->estateDAO->getEstate($estateId);
        return $this->view->render('single-property', [
            'estate' => $estate
        ]);
    }

    public function team()
    {
        $agents = $this->agentDAO->getAgents();
        return $this->view->render('team', [
            'agents' => $agents
        ]);
    }

    public function agent($agentId)
    {
        $agent = $this->agentDAO->getAgent($agentId);
        return $this->view->render('single-agent', [
            'agent' => $agent
        ]);
    }

    public function login()
    {
        return $this->view->render('login', [

        ]);
    }
}
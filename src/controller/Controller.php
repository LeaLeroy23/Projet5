<?php

namespace App\src\controller;

use App\config\Request;
use App\src\constraint\Validation;
use App\src\DAO\EstateDAO;
use App\src\DAO\AgentDAO;
use App\src\DAO\CategoryDAO;
use App\src\DAO\TypeDAO;
use App\src\DAO\EnergyDAO;
use App\src\DAO\FrequencyDAO;
use App\src\DAO\PictureDAO;
use App\src\DAO\EmailDAO;
use App\src\model\View;

abstract class Controller{
    protected $estateDAO;
    protected $agentDAO;
    protected $categoryDAO;
    protected $typeDAO;
    protected $energyDAO;
    protected $frequencyDAO;
    protected $pictureDAO;
    protected $emailDAO;
    protected $view;
    private $request;
    protected $get;
    protected $post;
    protected $files;
    protected $session;
    protected $validation;

    public function __construct(){
        $this->estateDAO = new EstateDAO();
        $this->agentDAO = new AgentDAO();
        $this->categoryDAO = new CategoryDAO();
        $this->typeDAO = new TypeDAO();
        $this->energyDAO = new EnergyDAO();
        $this->frequencyDAO = new FrequencyDAO();
        $this->pictureDAO = new PictureDAO();
        $this->emailDAO = new EmailDAO();
        $this->view = new View();
        $this->validation = new Validation();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->files = $this->request->getFiles();
        $this->session = $this->request->getSession();
    }
    
}


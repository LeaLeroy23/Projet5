<?php

namespace Hestia\src\controller;

use Hestia\config\Request;
use Hestia\src\constraint\Validation;
use Hestia\src\DAO\EstateDAO;
use Hestia\src\DAO\AgentDAO;
use Hestia\src\DAO\CategoryDAO;
use Hestia\src\DAO\TypeDAO;
use Hestia\src\DAO\EnergyDAO;
use Hestia\src\DAO\FrequencyDAO;
use Hestia\src\DAO\PictureDAO;
use Hestia\src\DAO\EmailDAO;
use Hestia\src\model\View;

abstract class Controller
{

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


<?php

namespace App\src\controller;

use App\config\Request;
use App\src\constraint\Validation;
use App\src\DAO\EstateDAO;
use App\src\DAO\AgentDAO;
use App\src\DAO\CategoryDAO;
use App\src\DAO\EmailDAO;
use App\src\model\View;

abstract class Controller{
    protected $estateDAO;
    protected $agentDAO;
    protected $categoryDAO;
    protected $emailDAO;
    protected $view;
    private $request;
    protected $get;
    protected $post;
    protected $session;
    protected $validation;

    public function __construct(){
        $this->estateDAO = new EstateDAO();
        $this->agentDAO = new AgentDAO();
        $this->categoryDAO = new CategoryDAO();
        $this->emailDAO = new EmailDAO();
        $this->view = new View();
        $this->validation = new Validation();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }
    
}


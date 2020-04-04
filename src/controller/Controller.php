<?php

namespace Projet5\src\controller;

use Projet5\config\Request;
use Projet5\src\constraint\Validation;
use Projet5\src\DAO\EsstateDAO;
use Projet5\src\model\View;

abstract class Controller{
    protected $estateDAO;
    protected $view;
    private $request;
    protected $get;
    protected $post;
    protected $session;
    protected $validation;

    public function __construct(){
        $this->estateDAO = new EstateDAO();
        $this->view = new View();
        $this->validation = new Validation();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }
    
}


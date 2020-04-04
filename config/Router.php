<?php

namespace Projet5\config;

use Projet5\src\controller\FrontController;
use Projet5\src\controller\ErrorController;
use Exception;

class Router
{
    private $frontController;
    private $errorController;
    private $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->frontController = new FrontController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        $route=$this->request->getGet()->get('route');

        try{
            if(isset($route))
            {
                if($route === 'login'){
                    $this->frontController->login($this->request->getPost());
                } else { 
                    $this->errorController->errorNotFound();
                }   
            } else {
                $this->frontController->home();
            }
        
    }
    catch (Exception $e){
        $this->errorController->errorServer();
    }
}
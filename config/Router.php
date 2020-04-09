<?php

namespace App\config;
use App\src\controller\BackController;
use App\src\controller\ErrorController;
use App\src\controller\FrontController;
use Exception;

class Router
{
    private $frontController;
    private $backController;
    private $errorController;

    public function __construct(){
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'estate'){
                    $this->frontController->estate($_GET['estateId']);
                }
                elseif($_GET['route'] === 'agent'){
                    $this->frontController->agent($_GET['agentId']);
                }
                elseif($_GET['route'] === 'login'){
                    $this->frontController->login($_POST);
                }
                elseif ($_GET['route'] === 'addArticle'){
                    $this->backController->addEstate($_POST);
                }
                elseif ($_GET['route'] === 'dashboard'){
                    $this->frontController->dashboard();
                }
                else{
                    $this->errorController->errorNotFound();
                }
            }
            else{
                $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->errorServer();
        }
    }
}
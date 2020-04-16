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
    private $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        $route = $this->request->getGet()->get('route');
        try{
            if(isset($_GET['route']))
            {
                if($route === 'estate'){
                    $this->frontController->estate($this->request->getGet()->get('estateId'));
                }
                elseif($route === 'properties'){
                    $this->frontController->all_estate();
                }
                elseif($route === 'agent'){
                    $this->frontController->agent($_GET['agentId']);
                }
                elseif ($route === 'team'){
                    $this->frontController->team();
                }
                elseif ($route === 'contact'){
                    $this->frontController->contact();
                }
                elseif($route === 'login'){
                    $this->frontController->login($this->request->getPost());
                }
                elseif ($route === 'dashboard'){
                    $this->frontController->dashboard();
                }
                elseif ($route === 'all_agents'){
                    $this->backController->allAgents();
                }
                elseif ($route === 'addAgent'){
                    $this->backController->addAgent($this->request->getPost());
                }
                elseif ($route === 'profile'){
                    $this->backController->profile();
                }
                elseif ($route === 'updatePassword'){
                    $this->backController->updatePassword($this->request->getPost());
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
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
                    $this->frontController->agent($this->request->getGet()->get('agentId'));
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
                elseif ($route === 'addEstate'){
                    $this->backController->addEstate($this->request->getPost());
                }
                elseif ($route === 'editEstate'){
                    $this->backController->editEstate($this->request->getPost(), $this->request->getGet()->get('estateId'));
                }
                elseif ($route === 'allEstate'){
                    $this->backController->allEstate();
                }
                elseif ($route === 'addCategory'){
                    $this->backController->addCategory($this->request->getPost());
                }
                elseif ($route === 'addType'){
                    $this->backController->addType($this->request->getPost());
                }
                elseif ($route === 'addEnergy'){
                    $this->backController->addEnergy($this->request->getPost());
                }
                elseif ($route === 'addFrequency'){
                    $this->backController->addFrequency($this->request->getPost());
                }
                elseif ($route === 'deleteCategory'){
                    $this->backController->deleteCategory($this->request->getGet()->get('categoryId'));
                }
                elseif ($route === 'deleteType'){
                    $this->backController->deleteType($this->request->getGet()->get('typeId'));
                }
                elseif ($route === 'deleteEnergy'){
                    $this->backController->deleteEnergy($this->request->getGet()->get('energyId'));
                }
                elseif ($route === 'deleteFrequency'){
                    $this->backController->deleteFrequency($this->request->getGet()->get('frequencyId'));
                }
                elseif ($route === 'allAgents'){
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
                elseif ($route === 'updateProfile'){
                    $this->backController->updateProfile($this->request->getPost(), $this->request->getGet()->get('agentId'));
                }
                elseif ($route === 'configuration'){
                    $this->backController->configuration();
                }
                elseif ($route === 'dashboard'){
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
<?php

namespace Hestia\config;
use Hestia\src\controller\BackController;
use Hestia\src\controller\ErrorController;
use Hestia\src\controller\FrontController;
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
        //try{
            if(isset($_GET['route']))
            {
                if($route === 'estate'){
                    $this->frontController->estate($this->request->getGet()->get('estateId'));
                }
                elseif($route === 'allProperties'){
                    $this->frontController->allProperties();
                }
                elseif($route === 'allPropertiesForSale'){
                    $this->frontController->allPropertiesForSale();
                }
                elseif($route === 'allPropertiesForRent'){
                    $this->frontController->allPropertiesForRent();
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
                elseif ($route === 'deleteEstate'){
                    $this->backController->deleteEstate($this->request->getGet()->get('estateId'));
                }
                elseif ($route === 'allEstates'){
                    $this->backController->allEstates();
                }
                elseif ($route === 'addPictures'){
                    $this->backController->addPictures($this->request->getPost() ,$this->request->getFiles(), $this->request->getGet()->get('estateId'));
                }
                elseif ($route === 'uploadPictures'){
                    $this->backController->uploadPictures($this->request->getPost(), $this->request->getFiles(),$this->request->getGet()->get('estateId'));
                }
                elseif ($route === 'deletePicture'){
                    $this->backController->deletePicture($this->request->getGet()->get('pictureId'));
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
                elseif ($route === 'editAgent'){
                    $this->backController->editAgent($this->request->getPost(), $this->request->getGet()->get('agentId'));
                }
                elseif ($route === 'deleteAgent'){
                    $this->backController->deleteAgent($this->request->getGet()->get('agentId'));
                }
                elseif ($route === 'profile'){
                    $this->backController->profile();
                }
                elseif ($route === 'updatePassword'){
                    $this->backController->updatePassword($this->request->getPost(), $this->request->getGet()->get('agentId'));
                }
                elseif ($route === 'editProfile'){
                    $this->backController->editProfile($this->request->getPost(), $this->request->getSession()->get('id'));
                }
                elseif ($route === 'updatePasswordProfile'){
                    $this->backController->updatePasswordProfile($this->request->getPost(), $this->request->getGet()->get('agentId'));
                }
                elseif ($route === 'configuration'){
                    $this->backController->configuration();
                }
                elseif ($route === 'dashboard'){
                    
                    $this->backController->dashboard();
                }
                elseif ($route === 'logout'){
                    $this->backController->logout();
                }
                elseif ($route === 'email'){
                    $this->frontController->email();
                }
                else{
                    $this->errorController->errorNotFound();
                }
            }
            else{
                $this->frontController->home();
            }
        /*}
        catch (Exception $e)
        {
            var_dump($e);
            $this->errorController->errorServer();
        }*/
    }
}
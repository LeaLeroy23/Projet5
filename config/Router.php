<?php

namespace Projet5\config;
use Exception;

class Router
{
    private $frontController;

    public function __construct(){
        $this->frontController = new FrontController();
    }

    public function run()
    {
        try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'estate'){
                    $frontController->estate($_GET['estateId']);
                }
                else{
                    echo 'page inconnue';
                }
            }
            else{
               
                $frontController->home();
            }
        }
        catch (Exception $e)
        {
            echo 'Erreur';
        }
    }
}
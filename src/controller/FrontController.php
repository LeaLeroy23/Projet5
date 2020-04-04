<?php

namespace Projet5\src\controller;

use Projet5\config\Parameter;

class FrontController extends Controller 
{
    public function home(){
        $estates = $this->estateDAO->getEstates();
        return $this->view->render('home', [
            'articles' => $articles
        ]);
    }

}
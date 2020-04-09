<?php

namespace App\src\controller;

use App\src\DAO\EstateDAO;
use App\src\model\View;

class BackController
{
    private $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function addEstate($post)
    {
        if(isset($post['submit'])) {
            $estateDAO = new EstateDAO();
            $estateDAO->addEstate($post);
            header('Location: ../public/index.php');
        }
        return $this->view->render('add_estate', [
            'post' => $post
        ]);
    }
}

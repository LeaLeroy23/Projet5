<?php

namespace Hestia\src\controller;

class ErrorController extends Controller
{
    public function errorNotFound()
    {
        return $this->view->render('404');
    }

    public function errorServer()
    {
        return $this->view->render('500');
    }
}
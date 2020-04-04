<?php

require '../config/dev.php';
require '../vendor/autoload.php';

session_start();
$router = new \Projet5\config\Router();
$router->run();

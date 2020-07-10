<?php

require '../config/prod.php';
require '../vendor/autoload.php';
session_start();
$router = new \Hestia\config\Router();
$router->run();
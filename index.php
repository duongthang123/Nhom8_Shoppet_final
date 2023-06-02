<?php
session_start();

$controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'DefaultController';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$module = $_GET['module'] == 'web' ? 'Web' : 'Admin';

require "app/Controllers/$module/$controller.php";

$controllerInstace = new $controller();

echo $controllerInstace->$action();


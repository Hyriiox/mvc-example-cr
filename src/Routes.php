<?php

namespace Afpa;

use Afpa\Core\Router;

use Afpa\Controllers\HomeController;
use Afpa\Controllers\LoginController;
use Afpa\Controllers\UtilisateurController;
use Afpa\Controllers\CreateController;

// Instanciation du router
$router = new Router();

// Définition de toutes les routes du site
$router->addRoute('/home', HomeController::class, 'index');
$router->addRoute('/', LoginController::class, 'login');
$router->addRoute('/create',CreateController::class, 'create');

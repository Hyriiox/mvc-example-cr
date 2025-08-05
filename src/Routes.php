<?php

namespace Afpa;

use Afpa\Core\Router;

use Afpa\Controllers\HomeController;
use Afpa\Controllers\LoginController;
use Afpa\Controllers\UtilisateurController;

// Instanciation du router
$router = new Router();

// Définition de toutes les routes du site
$router->addRoute('/home', HomeController::class, 'index');
$router->addRoute('/', LoginController::class, 'login');

// page administrateur
$router->addRoute('/utilisateurs/list', UtilisateurController::class, 'list');
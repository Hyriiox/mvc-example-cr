<?php

namespace Afpa\Controllers;

use Afpa\Core\Controller;

/**
 * Exemple d'un contrôleur simple.
 */
class HomeController extends Controller 
{
    /**
     * Le nom de la fonction est à ajouter dans le fichier "Routes.php"
     */
    public function index()
{
    session_start();
    $name = isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : 'Invité';
    $data = compact("name");
    $this->render('Home', $data);
}
}
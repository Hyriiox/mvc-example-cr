<?php

namespace Afpa\Controllers;

use Afpa\Core\Controller;
use Afpa\Models\Utilisateur;
use Afpa\Models\UtilisateurDAO;

/**
 * Contrôleur qui gère l'authentification des utilisateurs.
 */
class CreateController extends Controller 
{

    public function create()
    {
        $data = [];

        // vérification de la présence d'informations concernant la connexion (requête "post")
        if (!empty($_POST))
        {
            // récupération les informations du formulaire
            $pseudo = $_POST['pseudo'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $fonction = $_POST['fonction'];

            // Hachage du mot de passe (en BCRYPT)
            $password = password_hash($password, PASSWORD_BCRYPT);

            $utilisateur= new Utilisateur($pseudo, $email, $password, $fonction);
            //appel à laméthode "save" de la classe UtilisateurDAO afin de sauvegarder l'utilisateur en base de données (méthode )
            $utilisateur_bdd = UtilisateurDAO::save($utilisateur);

            // cas de l'utilisateur null (problème lors de l'insertion)
            if (is_null($utilisateur_bdd)) {
                // échec de la création
                // ajout d'un message d'erreur à fournir à la page de login
                $error_message = "Erreur lors de la création de l'utilisateur.";
                // ajout d'un duo clef->valeur à passer à la vue
                $data['error_message'] = $error_message;
                
            } else { // cas de succès !
                // Connexion automatique de l'utilisateur nouvellement créé
                session_start();
                $_SESSION['pseudo'] = $utilisateur->getPseudo();
                // redirection vers la page d'accueil
                header("Location: /home");
                die();
            }

        }
        $this->render('Create', $data);
    }
}
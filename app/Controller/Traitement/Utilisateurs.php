<?php

namespace Controller\Traitement;

class Utilisateurs
{

    function UtilisateursTraitement ($formController)
    {
        // LE PARAMETRE $formController
        // ME PERMET D'UTILISER LA METHODE verifierSaisie
        
        $GLOBALS["ajoutUtilisateurRetour"] = "EN COURS DE CONSTRUCTION...";
        // RECUPERER LES INFOS DU FORMULAIRE D'AJOUT UTILISATEUR
        $username   = $formController->verifierSaisie("username");
        $email      = $formController->verifierSaisie("email"); 
        $password   = $formController->verifierSaisie("password1");
        $role       = "membre"; // Par défaut mais on peut choisir une zone de sélection avec option dans le formulaire sinon
        
        // UN PEU DE SECURITE
        if ( ($formController->verifierEmail($email)) 
                && ($formController->verifierNom($username))
                    && ($formController->verifierPassword($password)))
        {
            // ON PEUT ENREGISTRER LA LIGNE DANS LA TABLE utilisateurs
            // id               INT             PRIMARY_KEY A_I
            // username         VARCHAR(255)
            // email            VARCHAR(255)
            // role             ENUM (choix par défaut 'Membre')
            // dateCreation     DATETIME
            
            // COMPLETER LES INFOS MANQUANTES
            $date = date("Y-m-d H:i:s");
            
            // CREER UN OBJET DE LA CLASSE UtilisateursModel
            $objetUtilisateursModel = new \Model\UtilisateursModel;
            $objetUtilisateursModel->insert([
                    "username"      => $username,
                    "email"         => $email,
                    "password"      => $password,
                    "role"          => $role,
                    "dateCreation"  => $date,
                ]);
                    
            // MESSAGE POUR L'ADMINISTRATEUR       
            $GLOBALS["ajoutUtilisateurRetour"] = "L'utilisateur ".$username." a bien été rajouté";
        }
        else 
        {
            $GLOBALS["ajoutUtilisateurRetour"] = "INFORMATION MANQUANTE";
        }

/*        
        // ON POURRAIT CREER UN AUTRE OBJET DE LA CLASSE FormController
        $objetFormController = new FormController,;
        $email = $objetFormController->verifierSaisie();
*/       
    }
    
}
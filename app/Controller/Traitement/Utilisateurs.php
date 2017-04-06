<?php

namespace Controller\Traitement;

class Utilisateurs
{

    function UtilisateursTraitement ($formController)
    {
        // LE PARAMETRE $formController
        // ME PERMET D'UTILISER LA METHODE verifierSaisie
        
        $GLOBALS["userCreateRetour"] = "EN COURS DE CONSTRUCTION...";
        // RECUPERER LES INFOS DU FORMULAIRE D'AJOUT UTILISATEUR
        $username   = $formController->verifierSaisie("username");
        $email      = $formController->verifierSaisie("email"); 
        $password   = $formController->verifierSaisie("password1");
        $password2  = $formController->verifierSaisie("password2");
        $role       = "membre"; // Par défaut mais on peut choisir une zone de sélection avec option dans le formulaire sinon
        
        // UN PEU DE SECURITE
        if ( ($formController->verifierEmail($email)) 
                && ($formController->verifierNom($username))
                    && ($formController->verifierPassword($password))
                        && ($password == $password2))
        {
            // ON PEUT ENREGISTRER LA LIGNE DANS LA TABLE utilisateurs
            // id               INT             PRIMARY_KEY A_I
            // username         VARCHAR(255)
            // email            VARCHAR(255)
            // role             ENUM (choix par défaut 'Membre')
            // dateCreation     DATETIME
            
            // COMPLETER LES INFOS MANQUANTES
            $password = password_hash($password, PASSWORD_BCRYPT);
            
            // CREER UN OBJET DE LA CLASSE UtilisateursModel
            $objetUtilisateursModel = new \Model\UtilisateursModel;
            $objetUtilisateursModel->insert([
                    "username"      => $username,
                    "email"         => $email,
                    "password"      => $password,
                    "role"          => $role,
                ]);
                    
            // MESSAGE POUR L'ADMINISTRATEUR       
            $GLOBALS["userCreateRetour"] = "L'utilisateur ".$username." a bien été rajouté";
        }
        else if ($password != $password2)
        {
            $GLOBALS["userCreateRetour"] = "Les mots de passes ne correspondent pas !";
        }
        else 
        {
            $GLOBALS["userCreateRetour"] = "INFORMATION MANQUANTE";
        }

    }
    
}
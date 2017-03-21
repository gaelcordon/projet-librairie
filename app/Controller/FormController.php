<?php

namespace Controller;

use \W\Controller\Controller;


class FormController extends Controller
{

    public function verifierSaisie ($name)
    {
        $valeurSaisie = ""; // AU DEBUT ON A LA CHAINE VIDE
        
        // http://php.net/manual/fr/reserved.variables.request.php
        // JE VERIFIE SI L'INFO EST PRESENTE
        if (isset($_REQUEST[$name]))
        {
            // ALORS JE LA STOCKE DANS UNE VARIABLE PHP
            $valeurSaisie = $_REQUEST[$name];
            
            // FILTRER LA VALEUR POUR SE PROTEGER UN PEU
            
            // ENLEVER LES BALISES HTML ET PHP
            // http://php.net/manual/fr/function.strip-tags.php
            $valeurSaisie = strip_tags($valeurSaisie);
            
            // ENLEVER LES ESPACES VIDES AU DEBUT ET A LA FIN
            // http://php.net/manual/fr/function.trim.php
            $valeurSaisie = trim($valeurSaisie);
            
            // http://php.net/manual/fr/function.ctype-alpha.php
            // http://php.net/manual/fr/function.str-replace.php
            // http://php.net/manual/fr/function.preg-replace.php
            
        }
        
        // RENVOIE LA VALEUR DE $valeurSaisie
        return $valeurSaisie;
    
    }

    // CONTRAINTES
    // FORMAT D'UN EMAIL (nom@domaine.suffixe)
    function verifierEmail ($email)
    {
        $resultat = false;
        
        // http://php.net/manual/en/function.filter-var.php
        if ( ($email != "") && (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) )
        {
            $resultat = true;
        }
        
        return $resultat;
    }


    function loginTraitement ()
    {
        // RECUPERER LES INFOS DU FORMULAIRE
        $identifiant = $this->verifierSaisie("identifiant");
        $password    = $this->verifierSaisie("password");
        
        // SECURITE
        if ( ($identifiant != "") && ($password != "") )
        {
            // ON CREE UN OBJET DE LA CLASSE \W\Security\AuthentificationModel
            // CE QUI NOUS PERMET D'UTILISER LA METHODE isValidLoginInfo
            $objetAuthentificationModel = new  \W\Security\AuthentificationModel;
            
            // https://dev-web1a.c9users.io/W-master/docs/tuto/?p=utilisateurs
            $idUser = $objetAuthentificationModel->isValidLoginInfo($identifiant, $password);
            
            if ($idUser > 0)
            {
                // RECUPERER LES INFOS DE L'UTILISATEUR
                // JE CREE UN OBJET DE LA CLASSE \W\Model\UsersModel
                $objetUsersModel = new \W\Model\UsersModel;
                
                // JE RETROUVE LES INFOS DE LA LIGNE GRACE A LA COLONNE id
                // LA CLASSE UsersModel HERITE DE LA CLASSE Model
                $tabUser = $objetUsersModel->find($idUser);
                // JE VAIS AJOUTER LES INFOS DANS LA SESSION
                $objetAuthentificationModel->logUserIn($tabUser);
                
                $username = $tabUser["username"];
                $GLOBALS["loginRetour"] = "BIENVENUE ($username)";
            }
            else
            {
                $GLOBALS["loginRetour"] = "IDENTIFIANTS INCORRECTS";
            }
        }
        else
        {
            $GLOBALS["loginRetour"] = "IDENTIFIANTS INCORRECTS";
        }
    }
}
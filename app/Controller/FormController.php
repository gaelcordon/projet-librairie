<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\LivresModel;


class FormController extends Controller
{

    public  function __construct ()
    {
        // CETTE METHODE SERA APPELEE PAR TOUTES LES ROUTES
        // CAR LA ROUTE PRECISE QUELLE CLASSE ET QUELLE METHODE APPELER
        // DONC LE FRAMEWORK W DOIT CREER UN OBJET DE CETTE CLASSE
        // AVANT D'ACTIVER LA METHODE
        // ET LES CLASSES DANS LES ROUTES HERITENT DE CETTE CLASSE
        // FormController
        // DONC LA METHODE __construct DE LA CLASSE FormController
        // EST AUSSI APPELEE A LA CREATION DE L'OBJET...
        
        // ON PEUT DONC AJOUTER ICI LE CODE QU'ON VEUT ACTIVER
        // POUR TOUTES LES ROUTES...
        
        // APPELER LE CONSTRUCTEUR DU parent
        // POUR CONTINUER A GARDER LA MECANIQUE DU FRAMEWORK W
        // parent::__construct();
        
        // TRAITEMENT DU FORMULAIRE
        $idFormClasse  = $this->verifierSaisie("idFormClasse");
        $idFormMethode = $this->verifierSaisie("idFormMethode");
        
        // UN PEU DE SECURITE...
        // JE VAIS COMPLETER LE CHEMIN VERS LE NAMESPACE DE LA CLASSE
        $idFormClasse  = "\Controller\Traitement\\$idFormClasse";
        
        if ( ($idFormClasse != "") && ($idFormMethode != "") )
        {
            // ON A UN FORMULAIRE A TRAITER
            // ON CHERCHE SI IL Y A UNE CLASSE AVEC LA METHODE DEMANDEE
            // http://php.net/manual/fr/function.method-exists.php
            if (method_exists($idFormClasse, $idFormMethode))
            {
                // ON PEUT APPELER LA METHODE
                // ON CREE UN OBJET
                // ET AVEC L'OBJET ON APPELLE LA METHODE
                
                // ASTUCE:
                // CREATION DYNAMIQUE D'OBJET
                // ET APPEL DYNAMIQUE A UNE METHODE
                // http://php.net/manual/fr/language.oop5.basic.php
                $objet = new $idFormClasse;
                // $this EST L'OBJET DE CLASSE FormController
                $objet->$idFormMethode($this);
            }
        }
        
    }



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


    function verifierNom ($nom)
    {
        $resultat = false;  // MODE PARANO
        
        // ON VEUT SEULEMENT DES LETTRES ET DES CHIFFRES
        // ON VEUT EGALEMENT UNE LONGUEUR DE CHAMP MINIMUM DE 3 CARACTERES    
        if ( (mb_strlen($nom) >= 3) && ctype_alnum($nom) )
        {
            $resultat = true;
        }

        return $resultat;
    }




    // AU MOINS 3 LETTRES
    function verifierPassword ($password)
    {
        $resultat = false;  // MODE PARANO

        if (mb_strlen($password) >= 3)
        {
            $resultat = true;
        }

        return $resultat;    
    }

    function loginTraitement ()
    {
        // RECUPERER LES INFOS DU FORMULAIRE
        $identifiant = $this->verifierSaisie("identifiant");
        $password    = $this->verifierSaisie("cache");
        
        // SECURITE
        if ( ($identifiant != "") && ($password  != "") )
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
                
                /*$username = $tabUser["username"];
                $GLOBALS["loginRetour"] = "BIENVENUE ($username)";*/
                $this->redirectToRoute('admin_administration');
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

    function livreCreateTraitement ()
    {
        $titreLivre     = $this->verifierSaisie("titreLivre");
        $auteur         = $this->verifierSaisie("auteur");
        $isbn           = $this->verifierSaisie("isbn");
        $dateParution   = $this->verifierSaisie("dateParution");
        $nbPage         = $this->verifierSaisie("nbPage");
        $editeur        = $this->verifierSaisie("editeur");
        $genre          = $this->verifierSaisie("genre");
        $sgenre         = $this->verifierSaisie("sgenre");
        $resume         = $this->verifierSaisie("resume");
        $couverture     = $this->verifierSaisie("couverture");

        /*if(($titre != "") && ($auteur !="") && ($coupDeCoeur != "") && ($isbn != "") && ($prix != "") && ($dateParution != "") && ($nbPage != "") && ($editeur != "") && ($genre != "") && ($sgenre != "") && ($resume != "") && ($couverture != ""))
        {*/

            $objetLivresModel = new LivresModel;

            $objetLivresModel->insert([ "titreLivre"    =>                            $titreLivre,
                                        "id_auteur"     => $auteur,
                                        "isbn"          => $isbn,
                                        "dateParution"  => $dateParution,
                                        "nbPage"        => $nbPage,
                                        "id_editeur"    => $editeur,
                                        "id_genre"      => $genre,
                                        "id_sousgenre"  => $sgenre,
                                        "resume"        => $resume,
                                        "couverture"    => $couverture,
                                      ]);

        $GLOBALS["livreCreateRetour"] = "Livre ajouté ($titreLivre) !";
        /*
        }
        else
        {
            $GLOBALS["livreCreateRetour"] = "INFORMATION(S) MANQUANTE(S) !";
        }*/
    }

    function eventCreateTraitement ()
    {
        $titreEvent     = $this->verifierSaisie("titreEvent");
        $dateEvent      = $this->verifierSaisie("dateEvent");
        $heureEvent     = $this->verifierSaisie("heureEvent");
        $description    = $this->verifierSaisie("description");
        $photo          = $this->verifierSaisie("photo");

        $objetEvenementsModel = new \Model\EvenementsModel;

        $objetEvenementsModel->insert([
                                        "titreEvent"    => $titreEvent,
                                        "dateEvent"     => $dateEvent,
                                        "heureEvent"    => $heureEvent,
                                        "description"   => $description,
                                        "photo"         => $photo
                                      ]);

        $GLOBALS["eventCreateRetour"] = "Evenement crée !";
    }
}
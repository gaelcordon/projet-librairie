<?php

namespace Controller;

use \W\Controller\Controller;

class LibrairieController 		// ON HERITE DE LA CLASSE FormController 
      extends FormController	// QUI HERITE DE LA CLASSE W\Controller\Controller
	
{

	/**
	 * Page d'accueil par défaut
	 */
	public function accueil()
	{
		$this->show('pages/accueil');
	}
	/**
	 * Page de présentation de la librairie
	 */
	public function librairie()
	{
		$this->show('pages/librairie');
	}

	/**
	 * Page spécifique aux coups de coeur
	 */
	public function coupsDeCoeur()
	{
		$this->show('pages/coups-de-coeur');
	}

	/**
	 * Page spécifique à la papeterie
	 */
	public function papeterie()
	{
		$this->show('pages/papeterie');
	}

	/**
	 * Page spécifique aux loisirs et aux jeux
	 */
	public function loisirsEtJeux()
	{
		$this->show('pages/loisirs-et-jeux');
	}

	/**
	 * Page spécifique aux Evènements/Ateliers
	 */
	public function evenementsAteliers()
	{
		$this->show('pages/evenements-ateliers');
	}

	
	/**
	 * Page spécifique a Contact/Nous Trouver
	 */
	public function contact()
	{
		$this->show('pages/contact');
	}

	/**
	 * Page de logout
	*/
	public function logout()
	{
		// ON CREE UN OBJET DE LA CLASSE \W\Security\AuthentificationModel
		$objetAuthentificationModel = new \W\Security\AuthentificationModel;
		// GERE LA DESTRUCTION DU COOKIE
		$objetAuthentificationModel->logUserOut();
		
		// ON VA REDIRIGER VERS LA PAGE DE LOGIN
		$this->redirectToRoute("login");
	}

	/**
	 * Page de login
	 */
	public function login()
	{
	    // CONTROLLER
	    // TRAITEMENT DU FORMULAIRE
	    $GLOBALS["loginRetour"] = "";
	    
	    // RECUPERER L'INFO idForm
	    $idForm = $this->verifierSaisie("idForm");
	    if ($idForm == "login")
	    {
	        // ACTIVER LE CODE POUR TRAITER LE FORMULAIRE newsletter
	        $this->loginTraitement();
	    }
	    
	    // VIEW
		// LA METHODE show EST DEFINIE 
		// DANS LA CLASSE PARENTE Controller
		// ON ACTIVE LA PARTIE VIEW
		
		// ON TRANSMET A LA VUE DES VARIABLES DEPUIS LE CONTROLEUR AVEC UN TABLEAU ASSOCIATIF
		// LA CLE newsletterRetour VA ETRE TRANSFORME EN VARIABLE LOCALE $newsletterRetour
		$this->show('pages/login', [ "loginRetour" => $GLOBALS["loginRetour"] ]);
	}

}
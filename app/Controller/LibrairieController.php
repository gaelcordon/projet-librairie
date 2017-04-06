<?php

namespace Controller;

use \W\Controller\Controller;
use \Controller\Traitement\Recherches;

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
	public function laLibrairie()
	{
		$this->show('pages/laLibrairie');
	}

	/**
	 * Page spécifique aux coups de coeur
	 */
	public function coupsDeCoeur()
	{
		$this->show('pages/coups-de-coeur');
	}
	
	/**
	 * Page spécifique aux Ateliers
	 */
	public function ateliers()
	{
		$this->show('pages/ateliers');
	}

	public function sousGenre($slug)
	{
		$GLOBALS['sousgenre'] = $slug;
		$this->show('pages/sousgenre', ["sousgenre" => $GLOBALS['sousgenre']]);
	}

	/**
	 * Page spécifique aux Evènements Dédicaces
	 */
	public function evenementsDedicaces()
	{
		$this->show('pages/evenements-dedicaces');
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
		$this->redirectToRoute("librairie_accueil");
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

	public function resultatRecherche($slug)
	{
		$objetRecherche = new Recherches;
		$tabLigne = $objetRecherche->recupRecherche($slug);

		$GLOBALS['recherche'] = $tabLigne;

		$nbResultat = count($tabLigne);

		$this->show('pages/resultat-recherche', ['recherche' => $GLOBALS['recherche']]);
	}

}
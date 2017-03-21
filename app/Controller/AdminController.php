<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{

	/**
	 * Page d'administration du site
	 */
	public function administration()
	{

		$GLOBALS["ajoutUtilisateurRetour"] = "";
		// SECURITE
		// SEULEMENT LES ROLES admin PEUVENT VOIR CETTE PAGE 
		$this->allowTo(['admin', 'libraire', 'membre']);
		$this->show('pages/administration', ["ajoutUtilisateurRetour" => $GLOBALS["ajoutUtilisateurRetour"]]);
	}

}
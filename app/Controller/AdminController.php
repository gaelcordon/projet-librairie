<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends FormController
{

	/**
	 * Page d'administration du site
	 */
	public function administration()
	{

		$GLOBALS["livreCreateRetour"] = "";
		$GLOBALS["eventCreateRetour"] = "";
		// SECURITE
		// SEULEMENT LES ROLES admin PEUVENT VOIR CETTE PAGE 
		$this->allowTo(['admin', 'libraire', 'membre']);
		//$this->show('pages/administration', ["ajoutUtilisateurRetour" => $GLOBALS["ajoutUtilisateurRetour"]]);

		$idForm = $this->verifierSaisie("idForm");

		if ($idForm == "ajoutLivre")
		{
			$this->livreCreateTraitement();
		}
		else if ($idForm == "ajoutEvent")
		{
			$this->eventCreateTraitement();
		}

		$this->show('pages/administration', ["livreCreateRetour" => $GLOBALS["livreCreateRetour"], "eventCreateRetour" => $GLOBALS["eventCreateRetour"]]);
	}

}
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

		// SECURITE
		// SEULEMENT LES ROLES admin PEUVENT VOIR CETTE PAGE 
		$this->allowTo(['admin', 'libraire', 'membre']);
		$this->show('pages/administration');
	}

}
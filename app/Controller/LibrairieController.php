<?php

namespace Controller;

use \W\Controller\Controller;

class LibrairieController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function accueil()
	{
		$this->show('pages/accueil');
	}

}
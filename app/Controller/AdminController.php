<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{

	/**
	 * Page d'administration du site
	 */
	public function home()
	{
		$this->show('pages/admin');
	}

}
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
	 * Page spécifique au Plaisir d'offrir
	 */
	public function plaisirOffrir()
	{
		$this->show('pages/plaisir-offrir');
	}

	/**
	 * Page spécifique a Contact/Nous Trouver
	 */
	public function contact()
	{
		$this->show('pages/contact');
	}

	/**
	 * Page spécifique a Espace membre
	 */
	public function espaceMembre()
	{
		$this->show('pages/espace-membre');
	}


}
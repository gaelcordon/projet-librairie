<?php

namespace Controller;

use \W\Controller\Controller;

class AjaxController 
		extends FormController // HERITAGE DE LA CLASSE FormController
{


	public function traiterGenre()
	{
		// TABLEAU QUI VA CONTENIR LES INFOS A RENVOYER AU NAVIGATEUR
		$tabReponseJson = [];
		
		// DETECTER SI IL Y A UN FORMULAIRE A TRAITER
		$id_genre = $this->verifierSaisie("GenreJson");

		$tabToken = ["id_genre" => $id_genre];

		$objetSousgenresModel = new \Model\SousgenresModel;

		$tabLigne = $objetSousgenresModel->search($tabToken, $operator="OR");

		$this->showJson($tabLigne);


		
		/*// DEBUG
		$tabReponseJson["liste"] = [ "1", "2", "3"];
		$tabReponseJson["listeAssociatif"] = [ "id" => 0, "nom" => "hello" ];
		$tabReponseJson["listeFindAll"] = 
		[
			[ "id" => 1, "nom" => "a" ],
			[ "id" => 2, "nom" => "b" ],
			[ "id" => 3, "nom" => "c" ],
			[ "id" => 4, "nom" => "d" ],
		];
		
		$objetArtistesModel = new \Model\ArtistesModel;
		$tabReponseJson["bddFindAll"] = $objetArtistesModel->findAll();
		
		$tabReponseJson["bddSearch"] = $objetArtistesModel->search(["nom" => "nom%"]);
			
		// RENVOYER LE TABLEAU D'INFO JSON
		// TRANSFORME LE TABLEAU ASSOCIATIF PHP
		// EN OBJET JAVASCRIPT
		// (JSON => JS Object Notation)
		// LA METHODE EFFECTUE json_encode
		$this->showJson($tabReponseJson);
		
		// CREE LA PAGE HTML
		//$this->show('default/home');*/
		
	}


}
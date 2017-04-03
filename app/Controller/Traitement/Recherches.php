<?php

namespace Controller\Traitement;

class Recherches
{

    function recherchesTraitement ($formController)
    {


        $recherche = $formController->verifierSaisie("recherche");
        $formController->redirectToRoute('librairie_resultat_recherche', ['slug' => $recherche]);

    }  

    function recupRecherche ($recherche)
    {
        $tabLigne = "";
        $formController = new \Controller\FormController;
        $recherche = urldecode($recherche);

            $objetLivresModel = new \Model\LivresModel;

            $tabToken = [ "titreLivre" => $recherche ];

            $tabLigne = $objetLivresModel->search($tabToken, $operator = 'AND');

            $objetEvenementsModel = new \Model\EvenementsModel;

            $tabToken = [ "titreEvent" => $recherche ];

            $tabLigne2 = $objetEvenementsModel->search($tabToken, $operator = 'AND');

            foreach ($tabLigne2 as $tabInterne) {
                array_push($tabLigne, $tabInterne);
            }

        return $tabLigne;
    }  
}
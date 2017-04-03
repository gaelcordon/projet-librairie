<?php

namespace Controller\Traitement;

class Evenements
{

    function eventCreateTraitement ($formController)
    {
        $titreEvent     = $formController->verifierSaisie("titreEvent");
        $dateEvent      = $formController->verifierSaisie("dateEvent");
        $heureEvent     = $formController->verifierSaisie("heureEvent");
        $description    = $formController->verifierSaisie("description");
        $photo          = $formController->verifierSaisie("photo");

        $objetEvenementsModel = new \Model\EvenementsModel;

        $objetEvenementsModel->insert([
                                        "titreEvent"    => $titreEvent,
                                        "dateEvent"     => $dateEvent,
                                        "heureEvent"    => $heureEvent,
                                        "description"   => $description,
                                        "photo"         => $photo
                                      ]);

        $GLOBALS["eventCreateRetour"] = "Evenement crée !";
    }
    
}
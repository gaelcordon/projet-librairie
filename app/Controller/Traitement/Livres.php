<?php

namespace Controller\Traitement;

class Livres
{

    function livreCreateTraitement ($formController)
    {
        $titreLivre     = $formController->verifierSaisie("titreLivre");
        $auteur         = $formController->verifierSaisie("auteur");
        $isbn           = $formController->verifierSaisie("isbn");
        $dateParution   = $formController->verifierSaisie("dateParution");
        $nbPage         = $formController->verifierSaisie("nbPage");
        $editeur        = $formController->verifierSaisie("editeur");
        $genre          = $formController->verifierSaisie("genre");
        $sgenre         = $formController->verifierSaisie("sgenre");
        $resume         = $formController->verifierSaisie("resume");
        $couverture     = $formController->verifierSaisie("couverture");

        /*if(($titre != "") && ($auteur !="") && ($coupDeCoeur != "") && ($isbn != "") && ($prix != "") && ($dateParution != "") && ($nbPage != "") && ($editeur != "") && ($genre != "") && ($sgenre != "") && ($resume != "") && ($couverture != ""))
        {*/

            $objetLivresModel = new \Model\LivresModel;

            $objetLivresModel->insert([ "titreLivre"    => $titreLivre,
                                        "id_auteur"     => $auteur,
                                        "isbn"          => $isbn,
                                        "dateParution"  => $dateParution,
                                        "nbPage"        => $nbPage,
                                        "id_editeur"    => $editeur,
                                        "id_genre"      => $genre,
                                        "id_sousgenre"  => $sgenre,
                                        "resume"        => $resume,
                                        "couverture"    => $couverture,
                                      ]);

        $GLOBALS["livreCreateRetour"] = "Livre ajouté ($titreLivre) !";
        /*
        }
        else
        {
            $GLOBALS["livreCreateRetour"] = "INFORMATION(S) MANQUANTE(S) !";
        }*/
    }
    
}
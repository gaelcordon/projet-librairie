<?php

$titre = "Accueil - A la gloire de mon pere";
//$activeAccueil = "active";
/*$activeLibrairie = "";
$activeCoupsDeCoeur = "";
$activePapeterie = "";
$activeLoisirsEtJeux = "";
$activeEvenementsAteliers = "";
$activeNousContacter = "";
$activeInscription = "";
$activeConnexion = "";
$activeDeconnexion = "";
$activeAdmin = "";*/

$this->insert('partials/header', ["titre" => $titre]);
$this->insert('partials/section-accueil');
$this->insert('partials/footer');
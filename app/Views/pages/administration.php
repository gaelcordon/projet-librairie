<?php

$titre = "Admin - A la gloire de mon pere";

// On prévoit la déclaration de variable pour définir quel est le menu actif

/*$activeAccueil = "active";
$activeLibrairie = "";
$activeCoupsDeCoeur = "";
$activePapeterie = "";
$activeLoisirsEtJeux = "";
$activeEvenementsAteliers = "";
$activeNousContacter = "";
$activeInscription = "";
$activeConnexion = "";
$activeDeconnexion = "";
$activeAdmin = "";*/

// Contruction de la vue

$this->insert('partials/header', ["titre" => $titre]);
$this->insert('partials/section-admin');
$this->insert('partials/footer');
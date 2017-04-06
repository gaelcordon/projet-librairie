<?php

$titre = "Accueil - A la gloire de mon pere";

// On prévoit la déclaration de variable pour définir quel est le menu actif

$GLOBALS['activeLibrairie'] = "";
$GLOBALS['activeCoupsDeCoeur'] = "";
$GLOBALS['activeAteliers'] = "";
$GLOBALS['activeEvenements'] = "";


// Contruction de la vue

$this->insert('partials/header', ["titre" => $titre, "activeLibrairie" => $GLOBALS['activeLibrairie'], "activeCoupsDeCoeur" => $GLOBALS['activeCoupsDeCoeur'], "activeAteliers" => $GLOBALS['activeAteliers'], "activeEvenements" => $GLOBALS['activeEvenements']]);
$this->insert('partials/section-accueil');
$this->insert('partials/footer');
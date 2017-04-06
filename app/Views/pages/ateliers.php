<?php

$titre = "Ateliers - A la gloire de mon pere";

// On prévoit la décalration de variable pour définir quel est le menu actif

$GLOBALS['activeLibrairie'] = "";
$GLOBALS['activeCoupsDeCoeur'] = "";
$GLOBALS['activeAteliers'] = "active";
$GLOBALS['activeEvenements'] = "";


// Contruction de la vue

$this->insert('partials/header', ["titre" => $titre, "activeLibrairie" => $GLOBALS['activeLibrairie'], "activeCoupsDeCoeur" => $GLOBALS['activeCoupsDeCoeur'], "activeAteliers" => $GLOBALS['activeAteliers'], "activeEvenements" => $GLOBALS['activeEvenements']]);
$this->insert('partials/section-ateliers');
$this->insert('partials/footer');
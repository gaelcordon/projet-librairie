<?php

$titre = "La librairie - A la gloire de mon pere";

// On prévoit la décalration de variable pour définir quel est le menu actif

$GLOBALS['activeLibrairie'] = "active";
$GLOBALS['activeCoupsDeCoeur'] = "";
$GLOBALS['activeAteliers'] = "";
$GLOBALS['activeEvenements'] = "";


// Contruction de la vue

$this->insert('partials/header', ["titre" => $titre, "activeLibrairie" => $GLOBALS['activeLibrairie'], "activeCoupsDeCoeur" => $GLOBALS['activeCoupsDeCoeur'], "activeAteliers" => $GLOBALS['activeAteliers'], "activeEvenements" => $GLOBALS['activeEvenements']]);
$this->insert('partials/section-la-librairie');
$this->insert('partials/footer');
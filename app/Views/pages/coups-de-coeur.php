<?php

$titre = "Coups de Coeur - A la gloire de mon pere";

// On prévoit la décalration de variable pour définir quel est le menu actif

$GLOBALS['activeLibrairie'] = "";
$GLOBALS['activeCoupsDeCoeur'] = "active";
$GLOBALS['activeAteliers'] = "";
$GLOBALS['activeEvenements'] = "";


// Contruction de la vue

$this->insert('partials/header', ["titre" => $titre, "activeLibrairie" => $GLOBALS['activeLibrairie'], "activeCoupsDeCoeur" => $GLOBALS['activeCoupsDeCoeur'], "activeAteliers" => $GLOBALS['activeAteliers'], "activeEvenements" => $GLOBALS['activeEvenements']]);
$this->insert('partials/section-coups-de-coeur');
$this->insert('partials/footer');
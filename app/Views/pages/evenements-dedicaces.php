<?php

$titre = "Evenements/Dédicaces - A la gloire de mon pere";

// On prévoit la décalration de variable pour définir quel est le menu actif

$GLOBALS['activeLibrairie'] = "";
$GLOBALS['activeCoupsDeCoeur'] = "";
$GLOBALS['activeAteliers'] = "";
$GLOBALS['activeEvenements'] = "active";


// Contruction de la vue

$this->insert('partials/header', ["titre" => $titre, "activeLibrairie" => $GLOBALS['activeLibrairie'], "activeCoupsDeCoeur" => $GLOBALS['activeCoupsDeCoeur'], "activeAteliers" => $GLOBALS['activeAteliers'], "activeEvenements" => $GLOBALS['activeEvenements']]);
$this->insert('partials/section-evenements-dedicaces');
$this->insert('partials/footer');
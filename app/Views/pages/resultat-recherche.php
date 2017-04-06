<?php

$titre = "Resultat Recherche - A la gloire de mon pere";

// Contruction de la vue

$this->insert('partials/header', ["titre" => $titre]);
$this->insert('partials/section-resultat-recherche', ['recherche' => $GLOBALS['recherche']]);
$this->insert('partials/footer');
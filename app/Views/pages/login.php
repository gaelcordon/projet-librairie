<?php

$titre = "Login - A la gloire de mon pere";

// Contruction de la vue

$this->insert('partials/header', ["titre" => $titre]);
$this->insert('partials/section-login',   [ "loginRetour" => $loginRetour ]);
$this->insert('partials/footer');
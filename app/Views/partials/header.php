<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
		<!-- On place le logo de la librairie dans l'URL 
		On construit l'url à partir du nom de la route grâce à l'objet $this
		qui instancie le moteur plates (utilisé par le frameworl W)-->

		<link rel="icon" type="image/png" href="<?php echo $this->assetUrl('img/commun/favicon-librairie.png')?>"/>

		<!--Titre de la page naviguée-->
		<title><?php echo $titre; ?></title>
	
		<!-- On prepare au Responsive Web Design -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

		<!-- On charge la feuille de style normalize afin d'unifier le comportement des navigateurs face au style css -->
		<link rel="stylesheet" type="text/css" href="<?php echo $this->assetUrl('css/normalize.css')?>"/>

		<!-- Chargement du Framework Bootstrap et de son script associé -->
		<link rel="stylesheet" href="<?php echo $this->assetUrl('css/bootstrap.min.css')?>"/>

		<!-- Feuille de style pour la fonctionnalité date picker dans les formulaires -->
		<link rel="stylesheet" href="<?php echo $this->assetUrl('css/jquery-ui.min.css')?>"/>

		<!-- Feuille de style pour la fonctionnalité time picker dans les formulaires -->
		<link rel="stylesheet" href="<?php echo $this->assetUrl('css/jquery.timepicker.min.css')?>"/>

		<!-- On charge la feuille de style propre au projet au format less -->
		<link rel="stylesheet/less" type="text/css" href="<?php echo $this->assetUrl('css/main.less')?>"/>
	
  </head>
  <body>

    <header>
			<h1><?php echo $titre; ?></h1>
			<nav>
			    <ul>
			        <!-- 
			        CONSTRUIRE L'URL A PARTIR DU NOM DE LA ROUTE
			        $this EST L'OBJET QUI INSTANCIE LE MOTEUR PLATES (CREE PAR FRAMEWORK W)
			        -->
			        <li><a href="<?php echo $this->url('librairie_accueil'); ?>">Accueil</a></li>
			        <li><a href="<?php echo $this->url('librairie_librairie'); ?>">Librairie</a></li>
			        <li><a href="<?php echo $this->url('librairie_coups_de_coeur'); ?>">Coups de coeur</a></li>
					<li><a href="<?php echo $this->url('librairie_papeterie'); ?>">Papeterie</a></li>
					<li><a href="<?php echo $this->url('librairie_loisirs_et_jeux'); ?>">Loisirs et jeux</a></li>
					<li><a href="<?php echo $this->url('librairie_evenements_ateliers'); ?>">Evènements/Ateliers</a></li>
					<li><a href="<?php echo $this->url('librairie_plaisir_offrir'); ?>">Plaisir d'offrir</a></li>
					<li><a href="<?php echo $this->url('librairie_contact'); ?>">Contact/Nous trouver</a></li>
					<li><a href="<?php echo $this->url('librairie_espace_membre'); ?>">Espace membre</a></li>
			    </ul>
			</nav>
        
    </header>
    
    <main>

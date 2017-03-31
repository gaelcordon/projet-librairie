<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<!-- On place le logo de la librairie dans l'URL 
	On construit l'url à partir du nom de la route grâce à l'objet $this
	qui instancie le moteur plates (utilisé par le frameworl W)-->

	<link rel="icon" type="image/ico" href="<?php echo $this->assetUrl('img/commun/favicon.ico')?>"/>

	<!--Titre de la page naviguée-->
	<title><?php echo $titre; ?></title>

	<!-- On prepare au Responsive Web Design -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

	<!-- On charge la feuille de style normalize afin d'unifier le comportement des navigateurs face au style css -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->assetUrl('css/normalize.css')?>"/>

	<!-- On charge la feuille de style pour les fonts Awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->assetUrl('css/font-awesome.min.css')?>"/>

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
		<nav class="navbar" data-spy="affix" data-offset-top="0">
			<div class="container-fluid">
				<!-- Menu sandwich -->
				<div class="navbar-header">
					<div class="row">
						<button type="button" class="col-xs-1 navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div id="logo" class="col-xs-3 col-sm-12" >
							<a href="<?php echo $this->url('librairie_accueil'); ?>"><img class="img-responsive center-block" src="<?php echo $this->assetUrl('img/commun/logoLibrairie.png')?>" alt="logo-librairie-a-la-gloire-de-mon-pere-Mazan"></a>
						</div>
						<div id="zoneRecherche">
							<div class="col-xs-4">
								<form>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Rechercher">
										<div class="input-group-btn">
											<button class="btn btn-default" type="submit">
												<span class="glyphicon glyphicon-search"></span>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div><!-- div id="zoneRecherche"-->
					</div><!-- div class="row" -->
				</div> <!-- div class="navbar-header" -->
				<!-- On récupère les liens de navigations pour les réduire en responsive design -->
				<div class="collapse navbar-collapse" id="navbar-collapse-1">	
					<ul class="nav navbar-nav">
						<li><a href="<?php echo $this->url('librairie_accueil'); ?>"><img src="<?php echo $this->assetUrl('img/commun/iconAccueil.png')?>" alt="icon-accueil-librairie-Mazan"></a></li>
						<li><a href="<?php echo $this->url('librairie_la_librairie'); ?>">La librairie</a></li>
						<li><a href="<?php echo $this->url('librairie_coups_de_coeur'); ?>">Coups de coeur</a></li>
						<li><a href="<?php echo $this->url('librairie_ateliers'); ?>">Ateliers</a></li>
						<li><a href="<?php echo $this->url('librairie_evenements_dedicaces'); ?>">Evènements/Dédicaces</a></li>
					</ul><!-- class="nav navbar-nav" -->
					<div id="iconNavBar">
						<ul class="nav navbar-nav">
							<li><a href="#!"><span class="glyphicon glyphicon-envelope"></span></a></li>
							<li><a href="<?php echo $this->url('librairie_reseaux_sociaux'); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
							<!-- Gestion de l'affichage du glyphicon en fonction de la session utilisateur -->
							<?php if ( isset($w_user["id"]) && ($w_user["id"] > 0) ) : ?>
							<li><a href="<?php echo $this->url('admin_administration'); ?>"><span class="glyphicon glyphicon-cog"></span></a></li>
							<li><a href="<?php echo $this->url('logout'); ?>"><span class="glyphicon glyphicon-log-out"></span></a></li>
							<?php else: ?>			        
							<li><a href="<?php echo $this->url('login'); ?>"><span class="glyphicon glyphicon-log-in"></span></a></li>
							<?php endif; ?>
						</ul><!-- class="nav navbar-nav" -->
					</div>	
				</div><!-- id="navbar-collapse-1" -->
			<div>
		</nav> <!-- class="navbar navbar-default navbar-fixed-top" -->
	</header>
<main>
	<div id="mainBody" class="container-fluid">
		<div class="row">

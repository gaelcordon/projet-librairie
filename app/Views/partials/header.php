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
		<nav class="navbar">
				<!-- Menu sandwich -->
				<div class="navbar-header col-centered">
						<div id="logo" class="col-xs-3 col-sm-12" >
							<a href="<?php echo $this->url('librairie_accueil'); ?>"><img class="img-responsive center-block" src="<?php echo $this->assetUrl('img/commun/logoLibrairie.png')?>" alt="logo-librairie-a-la-gloire-de-mon-pere-Mazan"></a>
						</div>
						<button type="button" class="col-xs-1 navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- <div id="zoneRecherche">
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-centered">
								<form method="POST">
									<div class="input-group">
										<input type="text" name="recherche" class="form-control" placeholder="Rechercher">
										<input type="hidden" name="idFormClasse" value="Recherches">
										<input type="hidden" name="idFormMethode" value="recherchesTraitement">
										<div class="input-group-btn">
											<button class="btn btn-default" type="submit">
												<span class="glyphicon glyphicon-search"></span>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div><!-- div id="zoneRecherche"-->
				</div> <!-- div class="navbar-header" -->
				<!-- On récupère les liens de navigations pour les réduire en responsive design -->
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
						<ul class="col-centered nav navbar-nav">
							<div class="btn-group">
								<a href="<?php echo $this->url('librairie_accueil'); ?>"><img src="<?php echo $this->assetUrl('img/commun/iconAccueil.png')?>" alt="icon-accueil-librairie-Mazan"></a>
								<ul class="dropdown-menu">
									<li><a href="#!"><span class="glyphicon glyphicon-envelope"></span>  contacter</a></li>
									<li><a href="<?php echo $this->url('librairie_reseaux_sociaux'); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i>  Suivez-nous</a></li>
									<!-- Gestion de l'affichage du glyphicon en fonction de la session utilisateur -->
									<?php if ( isset($w_user["id"]) && ($w_user["id"] > 0) ) : ?>
									<li><a href="<?php echo $this->url('admin_administration'); ?>"><span class="glyphicon glyphicon-cog"></span>  Admin</a></li>
									<li><a href="<?php echo $this->url('logout'); ?>"><span class="glyphicon glyphicon-log-out"></span>  Déconnexion</a></li>
									<?php else: ?>			        
									<li><a href="<?php echo $this->url('login'); ?>"><span class="glyphicon glyphicon-log-in"></span>  Connexion</a></li>
									<?php endif; ?>
								</ul>	
							</div>
							<li><a href="<?php echo $this->url('librairie_la_librairie'); ?>">La librairie</a></li>
							<li><a href="<?php echo $this->url('librairie_coups_de_coeur'); ?>">Coups de coeur</a></li>
							<li><a href="<?php echo $this->url('librairie_ateliers'); ?>">Ateliers</a></li>
							<li><a href="<?php echo $this->url('librairie_evenements_dedicaces'); ?>">Evènements/Dédicaces</a></li>
							<li>
								<div id="zoneRecherche">
									<div id="searchIcon" type="button" data-toggle="collapse" data-target="#navbar-collapse-2" aria-expanded="false" aria-controls="collapseExample">
										<span class="glyphicon glyphicon-search"></span>
									</div>
									<div class="clearfix"></div>
									<div class="search-bar collapse" id="navbar-collapse-2">
										<form class="form-control" method="POST">
											<div class="input-group">
												<input type="text" name="recherche" id="search-text" class="form-control" placeholder="Rechercher">
												<input type="hidden" name="idFormClasse" value="Recherches">
												<input type="hidden" name="idFormMethode" value="recherchesTraitement">
												<div class="input-group-btn">
													<button type="submit" class="btn btn-default search-btn">
														<span class="glyphicon glyphicon-ok-sign"></span>
													</button>
												</div>
											</div>
										</form>
									</div>
								</div><!-- div id="zoneRecherche"-->
							</li>
						</ul><!-- class="nav navbar-nav" -->
				</div><!-- id="navbar-collapse-1" -->
		</nav> <!-- class="navbar navbar-default navbar-fixed-top" -->
	</header>
<main>
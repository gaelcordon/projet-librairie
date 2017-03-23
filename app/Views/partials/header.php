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
		<a href="<?php echo $this->url('librairie_accueil'); ?>"><img id="logo" class="center-block" src="<?php echo $this->assetUrl('img/commun/logo-librairie.png')?>" alt="logo-librairie-a-la-gloire-de-mon-pere-Mazan"></a>
		<nav class="navbar navbar-default navbar-static-top">
		
			<div class="container-fluid">
				<!-- Menu sandwich -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>		
				</div> <!-- div class="navbar-header" -->
				<!-- On récupère les liens de navigations pour les réduire en responsive design -->
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
             		<div class="row">
                		<ul class="nav navbar-nav">
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
							<li><a href="<?php echo $this->url('librairie_contact'); ?>">Contact/Nous trouver</a></li>
							

							<!-- Gestion de l'affichage du glyphicon en fonction de la session utilisateur -->
							<?php if ( isset($w_user["id"]) && ($w_user["id"] > 0) ) : ?>
								<li><a href="<?php echo $this->url('admin_administration'); ?>">Administration</a></li>
								<li><a href="<?php echo $this->url('logout'); ?>"><span class="glyphicon glyphicon-logout"></span></a></li>
							<?php else: ?>			        
								<li><a href="<?php echo $this->url('login'); ?>"><span class="glyphicon glyphicon-user"></span></a></li>
							<?php endif; ?>

						</ul><!-- class="nav navbar-nav" -->
						<form class="navbar-form navbar-left">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Rechercher">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
									</button>
								</div>
							</div>
						</form>
					</div><!-- class=row -->
				</div><!-- navbar-collapse -->	
			</div> <!-- div class="container-fluid" -->
		</nav>	 
    </header>
    
    <main>



<?php
	
	$w_routes = array(
		['GET|POST', '/', 							'Librairie#accueil', 				'librairie_accueil'],
		['GET|POST', '/lalibrairie', 				'Librairie#laLibrairie', 			'librairie_la_librairie'],
		['GET|POST', '/lalibrairie/[:slug]', 		'Librairie#sousGenre',				'librairie_sous_genre'],
		['GET|POST', '/coupsDeCoeur', 				'Librairie#coupsDeCoeur', 			'librairie_coups_de_coeur'],
		['GET|POST', '/ateliers', 					'Librairie#ateliers', 				'librairie_ateliers'],
		['GET|POST', '/evenementsDedicaces',		'Librairie#evenementsDedicaces', 	'librairie_evenements_dedicaces'],
		['GET|POST', '/resultatRecherche/[:slug]', 			'Librairie#resultatRecherche', 		'librairie_resultat_recherche'],
		['GET|POST', '/administration/', 			'Admin#administration', 			'admin_administration'],
		// ROUTE POUR LOGIN utilisation de la normalisation Framework W
 		['GET|POST', '/login',   				'Librairie#login',				'login'],
 		// ROUTE POUR LOGOUT utilisation de la normalisation Framework W
 		['GET|POST', '/logout',  				'Librairie#logout',				'logout'],
 		['GET|POST', '/api-web-ajax',   			'Ajax#traiterGenre',					'ajax_sousgenres'],
		
	
	);
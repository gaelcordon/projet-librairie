<?php
	
	$w_routes = array(
		['GET|POST', '/', 					'Librairie#accueil', 			'librairie_accueil'],
		['GET|POST', '/librairie', 			'Librairie#librairie', 			'librairie_librairie'],
		['GET|POST', '/coupsDeCoeur', 		'Librairie#coupsDeCoeur', 		'librairie_coups_de_coeur'],
		['GET|POST', '/papeterie',			'Librairie#papeterie', 			'librairie_papeterie'],
		['GET|POST', '/loisirsEtJeux', 		'Librairie#loisirsEtJeux', 		'librairie_loisirs_et_jeux'],
		['GET|POST', '/evenementsAteliers', 'Librairie#evenementsAteliers', 'librairie_evenements_ateliers'],
		['GET|POST', '/plaisirOffrir', 		'Librairie#plaisirOffrir', 		'librairie_plaisir_offrir'],
		['GET|POST', '/contact', 			'Librairie#contact', 			'librairie_contact'],
		
		// ROUTE POUR LOGIN utilisation de la normalisation Framework W
 		['GET|POST', '/login',   			'Librairie#login',				'login'],
 		// ROUTE POUR LOGOUT utilisation de la normalisation Framework W
 		['GET|POST', '/logout',  			'Librairie#logout',				'logout'],
		
	
	);
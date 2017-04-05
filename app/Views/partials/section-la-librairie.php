<?php
	
	$GLOBALS["url"] = "";

	function createDivLibrairie ($sousGenre)
	{
		$objetLivresModel = new \Model\LivresModel;

		$objetView = new \W\View\Plates\PlatesExtensions;


		if ($sousGenre == "adulte")
		{
			$tabToken = ["id_genre" => 1];
			$GLOBALS["url"] = $objetView->generateUrl("librairie_sous_genre", ["slug" => "adulte"]);
		}
		else if ($sousGenre == "jeunesse")
		{
			$tabToken = ["id_genre" => 2];
			$GLOBALS["url"] = $objetView->generateUrl("librairie_sous_genre", ["slug" => "jeunesse"]);
		}
		else
		{
			$tabToken = ["id_sousgenre" => $sousGenre];
			$GLOBALS["url"] = $objetView->generateUrl("librairie_sous_genre", ["slug" => $sousGenre]);
		}

		$tabLigne = $objetLivresModel->search($tabToken, $operator = "AND");

		$i = 0;

		foreach ($tabLigne as $LigneCourante) {
			$i++;
			if ($i <7)
			{
				$id = $LigneCourante["id"];
				$titreLivre = $LigneCourante["titreLivre"];
				$id_auteur = $LigneCourante["id_auteur"];
				$id_editeur = $LigneCourante["id_editeur"];
				$id_collection = $LigneCourante["id_collection"];
				$id_genre = $LigneCourante["id_genre"];
				$id_sousgenre = $LigneCourante["id_sousgenre"];
				$dateParution = $LigneCourante["dateParution"];

				$dateParution = new DateTime($dateParution);
				$dateParution = $dateParution->format('d/m/Y');

				$isbn = $LigneCourante["isbn"];
				$id_format = $LigneCourante["id_format"];
				$id_presentation = $LigneCourante["id_presentation"];
				$nbPage = $LigneCourante["nbPage"];
				$poids = $LigneCourante["poids"];
				$dimensions = $LigneCourante["dimensions"];
				$resume = $LigneCourante["resume"];

				$couverture = "img/livres/";
				$couverture .= $LigneCourante["couverture"];

				$prix = $LigneCourante["prix"];
				$coupDeCoeur = $LigneCourante["coupDeCoeur"];
				$dateCrea = $LigneCourante["dateCrea"];

				$alt = "livre_";
				$alt .= $LigneCourante["titreLivre"];

				$objetAuteursModel = new \Model\AuteursModel;
				$auteur = $objetAuteursModel->find($id_auteur);

				$objetEditeursModel = new \Model\EditeursModel;
				$editeur = $objetEditeursModel->find($id_editeur);

				$objetCollectionsModel = new \Model\CollectionsModel;
				$collection = $objetCollectionsModel->find($id_collection);

				$objetGenresModel = new \Model\GenresModel;
				$genre = $objetGenresModel->find($id_genre);

				$objetSousgenresModel = new \Model\SousgenresModel;
				$sousgenre = $objetSousgenresModel->find($id_sousgenre);

				$objetFormatsModel = new \Model\FormatsModel;
				$format = $objetFormatsModel->find($id_format);

				$objetPresentationsModel = new \Model\PresentationsModel;
				$presentation = $objetPresentationsModel->find($id_presentation);
?>
				<div class="focusLivre col-xs-6 col-md-3" data-toggle="modal" data-target="#modal<?php echo "$sousGenre-$id"; ?>"">
					<img class="img-responsive" src="<?php	echo $objetView->assetUrl($couverture); ?>" alt="<?php echo $alt; ?>" />
					<p><?php echo $titreLivre; ?></p>
				</div>

				<div class="modal fade" id="modal<?php echo "$sousGenre-$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  	<div class="modal-dialog modal-lg" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        		<h3 class="modal-title" id="myModalLabel"><?php echo $titreLivre ?></h3>
				      		</div>
				      		<div class="modal-body">
								<img src='<?php	echo $objetView->assetUrl($couverture); ?>' alt='couverture' />
								<h3>Auteur :<?php echo $auteur["libelle"] ?></h3>
								<p>Editeur :<?php echo $editeur["libelle"] ?></p>
								<p>Collection : <?php echo $collection["libelle"] ?></p>
								<p>Genre : <?php echo $genre["libelle"] ?></p>
								<p>Sous-Genre : <?php echo $sousgenre["libelle"] ?></p>
								<p>Date de parution :<?php echo $dateParution ?></p>
								<p>ISBN : <?php echo $isbn ?></p>
								<p>Format : <?php echo $format["libelle"] ?></p>
								<p>Présentation : <?php echo $presentation["libelle"] ?></p>
								<p>Nombre de pages : <?php echo $nbPage ?></p>
								<p>Poids : <?php echo $poids ?> Kg</p>
								<p>dimension : <?php echo $dimensions ?></p>
								<p>Resume : <?php echo $resume ?></p>
								<p>Prix : <?php echo $prix ?> € TTC</p>
							</div>
						</div>
				      	<div class="modal-footer">
				       		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      	</div>
				    </div>
				</div>
<?php
			}
		}
	}
?>

<section id="bgLaLibrairie" class="parallax">
	<div class="container">
		<div class="row parallaxRideau">
			<div class="blocText col-centered text-center col-md-10">

				<h2>Trois espaces sont à votre disposition.</h2>
				<p>Sur une surface d’environ <span>120 m<sup>2</sup></span>,
				ce sont près de <span>3500 titres en stock</span> que nous mettons à votre disposition.</p>

			</div>
		</div>
		<div id="espaceAdulte" class="row parallaxRideau">
			<div class="blocText text-center col-md-3 col-same-height blocGenre">
				<ul>
						<li><h2>Littérature adulte</h2></li>
						<li><a id="française" href="!#">Littérature française</a></li>
						<li><a id="etrangere" href="!#">Littérature étrangère</a></li>
						<li><a id="thriller" href="!#">Littérature policière</a></li>
						<li><a id="albums" href="!#">Bande Dessinée Adulte et Jeunesse</a></li>
						<li><a id="developpement" href="!#">Développement personnel, Santé, Psychologie</a></li>
						<li><a id="cuisine" href="!#">Cuisine, Vie Pratique</a></li>
				</ul>
			</div>
			<div class="col-md-8 col-md-offset-1">
				<div id="divGeneralAdulte">
					<?php createDivLibrairie("adulte") ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divFrançaise" class="row divLibrairieAdulte">
					<?php createDivLibrairie(2) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divEtrangere" class="row divLibrairieAdulte">
					<?php createDivLibrairie(1) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divPoliciere" class="row divLibrairieAdulte">
					<?php createDivLibrairie(3) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divBDAdulte" class="row divLibrairieAdulte">
					<?php createDivLibrairie(6) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divSante" class="row divLibrairieAdulte">
					<?php createDivLibrairie(17) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divCuisine" class="row divLibrairieAdulte">
					<?php createDivLibrairie(13) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
			</div>
		</div>
		<div id="espaceJeunesse" class="row parallaxRideau">
			<div class="blocText text-center col-md-3 col-same-height blocGenre">
				<ul>
					<li><h2>Jeunesse</h2></li>
					<li><a id="documentaire" href="!#">Documentaires</a></li>
					<li><a id="premiere" href="!#">Premières lectures</a></li>
					<li><a id="preados" href="!#">Romans Jeunesse et pré-Ados</a></li>
					<li><a id="young" href="!#">Romans Ados et Young Adult</a></li>
					<li><a id="manga" href="!#">Mangas</a></li>
					<li><a id="panini" href="!#">Albums</a></li>
					<li><a id="creatifs" href="!#">Jeux créatifs et de société</a></li>
				</ul>
			</div>
			<div class="col-md-8 col-md-offset-1 col-same-height">
				<div id="divGeneralJeunesse">
					<?php createDivLibrairie("jeunesse") ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divDocumentaire" class=" divLibrairieJeunesse">
					<?php createDivLibrairie(5) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divPremiere" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(7) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divPreados" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(11) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divYoung" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(8) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divManga" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(8) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divPanini" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(6) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>
				</div>
				<div id="divCreatifs" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(16) ?>
					<a class="linkLibrairie" href="<?php echo $GLOBALS["url"]; ?>">En voir plus...</a>

				</div>
			</div>
		</div>
		<div id="espacePapeterie" class="row parallaxRideau">	
			<div class="blocText text-center col-md-2 col-same-height blocGenre">
				<ul>
					<li><h2>Papeterie <br />
					Loisirs créatifs</h2></li>
					<li><a id="papetrie" href="!#">Papeterie scolaire ou de bureau</a></li>
					<li><a id="decopatch" href="!#">Décopatch</a></li>
					<li><a id="jouets" href="!#">Jouets d’éveil</a></li>
					<li><a id="loisirs" href="!#">Matériel de loisir créatif</a></li>
				</ul>
			</div>
			<div class="col-md-8 col-md-offset-1 col-same-height">
				<div id="divGeneralPapeterie">
					<?php createDivLibrairie("papeterie") ?>
				</div>
				<div id="divPapeterie" class=" divLibrairiePapeterie">
					<?php createDivLibrairie(2) ?>
				</div>
				<div id="divDecopatch" class="row divLibrairiePapeterie">
					<?php createDivLibrairie(1) ?>
				</div>
				<div id="divJouets" class="row divLibrairiePapeterie">
					<?php createDivLibrairie(3) ?>
				</div>
				<div id="divLoisirs" class="row divLibrairiePapeterie">
					<?php createDivLibrairie(6) ?>
				</div>
			</div>

		</div>
	</div> <!-- class="container" -->
</section> <!-- id="bgLaLibrairie" class="parallax" -->

<?php
	$sousgenre = $GLOBALS['sousgenre'];

	$objetLivresModel = new \Model\LivresModel;


	if ($sousgenre == "adulte")
	{
		$recherche = 1;
	    $tabToken = [ "id_genre" => $recherche ];

	    $tabLigne = $objetLivresModel->search($tabToken, $operator = 'AND');

	    $objetGenresModel = new \Model\GenresModel;
		$titrePage = $objetGenresModel->find($recherche);
	}
	else if ($sousgenre == "jeunesse")
	{
		$recherche = 2;
		$tabToken = [ "id_genre" => $recherche ];

		$tabLigne = $objetLivresModel->search($tabToken, $operator = 'AND');

		$objetGenresModel = new \Model\GenresModel;
		$titrePage = $objetGenresModel->find($recherche);
	}
	else
	{
		$recherche = $sousgenre;
		$tabToken = [ "id_sousgenre" => $recherche ];

		$tabLigne = $objetLivresModel->search($tabToken, $operator = 'AND');

		$objetSousgenresModel = new \Model\SousgenresModel;
		$titrePage = $objetSousgenresModel->find($recherche);
	}
?>

<section id="bgLaLibrairie" class="parallax">
	<div class="container">
		<div class="row parallaxRideau divSousGenre">
			<div class="blocText col-centered text-center col-md-10">
				<h2><?php echo $titrePage['libelle']; ?></h2>
			</div>


<?php
	foreach ($tabLigne as $LigneCourante) 
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

		$objetView = new \W\View\Plates\PlatesExtensions;

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
		<div class="focusLivre col-xs-6 col-md-2" data-toggle="modal" data-target="#modal<?php echo "$id"; ?>"">
			<img class="img-responsive" src="<?php	echo $objetView->assetUrl($couverture); ?>" alt="<?php echo $alt; ?>" />
			<p><?php echo $titreLivre; ?></p>
		</div>

		<div class="modal fade" id="modal<?php echo "$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

?>

			

		</div>
	</div> <!-- class="container" -->
</section> <!-- id="bgLaLibrairie" class="parallax" -->
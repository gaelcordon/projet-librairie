<section id="bgRecherche" class="parallax">
	<div id="resultatRecherche" class="container-fluid paddingBottom">
	    <div class="row">   
<?php

	$tabLigne = $GLOBALS['recherche'];

	foreach ($tabLigne as $LigneCourante) 
	{
		if (isset($LigneCourante['titreLivre']))
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
<div class="col-md-push-3 col-md-6 row parallaxRideauRecherche">
	<div class="blocText col-md-12 col-same-height divRecherche">
		<h3><?php echo $titreLivre; ?></h3>
		<img src='<?php echo $this->assetUrl($couverture); ?> ' alt='couverture' />
		<p>Auteur : <?php echo $auteur["libelle"]; ?></p>
		<p>Editeur : <?php echo $editeur["libelle"]; ?></p>
		<p>Date de parution : <?php echo $dateParution; ?></p>
		<p>Resume : <?php echo $resume; ?></p>
		<p>Prix : <?php echo $prix; ?> &euro;</p>
		<button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#modal<?php echo $id; ?>">
	 		En savoir plus
		</button>

<div class="modal fade" id="modal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="crossClose" aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Fiche de livre</h4>
      		</div>
      		<div class="modal-body">
				<h3><?php echo $titreLivre; ?></h3>
				<img class="img-responsive" src='<?php echo $this->assetUrl($couverture); ?>' alt='couverture' />
				<p>Crée le : <?php echo $dateCrea; ?></p>
				<p>Auteur : <?php echo $auteur["libelle"]; ?></p>
				<p>Editeur : <?php echo $editeur["libelle"]; ?></p>
				<p>Collection : <?php echo $collection["libelle"]; ?></p>
				<p>Genre : <?php echo $genre["libelle"]; ?></p>
				<p>Sous-Genre : <?php echo $sousgenre["libelle"]; ?></p>
				<p>Date de parution : <?php echo $dateParution; ?></p>
				<p>ISBN : <?php echo $isbn; ?></p>
				<p>Format : <?php echo $format["libelle"]; ?></p>
				<p>Présentation : <?php echo $presentation["libelle"]; ?></p>
				<p>Nombre de pages : <?php echo $nbPage; ?></p>
				<p>Poids : <?php echo $poids; ?></p>
				<p>dimension : <?php echo $dimensions; ?></p>
				<p>Resume : <?php echo $resume; ?></p>
				<p>Prix : <?php echo $prix; ?></p>
				<p>Date de création : <?php echo $dateCrea; ?></p>
			</div>
	      	<div class="modal-footer">
	       		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      	</div>
		</div>
    </div>
</div>
	</div>
</div>

<?php
		}
		else if (isset($LigneCourante['titreEvent']))
		{
			$titreEvent = $LigneCourante["titreEvent"];
			$typeEvent = $LigneCourante["typeEvent"];
			$dateEvent = $LigneCourante["dateEvent"];
			$heureEvent = $LigneCourante["heureEvent"];
			$description = $LigneCourante["description"];

			$photo = "img/ateliers_evenements/";
			$photo .= $LigneCourante["photo"];

?>

<div class="col-md-push-3 col-md-6 row parallaxRideauRecherche">
	<div class="blocText col-md-12 col-same-height divRecherche">
		<h3><?php echo $titreEvent; ?></h3>
		<img class="img-responsive" src='<?php echo $this->assetUrl($photo); ?>' alt='photo' />
		<p>Date de l'évènement : <?php echo $dateEvent; ?> à <?php echo $heureEvent; ?></p>
		<p><?php echo $description; ?></p>
	</div>
</div>
<?php
		}
	}

?>
        </div>
    </div>
</section>  <!-- section container -->
<section class="container">
    <div class="row">   
        <div col-xd-4 col-lg-4>
            <h3>Ceci est la future page "Résultat de recherche"</h3>
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


			echo
<<<CODEHTML
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal$id">
	 $titreLivre
</button>

<div class="modal fade" id="modal$id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Formulaire d'ajout d'évènements</h4>
      		</div>
      		<div class="modal-body">
				<h3>$titreLivre</h3>
				<img src='
CODEHTML;
			echo $this->assetUrl($couverture);
			echo 
<<<CODEHTML
				' alt='couverture' />
				<p>Crée le : $dateCrea</p>
				<p>Auteur : $auteur[libelle]</p>
				<p>Editeur : $editeur[libelle]</p>
				<p>Collection : $collection[libelle]</p>
				<p>Genre : $genre[libelle]</p>
				<p>Sous-Genre : $sousgenre[libelle]</p>
				<p>Date de parution : $dateParution</p>
				<p>ISBN : $isbn</p>
				<p>Format : $format[libelle]</p>
				<p>Présentation : $presentation[libelle]</p>
				<p>Nombre de pages : $nbPage</p>
				<p>Poids : $poids</p>
				<p>dimension : $dimensions</p>
				<p>Resume : $resume</p>
				<p>Prix : $prix</p>
				<p>Date de création : $dateCrea</p>
			</div>
		</div>
      	<div class="modal-footer">
       		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      	</div>
    </div>
</div>
CODEHTML;
		}
		else if (isset($LigneCourante['titreEvent']))
		{
			$titreEvent = $LigneCourante["titreEvent"];
			$typeEvent = $LigneCourante["typeEvent"];
			$dateEvent = $LigneCourante["dateEvent"];
			$heureEvent = $LigneCourante["heureEvent"];
			$description = $LigneCourante["description"];
			$photo = $LigneCourante["photo"];
			$dateCrea = $LigneCourante["dateCrea"];

			echo
<<<CODEHTML
<div>
	<h3>$titreEvent</h3>
	<img src='$photo' alt='photo' />
	<p>Crée le : $dateCrea</p>
	<p>Date de l'évènement : $dateEvent à $heureEvent</p>
	<p>$description</p>
</div>
CODEHTML;
		}
	}

?>
        </div>
    </div>
</section>  <!-- section container -->
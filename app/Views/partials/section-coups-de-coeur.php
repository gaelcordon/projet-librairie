<section id="bgCoupsDeCoeur" class="parallax">
	<div class="container">
		<div class="row parallaxRideau">
			<div class="blocText col-centered text-center col-md-8">
				<h2>Nos derniers coups de Coeur</h2>
				<p>
					La lecture fait naître en chacun d'entre nous des émotions différentes.<br />
					Au fil des pages, notre esprit voyage et l'appréciation de tel ou tel ouvrage se forge.
					Nous partageons ici nous coups de coeurs afin de vous les faire découvrir avec le plus grand plaisir.
				</p>
			</div>  
			<div id="divCoupDeCoeur" class="col-xd-4 col-lg-12">
			                
			<?php 
				$objetEvenementsModel = new \Model\LivresModel;

				$tabLignes = $objetEvenementsModel->findAll($orderBy = "dateParution", $orderDir = "DESC");
				$i = 0;

				foreach($tabLignes as $LigneCourante)
				{
					$i++;

					if ($i < 13)
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

						if ($coupDeCoeur == "oui")
						{
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
					<div class="focusLivre col-xs-6 col-md-2" data-toggle="modal" data-target="#modal<?php echo $id ?>"">
						<img class="img-responsive" src="<?php	echo $objetView->assetUrl($couverture); ?>" alt="<?php echo $alt; ?>" />
						<p><?php echo $titreLivre; ?></p>
					</div>

					<div class="modal fade" id="modal<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  	<div class="modal-dialog modal-lg" role="document">
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="crossClose" aria-hidden="true">&times;</span></button>
					        		<h3 class="modal-title" id="myModalLabel"><?php echo $titreLivre ?></h3>
					      		</div>
					      		<div class="modal-body">
									<img src='<?php	echo $this->assetUrl($couverture); ?>' alt='couverture' />
									<h3><span>Auteur : </span><?php echo $auteur["libelle"] ?></h3>
									<p><span>Editeur : </span><?php echo $editeur["libelle"] ?></p>
									<p><span>Collection : </span><?php echo $collection["libelle"] ?></p>
									<p><span>Genre : </span><?php echo $genre["libelle"] ?></p>
									<p><span>Sous-Genre : </span><?php echo $sousgenre["libelle"] ?></p>
									<p><span>Date de parution : </span><?php echo $dateParution ?></p>
									<p><span>ISBN : </span><?php echo $isbn ?></p>
									<p><span>Format : </span><?php echo $format["libelle"] ?></p>
									<p><span>Présentation : </span><?php echo $presentation["libelle"] ?></p>
									<p><span>Nombre de pages : </span><?php echo $nbPage ?></p>
									<p><span>Poids : </span><?php echo $poids ?> Kg</p>
									<p><span>dimension : </span><?php echo $dimensions ?></p>
									<p><span>Resume : </span><?php echo $resume ?></p>
									<p><span>Prix : </span><?php echo $prix ?> € TTC</p>
									<!--<p>Date de création : $dateCrea</p>-->
								</div>
						      	<div class="modal-footer">
						       		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      	</div>
							</div>
					    </div>
					</div>
	<?php				
						}
					}
				}
?>				
			</div>
		</div>
	</div>  <!-- class="container"-->
</section>
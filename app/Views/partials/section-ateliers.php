<section id="bgAteliers" class="parallax">
	<div id="ateliers" class="container">
		<div class="row parallaxRideau">
			<div class="blocText col-centered text-center col-md-8">
				<h2>Les Ateliers créatifs</h2>
				<p>
					La librairie propose un espace où la créativité de chacun pourra s'exprimer pleinement.<br />
					Activités manuelles, ateliers d'épanouissemet personnel, discussions... <br /> 
					venez partager des moments de détente en toute simplicité.
				</p>
			</div>
		</div>
		<?php 
			$objetEvenementsModel = new \Model\EvenementsModel;

			$tabLignes = $objetEvenementsModel->findAll("id", "DESC");

			foreach($tabLignes as $LigneCourante)
			{
				$titreEvent = $LigneCourante["titreEvent"];
				$typeEvent = $LigneCourante["typeEvent"];
				$dateEvent = $LigneCourante["dateEvent"];
				$heureEvent = $LigneCourante["heureEvent"];
				$description = $LigneCourante["description"];
				$photo = "img/ateliers_evenements/";
				$photo .= $LigneCourante["photo"];

				$alt = "photo_";
				$alt .= $LigneCourante["photo"];
				$dateCrea = $LigneCourante["dateCrea"];

				if (($typeEvent == "Atelier Créatif") || ($typeEvent == " Atelier bien-être"))
				{
		?>

					
					
					<div class="row parallaxRideau">
							<div id="photoAtelier" class="col-md-4 col-same-height">
								<img class="img-responsive col-centered" src="<?php	echo $this->assetUrl($photo); ?>" alt="<?php echo $alt; ?>">
							</div>
							<div class="blocText col-md-6 col-md-offset-1 col-same-height">
								<h3><?php echo $titreEvent; ?></h3>
								<br />
								<p><span>Rendez-vous le : </span><?php echo $dateEvent; ?> à <?php echo $heureEvent; ?></p>
								<br />
								<p><?php echo $description; ?></p>
							</div>
					</div>
					
					<?php
					}
				}
		?>
    </div>
</section>
<section id="bgBottomAteliers" class="parallax">
	<div id="realisations" class="container-fluid blocText text-center">
		<h2>Des ateliers à la portée de toutes et de tous, jeunes comme moins jeunes</h2>
	</div>
</section>
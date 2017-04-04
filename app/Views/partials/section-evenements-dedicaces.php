<section id="bgEvenements" class="parallax">
	<div id="Evenements" class="container">
		<div class="row">
			<div class="blocText parallaxRideau col-centered text-center">
				<h2>Les évènements / Dédicaces</h2>
				<p>
					Bienvenue dans cet espace réservé à une sélection d'actualités culturelles.<br />
					<br />
					Nous nous présentons l'agenda des rencontres avec nos auteurs préférés pour des séances dédicaces,
					mais aussi les évènements culturels qui ont lieu dans notre commune ou bien à proximité.<br />
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

				if ($typeEvent == "Evènement") 
				{
		?>

					<div class="row parallaxRideau">
						<div id="photoAtelier" class="col-md-4 col-same-height">
							<img class="img-responsive col-centered" src="<?php	echo $this->assetUrl($photo); ?>" alt="<?php echo $alt; ?>">
						</div>
						<div class="blocText col-md-8 col-same-height">
							<h3><?php echo $titreEvent; ?></h3>
							
							<p><span>Date de l'évènement :</span> <?php echo $dateEvent; ?> à <?php echo $heureEvent; ?></p>
							<p class="text-justify"><?php echo $description; ?></p>
						</div>
					</div>
					<?php
					}
				}
		?>
    </div>
</section>
<section id="bgAteliers" class="parallax">
	<div id="ateliers">
		<div class="row paddingTop">
			<div class="blocText parallaxRideau col-centered text-center col-md-10">
				<h2>Les Ateliers créatifs</h2>
				<p>
					La librairie propose un espace où la créativité de chacun pourra s'exprimer pleinement.<br />
					Activités manuelles, ateliers d'épanouissemet personnel, discussions <br /> 
					venez partager des moments de détente en toute simplicité.
				</p>
			</div>
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

			<div class="row paddingTop">
				<div class="blocText parallaxRideau col-centered text-left col-md-10">
					<div class="row">
						<div id="photoAtelier" class="col-md-4">
							<img class="img-responsive" src="<?php	echo $this->assetUrl($photo); ?>" alt="<?php echo $alt; ?>">
						</div>
						<div class="col-md-6 col-md-offset-1">
							<h3><?php echo $titreEvent; ?></h3>
							
							<p>Date de l'évènement : <?php echo $dateEvent; ?> à <?php echo $heureEvent; ?></p>
							<p><?php echo $description; ?></p>
						</div>
					</div>
				</div>
			</div>	
			<?php
			}
		}
?>

    </div>
</section>
<section id="bgBottomAteliers" class="parallax">
	<div id="">
		<div class="row paddingTop">
			<div class="blocText parallaxRideau col-centered text-center col-md-10">
				<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore enim ad, officiis alias fugit doloribus in quisquam fuga beatae iusto at eius, deleniti quasi rem dolorem. Assumenda, commodi, perferendis. Vel!</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, nihil, recusandae! Animi, tempore quibusdam sapiente tempora praesentium officiis debitis dignissimos consequatur pariatur repellat voluptate ab ipsa modi quae aliquid numquam!
				</p>
			</div>
		</div>
	</div>


</section>
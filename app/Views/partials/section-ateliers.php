<section class="container-fluid">
        <article class="container">
            <div class="row">   
                <div col-xd-4 col-lg-4>
                    <h3>Ceci est la future page "Ateliers"</h3>
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
		$photo = $LigneCourante["photo"];
		$dateCrea = $LigneCourante["dateCrea"];

		if ($typeEvent == "Atelier Créatif")
		{
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
        </article>
</section>  <!-- section container-fluid-->
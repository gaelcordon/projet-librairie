<?php
	function createDivLibrairie ($sousGenre)
	{
		$objetLivresModel = new \Model\LivresModel;

		$tabToken = ["id_sousgenre" => $sousGenre];

		$tabLigne = $objetLivresModel->search($tabToken, $operator = "AND");

		$i = 0;

		foreach ($tabLigne as $LigneCourante) {
			$i++;
			if ($i <7)
			{
				$img = $LigneCourante['couverture'];
				$titre = $LigneCourante['titreLivre'];

				echo
<<<CODEHTML
				<div>
					<p>$img</p>
					<p>$titre</p>
				</div>
CODEHTML;
			}
			else
			{
				break;
			}
		}
	}
?>


<section id="bgLaLibrairie" class="parallax">
	<div class="container">
		<div class="row paddingTop">
			<div class="blocText parallaxRideau col-centered text-center col-md-10">

				<h2>Trois espaces sont à votre disposition.</h2>
				<p>Sur une surface d’environ <span>120 m<sup>2</sup></span>,
				ce sont près de <span>3500 titres en stock</span> que nous mettons à votre disposition.</p>

			</div>
		</div>

		<div id="espaceAdulte" class="row paddingTop">
			<div class="container col-md-10 col-centered blocText parallaxRideau">
				<div class="menuGenre text-center col-md-4 col-same-height">
					<ul>
						<li><h2>Littérature adulte</h2></li>
						<li id="française">Littérature française</li>
						<li id="étrangère">Littérature étrangère</li>
						<li id="thriller">Littérature policière</li>
						<li id="albums">Bande Dessinée Adulte et Jeunesse</li>
						<li id="developpement">Développement personnel, Santé, Psychologie</li>
						<li id="cuisine">Cuisine, Vie Pratique</li>
					</ul>
				</div>
				<div id="divFrançaise" class="presentationLivres col-md-6 col-md-offset-2 col-same-height">
				<?php createDivLibrairie(1) ?>	
				</div>
			</div>
		</div>
		<div id="espaceJeunesse"class="row paddingTop">
			<div class="container col-md-10 col-centered blocText parallaxRideau">
				<div class="menuGenre text-center col-md-4 col-same-height">
					<ul>
						<li><h2>Jeunesse</h2></li>
						<li id="documentaire">Documentaires</li>
						<li id="premiere">Premières lectures</li>
						<li id="preados">Romans Jeunesse et pré-Ados</li>
						<li id="young">Romans Ados et Young Adult</li>
						<li id="manga">Mangas</li>
						<li id="panini">Albums</li>
						<li id="créatifs">Jeux créatifs et de société</li>
					</ul>
				</div>
			</div>
			<div class="presentationLivres col-md-6 col-md-offset-2 col-same-height">			
			</div>
		</div>
		<div id="espacePapeterie" class="row paddingTop">	
			<div class="container col-md-10 col-centered blocText parallaxRideau">
				<div class="menuGenre text-center col-md-4 col-same-height">
					<ul>
						<li><h2>Papeterie <br />
						Loisirs créatifs</h2></li>
						<li id="papetrie">Papeterie scolaire ou de bureau</li>
						<li id="decopatch">Décopatch</li>
						<li id="jouets">Jouets d’éveil</li>
						<li id="loisirs">Matériel de loisir créatif</li>
					</ul>
				</div>
			</div>
			<div class="presentationLivres col-md-6 col-md-offset-2 col-same-height">			
			</div>
		</div>
	</div>
</section> <!-- id="bgLaLibrairie" class="parallax" -->
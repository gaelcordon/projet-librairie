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
				$couverture = "img/livres/";
				$couverture .= $LigneCourante["couverture"];

				$alt = "livre_";
				$alt .= $LigneCourante["titreLivre"];

				$titre = $LigneCourante['titreLivre'];

				$objetView = new \W\View\Plates\PlatesExtensions;
?>
					<div class="focusLivre col-md-2">
						<img class="img-responsive" src="<?php	echo $objetView->assetUrl($couverture); ?>" alt="<?php echo $alt; ?>" />
						<p><?php echo $titre; ?></p>
					</div>
<?php
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
		<div class="row parallaxRideau">
			<div class="blocText col-centered text-center col-md-10">

				<h2>Trois espaces sont à votre disposition.</h2>
				<p>Sur une surface d’environ <span>120 m<sup>2</sup></span>,
				ce sont près de <span>3500 titres en stock</span> que nous mettons à votre disposition.</p>

			</div>
		</div>
		<div id="espaceAdulte" class="row parallaxRideau">
			<div class="blocText text-center col-md-3 col-same-height">
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
			<div class="selectionLivres col-md-8 col-md-offset-1 col-same-height">
				<div id="divFrançaise" class=" divLibrairie">
					<?php createDivLibrairie(2) ?>
				</div>
				<!--<div id="divEtrangere" class="row divLibrairie">
					<?php createDivLibrairie(1) ?>
				</div>
				<div id="divPoliciere" class="row divLibrairie">
					<?php createDivLibrairie(3) ?>
				</div>
				<div id="divBDAdulte" class="row divLibrairie">
					<?php createDivLibrairie(6) ?>
				</div>
				<div id="divSante" class="row divLibrairie">
					<?php createDivLibrairie(17) ?>
				</div>
				<div id="divCuisine" class="row divLibrairie">
					<?php createDivLibrairie(13) ?>
				</div>-->
			</div>
		</div>
		<div id="espaceJeunesse" class="row parallaxRideau">
			<div class="blocText text-center col-md-2 col-same-height">
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
			<div class="selectionLivres col-md-9 col-md-offset-1 col-same-height">
				<div class="row">
					<div class="focusLivre col-md-4">
					</div>
					<div class="focusLivre col-md-4">
					</div>
					<div class="focusLivre col-md-4">
					</div>
				</div>
				<div class="espaceVide row">
				</div>
				<div class="row">
					<div class="focusLivre col-md-4">
					</div>
					<div class="focusLivre col-md-4">
					</div>
					<div class="focusLivre col-md-4">
					</div>
				</div>
			</div>
		</div>
		<div id="espacePapeterie" class="row parallaxRideau">	
			<div class="blocText text-center col-md-2 col-same-height">
				<ul>
					<li><h2>Papeterie <br />
					Loisirs créatifs</h2></li>
					<li id="papetrie">Papeterie scolaire ou de bureau</li>
					<li id="decopatch">Décopatch</li>
					<li id="jouets">Jouets d’éveil</li>
					<li id="loisirs">Matériel de loisir créatif</li>
				</ul>
			</div>
			<div class="selectionLivres col-md-9 col-md-offset-1 col-same-height">
				<div class="row">
					<div class="focusLivre col-md-4">
					</div>
					<div class="focusLivre col-md-4">
					</div>
					<div class="focusLivre col-md-4">
					</div>
				</div>
				<div class="espaceVide row">
				</div>
				<div class="row">
					<div class="focusLivre col-md-4">
					</div>
					<div class="focusLivre col-md-4">
					</div>
					<div class="focusLivre col-md-4">
					</div>
				</div>
			</div>

		</div>
	</div>
</section> <!-- id="bgLaLibrairie" class="parallax" -->
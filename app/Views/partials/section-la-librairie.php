<?php
	function createDivLibrairie ($sousGenre)
	{
		$objetLivresModel = new \Model\LivresModel;

		if ($sousGenre == "adulte")
		{
			$tabToken = ["id_genre" => 1];
		}
		else if ($sousGenre == "jeunesse")
		{
			$tabToken = ["id_genre" => 2];
		}
		else
		{
			$tabToken = ["id_sousgenre" => $sousGenre];
		}

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
					<div class="focusLivre col-xs-6 col-md-3">
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
						<li><a id="française" href="!#">Littérature française</a></li>
						<li><a id="etrangere" href="!#">Littérature étrangère</a></li>
						<li><a id="thriller" href="!#">Littérature policière</a></li>
						<li><a id="albums" href="!#">Bande Dessinée Adulte et Jeunesse</a></li>
						<li><a id="developpement" href="!#">Développement personnel, Santé, Psychologie</a></li>
						<li><a id="cuisine" href="!#">Cuisine, Vie Pratique</a></li>
				</ul>
			</div>
			<div class="col-md-8 col-md-offset-1 col-same-height">
				<div id="divGeneralAdulte">
					<?php createDivLibrairie("adulte") ?>
				</div>
				<div id="divFrançaise" class=" divLibrairieAdulte">
					<?php createDivLibrairie(2) ?>
				</div>
				<div id="divEtrangere" class="row divLibrairieAdulte">
					<?php createDivLibrairie(1) ?>
				</div>
				<div id="divPoliciere" class="row divLibrairieAdulte">
					<?php createDivLibrairie(3) ?>
				</div>
				<div id="divBDAdulte" class="row divLibrairieAdulte">
					<?php createDivLibrairie(6) ?>
				</div>
				<div id="divSante" class="row divLibrairieAdulte">
					<?php createDivLibrairie(17) ?>
				</div>
				<div id="divCuisine" class="row divLibrairieAdulte">
					<?php createDivLibrairie(13) ?>
				</div>
			</div>
		</div>
		<div id="espaceJeunesse" class="row parallaxRideau">
			<div class="blocText text-center col-md-3 col-same-height">
				<ul>
					<li><h2>Jeunesse</h2></li>
					<li><a id="documentaire" href="!#">Documentaires</a></li>
					<li><a id="premiere" href="!#">Premières lectures</a></li>
					<li><a id="preados" href="!#">Romans Jeunesse et pré-Ados</a></li>
					<li><a id="young" href="!#">Romans Ados et Young Adult</a></li>
					<li><a id="manga" href="!#">Mangas</a></li>
					<li><a id="panini" href="!#">Albums</a></li>
					<li><a id="creatifs" href="!#">Jeux créatifs et de société</a></li>
				</ul>
			</div>
			<div class="col-md-8 col-md-offset-1 col-same-height">
				<div id="divGeneralJeunesse">
					<?php createDivLibrairie("jeunesse") ?>
				</div>
				<div id="divDocumentaire" class=" divLibrairieJeunesse">
					<?php createDivLibrairie(5) ?>
				</div>
				<div id="divPremiere" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(7) ?>
				</div>
				<div id="divPreados" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(11) ?>
				</div>
				<div id="divYoung" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(8) ?>
				</div>
				<div id="divManga" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(8) ?>
				</div>
				<div id="divPanini" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(6) ?>
				</div>
				<div id="divCreatifs" class="row divLibrairieJeunesse">
					<?php createDivLibrairie(16) ?>
				</div>
			</div>
		</div>
		<div id="espacePapeterie" class="row parallaxRideau">	
			<div class="blocText text-center col-md-2 col-same-height">
				<ul>
					<li><h2>Papeterie <br />
					Loisirs créatifs</h2></li>
					<li><a id="papetrie" href="!#">Papeterie scolaire ou de bureau</a></li>
					<li><a id="decopatch" href="!#">Décopatch</a></li>
					<li><a id="jouets" href="!#">Jouets d’éveil</a></li>
					<li><a id="loisirs" href="!#">Matériel de loisir créatif</a></li>
				</ul>
			</div>
			<div class="col-md-8 col-md-offset-1 col-same-height">
				<div id="divGeneralPapeterie">
					<?php createDivLibrairie("papeterie") ?>
				</div>
				<div id="divPapeterie" class=" divLibrairiePapeterie">
					<?php createDivLibrairie(2) ?>
				</div>
				<div id="divDecopatch" class="row divLibrairiePapeterie">
					<?php createDivLibrairie(1) ?>
				</div>
				<div id="divJouets" class="row divLibrairiePapeterie">
					<?php createDivLibrairie(3) ?>
				</div>
				<div id="divLoisirs" class="row divLibrairiePapeterie">
					<?php createDivLibrairie(6) ?>
				</div>
			</div>

		</div>
	</div>
</section> <!-- id="bgLaLibrairie" class="parallax" -->
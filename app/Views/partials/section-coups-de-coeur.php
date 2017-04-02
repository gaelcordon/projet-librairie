<section id="notreSelectionCoupDeCoeur">
		<div class="row paddingTop">
			<div class="parallaxRideau blocText col-centered text-center col-md-8">
				<h2>Nos coups de Coeur du moment</h2>
				<p>
					La lecture fait naître en chacun d'entre nous des émotions différentes.<br />
					Au fil des pages, notre esprit voyage et l'appréciation de tel ou tel ouvrage se forge. <br /> 
					Nous partageons ici nous coups de coeurs afin de vous les faire découvrir avec le plus grand plaisir.
				</p>
			</div>
		</div>
	 
			

		<div class="row">
		    <div class="col-md-12">
		      <div class="carousel slide multi-item-carousel" id="CarouselCoupsDeCoeur">
		        <div class="carousel-inner">
		          <div class="item active">
		            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
		          </div>
		          <div class="item">
		            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
		          </div>
		          <div class="item">
		            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
		          </div>
		          <div class="item">
		            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
		          </div>
		          <div class="item">
		            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
		          </div>
		          <div class="item">
		            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
		          </div>
		          <!-- add  more items here -->
		          <!-- Example item start:  -->
		          
		          <div class="item">
		            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
		          </div>
		          
		          <!--  Example item end -->
		        </div>
		        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
		        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
		      </div>
		    </div>
		  </div>
</section>


<article class="container">
	<div class="row">   
		<div class="col-xd-4 col-lg-2">
                
<?php 
	$objetEvenementsModel = new \Model\LivresModel;

	$tabLignes = $objetEvenementsModel->findAll("id", "DESC");

	foreach($tabLignes as $LigneCourante)
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

		if ($coupDeCoeur == "oui")
		{
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
				<p>Auteur : $id_auteur</p>
				<p>Editeur : $id_editeur</p>
				<p>Collection : $id_collection</p>
				<p>Genre : $id_genre</p>
				<p>Sous-Genre : $id_sousgenre</p>
				<p>Date de parution : $dateParution</p>
				<p>ISBN : $isbn</p>
				<p>Format : $id_format</p>
				<p>Présentation : $id_presentation</p>
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
	}

?>				
		</div>
	</div>
</article>  <!-- section container-->
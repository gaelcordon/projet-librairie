<section id="bgAdmin" class="parallax">
	<div class="container">
		<div id="menuAdmin" class="row">
	<?php
		$placement= "";
		if ( isset($w_user["id"]) && (($w_user["id"] == 1) || ($w_user["id"] == 3) || ($w_user["id"] == 4)))
		{
	?>
				<div class="col-sm-4 btnAdmin">
					<button type="button" id="addBook" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalBook">
			 			Ajout Livres
					</button>
				</div>
	<?php
		}
		else 
		{
			$placement = "col-md-offset-4";
		}

	?>
				<div class="col-sm-4 <?php echo $placement; ?> btnAdmin">
					<button type="button" id="addEvent" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalEvent">
			 			Ajout Evenements
					</button>
				</div>
	<?php
		if ( isset($w_user["id"]) && (($w_user["id"] == 1) || ($w_user["id"] == 3) || ($w_user["id"] == 4)))
		{
	?>
				<div class="col-sm-4 btnAdmin">
					<button type="button" id="addUser" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalUser">
			 			Ajout Utilisateurs
					</button>
				</div>
	<?php
		}
	?>

		</div>
	</div>
	<div id="afficheRetour" class="row">
	<?php

	$objetAuteursModel = new \Model\AuteursModel;
	$listeAuteurs = $objetAuteursModel->findAll();

	$objetEditeursModel = new \Model\EditeursModel;
	$listeEditeurs = $objetEditeursModel->findAll();

	$objetCollectionsModel = new \Model\CollectionsModel;
	$listeCollections = $objetCollectionsModel->findAll();

	$objetGenresModel = new \Model\GenresModel;
	$listeGenres = $objetGenresModel->findAll();

	$objetSousgenresModel = new \Model\SousgenresModel;
	$listeSousgenres = $objetSousgenresModel->findAll();

	$objetFormatsModel = new \Model\FormatsModel;
	$listeFormats = $objetFormatsModel->findAll();

	$objetPresentationsModel = new \Model\PresentationsModel;
	$listePresentations = $objetPresentationsModel->findAll();

	?>
	</div>

	<div class="modal fade" id="modalBook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title" id="myModalLabel">Formulaire de saisie de livres</h4>
      			</div>
      			<div class="modal-body">
        			<form method="POST" action="">
        				<div class="form-group">
                        	<input class="form-control" type="text" name="titreLivre" required placeholder="Titre">
						</div>
						<div class="form-group">
	                        <select class="form-control" name="auteur" id="auteur">
	                            <option value="0" selected disabled>Auteur...</option>
	                            <?php
	                            foreach($listeAuteurs as $auteur)
	                            {
	                                echo '<option value="'.$auteur['id'].'">'.$auteur['libelle'].'</option>
	                            ';
	                            }
	                            ?>
	                        </select>
                        	<a href="#">Ajouter</a>
                        </div>
                        <div class="form-group">
	                        <select class="form-control" name="editeur" id="editeur">
	                            <option value="0" selected disabled>Editeur...</option>
	                            <?php
	                            foreach($listeEditeurs as $editeur)
	                            {
	                                echo '<option value="'.$editeur['id'].'">'.$editeur['libelle'].'</option>
	                            ';
	                            }
	                            ?>
	                        </select>
	                    </div>
                        <div class="form-group">
	                        <select class="form-control" name="collection" id="collection">
	                            <option value="0" selected disabled>Collection...</option>
	                            <?php
	                            foreach($listeCollections as $collection)
	                            {
	                                echo '<option value="'.$collection['id'].'">'.$collection['libelle'].'</option>
	                            ';
	                            }
	                            ?>
	                        </select>
	                    </div>
	                    <div class="form-group">
	                        <select class="form-control" name="genre" id="genre">
	                            <option value="0" selected disabled>Genre...</option>
	                            <?php
	                            foreach($listeGenres as $genre)
	                            {
	                                echo '<option value="'.$genre['id'].'">'.$genre['libelle'].'</option>
	                            ';
	                            }
	                            ?>
	                        </select>
	                    </div>
	                    <div class="form-group">
	                        <select class="form-control" name="sgenre" id="sgenre">
	                        	<option value="0" selected disabled>Sous-Genre...</option>
	                        </select>
	                    </div>
						<div class="form-group">
                        	<input class="form-control" type="text" class="datePicker" name="dateParution" placeholder="Date de Parution">
                       	</div>
						<div class="form-group">
                        	<input class="form-control" type="text" name="isbn" placeholder="ISBN">
                        </div>
                        <div class="form-group">
	                        <select class="form-control" name="format" id="format">
	                            <option value="0" selected disabled>Format...</option>
	                            <?php
	                            foreach($listeFormats as $format)
	                            {
	                                echo '<option value="'.$format['id'].'">'.$format['libelle'].'</option>
	                            ';
	                            }
	                            ?>
	                        </select>
	                    </div>
                        <div class="form-group">
	                        <select class="form-control" name="presentation" id="presentation">
	                            <option value="0" selected disabled>Présentation...</option>
	                            <?php
	                            foreach($listePresentations as $presentation)
	                            {
	                                echo '<option value="'.$presentation['id'].'">'.$presentation['libelle'].'</option>
	                            ';
	                            }
	                            ?>
	                        </select>
	                    </div>
	                    <div class="form-group">
                        	<input class="form-control" type="number" name="nbPage" placeholder="Nbre de pages"/>
                        </div>
                        <div class="form-group">
                        	<input class="form-control" type="text" name="poids" placeholder="Poids"/>
                        </div>
                        <div class="form-group">
                        	<input class="form-control" type="text" name="dimensions" placeholder="Dimensions"/>
                        </div>
                        <div class="form-group">
                        	<textarea class="form-control" name="resume" rows="10" cols="50">Résumé</textarea>
                        </div>
                        <div class="form-group">
                        	<input class="form-control" type="text" name="couverture" placeholder="Adresse image de couverture"/>
                        </div>
                        <div class="form-group">
                        	<input class="form-control" type="number" name="prix" placeholder="Prix pubic en Euros"/>
                        </div>
                        <div class="form-group">
                        	<label>Coup de Coeur ?</label>
                        	<input class="form-control" type="checkbox" name="coupDeCoeur" value="non"/>
                        </div>
			            <input type="hidden" name="idFormClasse" value="Livres">
						<input type="hidden" name="idFormMethode" value="livreCreateTraitement">
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    	    			<button type="submit" class="btn btn-primary">Ajouter ce livre</button>
					</form>
		      	</div>
      			<div class="modal-footer">
      			</div>
    		</div>
  		</div>
	</div>

	<div class="modal fade" id="modalEvent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title" id="myModalLabel">Formulaire d'ajout d'évènements</h4>
      			</div>
      			<div class="modal-body">
        			<form method="POST" action="">
			        	<div class="form-group">
			            	<input type="text" class="form-control" name="titreEvent" required placeholder="Titre de l'évènement">
						</div>
						<div class="form-group">
			            	<input type="text" class="datePicker form-control" name="dateEvent" required placeholder="Date de l'évènement">
						</div>
						<div class="form-group">
			            	<input type="text" class="timePicker form-control" name="heureEvent" required placeholder="Heure de l'évènement">
						</div>
						<div class="form-group">
			            	<textarea name="description" class="form-control" rows="10" cols="50">Description</textarea>
						</div>
						<div class="form-group">
			            	<input type="text" class="form-control" name="photo" placeholder="Url de la photo">
			            </div>
			            <input type="hidden" name="idFormClasse" value="Evenements">
						<input type="hidden" name="idFormMethode" value="eventCreateTraitement">
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        			<button type="submit" class="btn btn-primary">Ajouter cet évènement</button>
					</form>
      			</div>
      			<div class="modal-footer">
      			</div>
    		</div>
  		</div>
	</div>

	<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title" id="myModalLabel">Formulaire d'ajout d'utilisateurs</h4>
      			</div>
      			<div class="modal-body">
        			<form method="POST" action="">
						<div class="form-group">
							<input type="text" class="form-control" name="username" required placeholder="Nom d'utilisateur">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" required placeholder="Adresse email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password1" required placeholder="Mot de passe" title="au moins 3 caractères" />
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password2" required placeholder="Confirmez le mot de passe" title="au moins 3 caractères" />
						</div>
						<input type="hidden" name="idFormClasse" value="Utilisateurs">
						<input type="hidden" name="idFormMethode" value="UtilisateursTraitement">
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    	    			<button type="submit" class="btn btn-primary">Ajouter cet utilisateur</button>
					</form>
      			</div>
      			<div class="modal-footer">
      			</div>
    		</div>
  		</div>
	</div>
	
</section>
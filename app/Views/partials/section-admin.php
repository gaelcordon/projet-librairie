<section class="container">
	<div id="menuAdmin" class="row">
		<div class="col-lg-3 col-lg-push-2">
			<button type="button" id="addBook" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalBook">
	 			Ajout Livres
			</button>
		</div>
		<div class="col-lg-3 col-lg-push-2">
			<button type="button" id="addEvent" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalEvent">
	 			Ajout Evenements
			</button>
		</div>
		<div class="col-lg-3 col-lg-push-2">
			<button type="button" id="addUser" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalUser">
	 			Ajout Utilisateurs
			</button>
		</div>
	</div>

	<!--<div id="formBook" class="row">
		<div class="col-lg-push-3 col-lg-5">
			<h3>Formulaire de saisie de livres</h3>
			<form method="GET" action="">
				<div>
					<input type="text" name="titreLivre" required placeholder="Titre du Livre">
				</div>
				<div>
		            <select name="auteur" id="auteur">
		            <option value="0" selected disabled>Sélectionnez l'auteur</option>
		            <option value="2">Pier</option>
		                <?php /*
		                foreach($listeAuteurs as $auteur)
		                {
		                    echo '<option value="'.$auteur['id'].'">'.$auteur['prenom'].' '.$auteur['nom'].'</option>';
		                }*/
		                ?> 
		            </select>
		        </div>
	            <div><a href="#">ajoutez un auteur non listé</a></div>
	            <div>
		            <label>Coup de Coeur ?</label>
		            <input type="checkbox" name="coupDeCoeur" value="oui">
		        </div>
		        <div>
	            	<input type="text" name="isbn" placeholder="ISBN">
	            </div>
	            <div>
	            	<input type="text" name="prix" required placeholder="Prix public en Euros">
	            </div>
	            <div>
	            	<input type="text" class="datePicker" name="dateParution" placeholder="Date de Parution">
	            </div>
	            <div>
	            	<input type="text" name="nbPage" placeholder="Nbre de pages">
	            </div>
	            <div>
		            <select name="editeur" id="editeur">
		                <option value="0" selected disabled>Sélectionnez l'éditeur</option>
		                <option value="2">PierEdition</option>
		                <?php/*
		                foreach($listeEditeurs as $editeur)
		                {
		                    echo '<option value="'.$editeur['id'].'">'.$editeur['libelle'].'</option>';
		                }*/
		                ?>
		            </select>
		        </div>
				<div>
	            <select name="genre" id="genre">
	                <option value="0" selected disabled>Sélectionnez un genre...</option>
	                <option value="2">Roman</option>
	                <?php/*
	                foreach($listeGenres as $genre)
	                {
	                    echo '<option value="'.$genre['id'].'">'.$genre['libelle'].'</option>';
	                }*/
	                ?>
	            </select>
	            </div>
	            <div>
		            <select name="sgenre" id="sgenre">
		            	<option value="0" selected>Sous-Genre 1</option>
		            	<option value="8" selected>Fantastique</option>
		            </select>
		        </div>
		        <div>
	            	<textarea name="resume" rows="10" cols="50">Résumé</textarea>
	            </div>
	            <div>
	            	<input type="text" name="couverture" placeholder="Adresse Image">
	            </div>
	            <button type="submit">Ajouter le livre</button>-->
	            <!-- INFOS TECHNIQUES -->
	            <!--<input type="hidden" name="idForm" value="ajoutLivre"/>	
	            <div class="retour">
	<?php if(isset($livreCreateRetour)) echo $livreCreateRetour ; ?>            	
	            </div>
			</form>
		</div>
	</div>-->

	<div class="modal fade" id="modalBook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title" id="myModalLabel">Formulaire de saisie de livres</h4>
      			</div>
      			<div class="modal-body">
        			<form method="GET" action="">
						<div class="form-group">
							<input type="text" class="form-control" name="titreLivre" required placeholder="Titre du Livre">
						</div>
						<div class="form-group">
				            <select name="auteur" class="form-control" id="auteur">
				            <option value="0" selected disabled>Sélectionnez l'auteur</option>
				            <option value="2">Pier</option>
				                <?php /*
				                foreach($listeAuteurs as $auteur)
				                {
				                    echo '<option value="'.$auteur['id'].'">'.$auteur['prenom'].' '.$auteur['nom'].'</option>';
				                }*/
				                ?> 
				            </select>
				        </div>
			            <div><a href="#">ajoutez un auteur non listé</a></div>
			            <div class="form-group">
				            <label>Coup de Coeur ?</label>
				            <input type="checkbox" class="form-control" name="coupDeCoeur" value="oui">
				        </div>
				        <div class="form-group">
			            	<input type="text" class="form-control" name="isbn" placeholder="ISBN">
			            </div>
			            <div class="form-group">
			            	<input type="text" class="form-control" name="prix" required placeholder="Prix public en Euros">
			            </div>
			            <div class="form-group">
			            	<input type="text" class="datePicker form-control" name="dateParution" placeholder="Date de Parution">
			            </div>
			            <div class="form-group">
			            	<input type="text" class="form-control" name="nbPage" placeholder="Nbre de pages">
			            </div>
			            <div class="form-group">
				            <select name="editeur" class="form-control" id="editeur">
				                <option value="0" selected disabled>Sélectionnez l'éditeur</option>
				                <option value="2">PierEdition</option>
				                <?php/*
				                foreach($listeEditeurs as $editeur)
				                {
				                    echo '<option value="'.$editeur['id'].'">'.$editeur['libelle'].'</option>';
				                }*/
				                ?>
				            </select>
				        </div>
						<div class="form-group">
				            <select name="genre" class="form-control" id="genre">
				                <option value="0" selected disabled>Sélectionnez un genre...</option>
				                <option value="2">Roman</option>
				                <?php/*
				                foreach($listeGenres as $genre)
				                {
				                    echo '<option value="'.$genre['id'].'">'.$genre['libelle'].'</option>';
				                }*/
				                ?>
				            </select>
			            </div>
			            <div class="form-group">
				            <select name="sgenre" class="form-control" id="sgenre">
				            	<option value="0" selected>Sous-Genre 1</option>
				            	<option value="8" selected>Fantastique</option>
				            </select>
				        </div>
				        <div class="form-group">
			            	<textarea name="resume" class="form-control" rows="10" cols="50">Résumé</textarea>
			            </div>
			            <div class="form-group">
			            	<input type="text" class="form-control" name="couverture" placeholder="Adresse Image">
			            </div>
					</form>
		      	</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			<button type="button" class="btn btn-primary">Ajouter cet utilisateur</button>
      			</div>
    		</div>
  		</div>
	</div>

	<!--<div id="formEvent" class="row">
        <h3>Formulaire de saisie d'évènements</h3>
        <form method="POST" action="">
        	<div>
            	<input type="text" name="titreEvent" required placeholder="Titre de l'évènement">
			</div>
			<div>
            	<input type="text" class="datePicker" name="dateEvent" required placeholder="Date de l'évènement">
			</div>
			<div>
            	<input type="text" class="timePicker" name="heureEvent" required placeholder="Heure de l'évènement">
			</div>
			<div>
            	<textarea name="description" rows="10" cols="50">Description</textarea>
			</div>
			<div>
            	<input type="text" name="photo" placeholder="Url de la photo">
            </div>
            <button type="submit">Publier cet évènement</button>-->
            <!-- INFOS TECHNIQUES -->
            <!--<input type="hidden" name="idForm" value="ajoutEvent"/>
            <div class="retour">
<?php if(isset($eventCreateRetour)) echo $eventCreateRetour ; ?>            	
            </div>
        </form>
	</div>-->


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
					</form>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			<button type="button" class="btn btn-primary">Ajouter cet utilisateur</button>
      			</div>
    		</div>
  		</div>
	</div>

	<!--<div id="formUser" class="row">
		<h3>Formulaire d'ajout d'utilisateurs</h3>
		<form method="POST" action="">
			<div>
				<input type="text" name="username" required placeholder="Nom d'utilisateur">
			</div>
			<div>
				<input type="email" name="email" required placeholder="Adresse email">
			</div>
			<div>
				<input type="password" name="password1" required placeholder="Mot de passe" title="au moins 3 caractères" />
			</div>
			<div>
				<input type="password" name="password2" required placeholder="Confirmez le mot de passe" title="au moins 3 caractères" />
			</div>
			<input type="hidden" name="idFormClasse" value="Utilisateurs">
			<input type="hidden" name="idFormMethode" value="UtilisateursTraitement">
			<button>Ajouter cet utilisateur</button>
			<div class="retour">
			<?php if (isset($GLOBALS["ajoutUtilisateurRetour"])) echo $GLOBALS["ajoutUtilisateurRetour"]; ?>
			</div>	
		</form>		
	</div>-->

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
					</form>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			<button type="button" class="btn btn-primary">Ajouter cet utilisateur</button>
      			</div>
    		</div>
  		</div>
	</div>
	
</section>
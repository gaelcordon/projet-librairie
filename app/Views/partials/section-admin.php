<section class="container">
	<div class="row">
		<div id="addBook" class="col-lg-3">
			<h3>Ajout Livres</h3>
		</div>
		<div id="addEvent" class="col-lg-3">
			<h3>Ajout Evenements</h3>
		</div>
		<div id="addArticle" class="col-lg-3">
			<h3>Ajout Articles</h3>
		</div>
		<div id="addUser" class="col-lg-3">
			<h3>Ajout Utilisateurs</h3>
		</div>
	</div>

	<div id="formBook" class="row">
		<h3>Formulaire de saisie de livres</h3>
		<form method="POST" action="">
			<div>
				<input type="text" name="titreLivre" required placeholder="Titre du Livre">
			</div>
			<div>
	            <select name="auteur" id="auteur">
	            <option value="0" selected disabled>Sélectionnez l'auteur</option>
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
	            </select>
	        </div>
	        <div>
            	<textarea name="resume" rows="10" cols="50">Résumé</textarea>
            </div>
            <div>
            	<input type="text" name="couverture" placeholder="Adresse Image">
            </div>
            <button>Ajouter le livre</button>
            <!-- INFOS TECHNIQUES -->
            <input type="hidden" name="idForm" value="ajoutLivre"/>	
		</form>
	</div>

	<div id="formEvent" class="row">
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
            <button>Publier cet évènement</button>
            <!-- INFOS TECHNIQUES -->
            <input type="hidden" name="idForm" value="ajoutEvent"/>
        </form>
	</div>

<!-- Formulaire responsive -->
	<form id="formUser" class="form-horizontal">
		<fieldset>
			<!-- Nom du Formulaire -->
			<legend>Ajout d'un membre de la librairie</legend>

			<!-- Champ nom du nouveau membre-->
			<div class="form-group">
				<label class="col-md-4 control-label icon-addon addon-right" for="username"></label>  
				<div class="col-md-4">
					<input type="text" id="username" name="username" placeholder="Nom d'utilisateur" class="form-control input-md" required>
					<i class="icon icon-user"></i>
					<span class="help-block"></span>
				</div>
			</div>

			<!-- champ adresse Email-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="email"></label>  
				<div class="col-md-4">
					<input type="email" id="email" name="email"  placeholder="Email" class="form-control input-md">
					<span class="help-block"></span>		    
				</div>
			</div>

			<!-- champ mot de Passe-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="password1"></label>
				<div class="col-md-4">
					<input type="password" id="password1" name="password1"  placeholder="Mot de Passe" class="form-control input-md" required>
					<span class="help-block"></span>
				</div>
			</div>

			<!-- champ contrôle mot de passe-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="password2"></label>
				<div class="col-md-4">
					<input type="password" id="password2" name="password2"  placeholder="Confirmez le mot de passe" class="form-control input-md" required>
					<span class="help-block"></span>
				</div>
			</div>

			<!-- Bouton ajouter ce membre -->
			<div class="form-group">
				<label class="col-md-4 control-label" for=""></label>
				<div class="col-md-4">
					<button class="btn btn-primary btn-librairie-form">Ajouter ce membre</button>
				</div>
			</div>

			<!-- Section cachée pour le traitement du formulaire en PHP -->
			<input type="hidden" name="idFormClasse" value="Utilisateurs">
			<input type="hidden" name="idFormMethode" value="UtilisateursTraitement">

			<!-- Emplacement pour message de retour de gestion du formulaire -->
			<div class="retour">
				<?php if (isset($GLOBALS["ajoutUtilisateurRetour"])) echo $GLOBALS["ajoutUtilisateurRetour"]; ?>
			</div>

		</fieldset>
	</form>

<!-- Formulaire responsive -->
</section>
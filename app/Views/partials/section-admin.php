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

	<div id="formUser" class="row">
		<h3>Formulaire d'ajout d'utilisateurs</h3>
		<form method=¨POST" action="">
			<div>
				<input type="text" name="username" required placeholder="Nom d'utilisateur">
			</div>
			<div>
				<input type="email" name="email" required placeholder="Adresse email">
			</div>
			<div>
				<input type="password" name="password" required placeholder="Mot de passe">
			</div>
			<input type="hidden" name="idForm" value="ajoutUser">
			<button>Ajouter cet utilisateur</button>
		</form>		
	</div>
	
</section>
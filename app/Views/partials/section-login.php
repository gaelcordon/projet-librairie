<section class="container">
	<div class="row">   
		<div class="col-xd-4 col-lg-4 col-lg-push-4">
			<h3>Bienvenue sur la page de connexion</h3>
			<form class="" method="GET" action="">
				<input type="text" name="identifiant" required placeholder="VOTRE EMAIL OU USERNAME">
				<input type="password" name="cache" required placeholder="VOTRE MOT DE PASSE">
				<button type="submit">ME CONNECTER</button>
				<input type="hidden" name="idForm" value="login">
				<div class="retour">
					<?php echo $loginRetour; ?>
				</div>
			</form>
		</div>
	</div>
</section><!-- section container-->

	<!-- POUR NE PAS MONTRER LE MOT DE PASSE DANS L'URL IL FAUDRA POST -->


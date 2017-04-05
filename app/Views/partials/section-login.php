<section id="bgAdmin" class="parallax">
	<div class="container"> 
		<div class="row parallaxRideau">
			<div class="blocText col-centered text-center col-md-8">
				<h3>Bienvenue sur la page de connexion</h3>
				<form class="" method="POST" action="">
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
	</div>
</section><!-- section container-->


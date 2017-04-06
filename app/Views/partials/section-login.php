<section id="bgAdmin" class="parallax">
	<div class="container"> 
		<div class="col-md-8 col-centered row parallaxRideauLogin">
			<div class="blocText col-centered text-center col-md-8">
				<h3>Bienvenue sur la page de connexion</h3>
				<form method="POST" action="">
					<div class="form-group">
						<input type="text" class="form-control" name="identifiant" required placeholder="VOTRE EMAIL OU USERNAME">						
					</div>
					<div class="form-group">						
						<input type="password" class="form-control" name="cache" required placeholder="VOTRE MOT DE PASSE">
					</div>
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


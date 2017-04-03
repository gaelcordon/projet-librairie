		<section id="bgAccueil" class="parallax">
			<div id="nouveautes" class="container">
				<div class="row paddingTop">
					<div class="blocText parallaxRideau col-centered text-center col-md-8">
						<h2>Nouveautés</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-md-6 col-centered">
						<div id="carouselNouveautes">
							<ul class="carousel">
							<?php
								$objetLivresModel = new \Model\LivresModel;

								$tabLigne = $objetLivresModel->findAll($orderBy = "dateParution", $orderDir = "DESC", $limit = 7);

								$i = 0;
								foreach ($tabLigne as $LigneCourante)
								{
									$i++;
									$couverture = "img/livres/";
									$couverture .= $LigneCourante["couverture"];

									$alt = "livre_";
									$alt .= $LigneCourante["titreLivre"];


							?>
								<li class="items main-pos" id="<?php echo $i; ?>">
								<img class="img-responsive" src="<?php	echo $this->assetUrl($couverture); ?>" alt="<?php echo $alt; ?>" />	
								</li>
							<?php
								}
							?>
							</ul>
						</div><!-- id="carouselNouveautes" -->
					</div> 
				</div> <!-- class="row" -->
				<!-- <div id="buttonCarousel" class="row text-center">
					<input type="button" value="Prev" id="prev">
					<input type="button" value="Next" id="next">
				</div> -->
			</div><!--id="nouveautes"-->
			<div class="container">
				<div class="row paddingTop">
					<div class="col-xs-10 col-sm-8 col-md-8 col-centered">
						<div id="texteAccueil" class="text-center blocText parallaxRideau">
							<div id="ilEtaitUneFois">
								<h2>Il était une fois...</h2>
								<p>
									Les portes de la librairie, "A la gloire de mon père", se sont ouvertes, la première<br />
								fois, le 18 avril 2009 grâce à la détermination de sa propriétaire Eve Arnoux.<br />
								En dépit d’un contexte peu favorable face à une concurrence non spécialisée<br />
								présente sur Internet, la preuve est faite qu’une librairie généraliste<br />
								indépendante a su trouver sa place au sein d’un petit village du Vaucluse.<br />
								<br />
								Située non loin de la place de la mairie de Mazan, ce sont près de 3500 titres en<br />
								stock que nous vous proposons sur une surface d’environ 120 m<sup>2</sup>.
								</p>
							</div>											
							<div id="vousAccompagner">
								<h2>Pour vous accompagner</h2>
								<p>
									Deux Libraires sont présentes pour vous conseiller et vous accompagner dans vos recherches.<br />
								Vous pourrez trouver ici et là nos coups de cœur, n’hésitez pas à nous solliciter…<br />
								Commerce de proximité, nous privilégions les relations humaines, <br />
								aimons échanger sur nos et vos dernières lectures…<br />
								Partage, échange, convivialité sont les maîtres mots.<br />
								<br />
								Parfois nous nous plaisons à recevoir un auteur pour une rencontre et dédicace.<br />
								Vous pouvez également nous rencontrer au cours de Salons, festivals.</p>
							</div>
						</div><!--id="texteAccueil"-->
					</div>
				</div> <!-- class="row" -->
			</div>
		</section> <!-- id="bdAccueil" class="parallax" -->

		<section id="bgBottomAccueil" class="parallax">
			<div class="container-fluid">
				<div id="adresseSection" class="row paddingTop blocText">
					<div id="divIframe" class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-2">
						<iframe id="localisation" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2867.2553174584305!2d5.125018715696843!3d44.05743623421457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ca76a77dea7fc5%3A0xefb2cbcce49b402f!2sLa+Gloire+De+Mon+P%C3%A8re+Mazan!5e0!3m2!1sfr!2sfr!4v1485903280277" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="row col-md-6">
						<div class="col-md-4 col-xs-5 col-xs-offset-1 text-center">
							<div id="adresse">
								<h2>Nous Trouver</h2>
								<address>
									<strong>La Gloire De Mon Père</strong><br>
									265 Avenue de l'Europe<br />
									84380 Mazan<br />
									<abbr title="Phone">Tel :</abbr> 04 90 30 94 99
								</address>
							</div>
						</div>
						<div class="col-md-4 col-xs-5 text-center">
							<div id="horaires">
								<h2>Horaires d'ouverture</h2>
								<p>du Mardi au <br />
								Samedi<br />
								de 9h à 12h30<br />
								et de 14h à 19h<br /></p>
							</div>
						</div>
						<div id="sectionFormContact" class="col-xs-8 col-xs-offset-2 col-md-7">
							<div id="formContact" class="blocText">
								<h2>Nous contacter</h2>
								<form method="GET" action="">
									<div class="form-group">
										<label for="nom">Nom</label>
										<input type="text" id="nom" class="form-control" name="nom" placeholder="Nom" />
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" id="email" class="form-control" name="email" placeholder="Votre adresse email" />
									</div>
									<div class="form-group">
										<label for="message">Message</label>
										<textarea name="message" id="message" class="form-control" cols="30" rows="5">Saisir votre message...</textarea>
									</div>
									<button>Envoyer le message</button>
								</form>
							</div> <!--  id="formContact" -->
						</div>
					</div>
				</div><!-- id="adresseSection" class="row" -->
			</div><!-- class="container-fluid"-->
		</section> <!-- id="bdBottomAccueil" class="parallax container-fluid" -->
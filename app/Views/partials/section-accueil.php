		<section id="carouselNouveautes" class="container-fluid">
			<ul class="carousel">
				<li class="items main-pos" id="1"><p>1</p></li>
				<li class="items right-pos" id="2">
				<img src="<?php echo $this->assetUrl('img/carouselTempo/livre_cetteTerrePromise.jpg')?>" alt="livre_cetteTerrePromise" />
				</li>
				<li class="items back-pos" id="3">
				<img src="<?php echo $this->assetUrl('img/carouselTempo/livre_histoireMondialeDeLaFrance.jpg')?>" alt="livre_histoireMondialeDeLaFrance" />
				</li>
				<li class="items back-pos" id="4">
				<img src="<?php echo $this->assetUrl('img/carouselTempo/livre_laDesobeissante.jpg')?>" alt="livre_laDesobeissante" />
				</li>
				<li class="items back-pos" id="5">
				<img src="<?php echo $this->assetUrl('img/carouselTempo/livre_toxique.jpg')?>" alt="livre_toxique" />
				</li>
			</ul>
			<span>
				<input type="button" value="Prev" id="prev">
				<input type="button" value="Next" id="next">
			</span>
		</section><!-- id="carouselNouveautes" class="container-fluid"-->

		<section id="bdAccueil" class="parallax container-fluid">
			<article id="texteAccueil" class="text-center parallaxRideau">
				<section id="ilEtaitUneFois">
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
				</section>
															
				<section id="vousAccompagner">
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
				</section>
			</article><!--id="texteAccueil" class="text-center parallaxRideau"-->
		</section><!--id="bdAccueil" class="parallax container-fluid"-->



		<section id="bdBottomAccueil" class="parallax container-fluid">
				<div id="adresseSection" class="row">
					<div class="col-xd-4 col-md-6">
						<h2>Nous Trouver :</h2>
						<iframe id="localisation" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2867.2553174584305!2d5.125018715696843!3d44.05743623421457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ca76a77dea7fc5%3A0xefb2cbcce49b402f!2sLa+Gloire+De+Mon+P%C3%A8re+Mazan!5e0!3m2!1sfr!2sfr!4v1485903280277" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-3 infoAdresseSection">
						<div id="adresse">
							<h3>Adresse :</h3>
							<address>
								<strong>La Gloire De Mon Père</strong><br>
								265 Avenue de l'Europe<br />
								84380 Mazan<br />
								<abbr title="Phone">Tel :</abbr> 04 90 30 94 99
							</address>
						</div>
					</div>
					<div class="col-md-3 infoAdresseSection">
						<div id="horaires">
							<h3>Horaires :</h3>
							<ul>
								<li>Lundi : 9h-12h</li>
								<li>Mardi à Vendredi : 9h-12h / 14h-18h</li>
								<li>Samedi : 9h - 18h</li>
								<li>Dimanche : Fermé</li>
							</ul>
						</div>
					</div>
				</div><!-- id="adresseSection" class="row" -->

				<div id="sectionVide">		
				</div>

				<div id="contactSection" class="row" >
					<div id="formContact" class="col-md-8">
						<h3>Nous contacter :</h3>
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
					</div>
				</div>
		</section> <!-- id="bdBottomAccueil" class="parallax container-fluid" -->
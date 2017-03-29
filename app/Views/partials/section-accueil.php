		<section class="container-fluid">
				<div class="row">
					<div id="carouselNouveautes" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
							<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
						</ol>
									
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
									<img src="<?php echo $this->assetUrl('img/carousel/DSC_0049.JPG'); ?>" alt="..." />
							</div>
							<div class="item ">
									<img src="<?php echo $this->assetUrl('img/carousel/DSC_0056.JPG'); ?>" alt="..." />
							</div>
							<div class="item ">
									<img src="<?php echo $this->assetUrl('img/carousel/DSC_0072.JPG'); ?>" alt="..." />
							</div>
						</div><!-- carousel-inner -->
					
						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						
					</div><!-- carousel-example-generic -->
				</div>
		</section><!-- id="carouselNouveautes"-->
			
		
		<section id="bdAccueil" class="parallax">
			<div class="container-fluid">
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
				</article><!--id="texteAccueil"-->
			</div> <!-- class="container-fluid"-->
		</section> <!--class="parallax" -->



		<div id="bdBottomAccueil" class="parallax">
			<section id="adresseSection" class="container-fluid">
				<div class="row">
					<div class="col-xd-4 col-lg-4 col-lg-push-2">
						<h2>Nous Trouver :</h2>
						<iframe id="localisation" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2867.2553174584305!2d5.125018715696843!3d44.05743623421457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ca76a77dea7fc5%3A0xefb2cbcce49b402f!2sLa+Gloire+De+Mon+P%C3%A8re+Mazan!5e0!3m2!1sfr!2sfr!4v1485903280277" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-lg-5 col-lg-push-4 infoAdresseSection">
						<div class="row">
							<div id="adresse">
								<h3>Adresse :</h3>
								<address>
									<strong>La Gloire De Mon Père</strong><br>
									265 Avenue de l'Europe<br />
									84380 Mazan<br />
									<abbr title="Phone">Tel :</abbr> 04 90 30 94 99
								</address>
							</div>
							<div id="horaire">
								<h3>Horaire :</h3>
								<ul>
									<li>Lundi : 9h-12h</li>
									<li>Mardi à Vendredi : 9h-12h / 14h-18h</li>
									<li>Samedi : 9h - 18h</li>
									<li>Dimanche : Fermé</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="sectionVide">		
			</section>

			<section id="contactSection">
				<div class="row">
					<div id="formContact" class="col-xd-8 col-lg-8 col-lg-push-2">
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
			</section>  <!-- section container-fluid-->
		</div>

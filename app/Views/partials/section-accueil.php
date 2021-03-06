		<section id="bgAccueil" class="parallax">
			<div id="nouveautes" class="container">
			
				<div class="row">
					<div class="col-centered">
						<div id="carouselNouveautes">
							<div class="blocText text-center">
								<h2>Nouveautés</h2>
							</div>
							<ul id="carouselNouveautesTrue" class="carousel">
							<?php
								$objetLivresModel = new \Model\LivresModel;

								$tabLigne = $objetLivresModel->findAll($orderBy = "dateParution", $orderDir = "DESC", $limit = 7);

								$i = 0;
								foreach ($tabLigne as $LigneCourante)
								{
									$i++;
									
									$id = $LigneCourante["id"];
									$titreLivre = $LigneCourante["titreLivre"];
									$id_auteur = $LigneCourante["id_auteur"];
									$id_editeur = $LigneCourante["id_editeur"];
									$id_collection = $LigneCourante["id_collection"];
									$id_genre = $LigneCourante["id_genre"];
									$id_sousgenre = $LigneCourante["id_sousgenre"];
									$dateParution = $LigneCourante["dateParution"];

									$dateParution = new DateTime($dateParution);
									$dateParution = $dateParution->format('d/m/Y');

									$isbn = $LigneCourante["isbn"];
									$id_format = $LigneCourante["id_format"];
									$id_presentation = $LigneCourante["id_presentation"];
									$nbPage = $LigneCourante["nbPage"];
									$poids = $LigneCourante["poids"];
									$dimensions = $LigneCourante["dimensions"];
									$resume = $LigneCourante["resume"];

									$couverture = "img/livres/";
									$couverture .= $LigneCourante["couverture"];

									$prix = $LigneCourante["prix"];
									$coupDeCoeur = $LigneCourante["coupDeCoeur"];
									$dateCrea = $LigneCourante["dateCrea"];

									$alt = "livre_";
									$alt .= $LigneCourante["titreLivre"];

									$objetView = new \W\View\Plates\PlatesExtensions;

									$objetAuteursModel = new \Model\AuteursModel;
									$auteur = $objetAuteursModel->find($id_auteur);

									$objetEditeursModel = new \Model\EditeursModel;
									$editeur = $objetEditeursModel->find($id_editeur);

									$objetCollectionsModel = new \Model\CollectionsModel;
									$collection = $objetCollectionsModel->find($id_collection);

									$objetGenresModel = new \Model\GenresModel;
									$genre = $objetGenresModel->find($id_genre);

									$objetSousgenresModel = new \Model\SousgenresModel;
									$sousgenre = $objetSousgenresModel->find($id_sousgenre);

									$objetFormatsModel = new \Model\FormatsModel;
									$format = $objetFormatsModel->find($id_format);

									$objetPresentationsModel = new \Model\PresentationsModel;
									$presentation = $objetPresentationsModel->find($id_presentation);

									if($i == 1)
									{
					?>
										<li class="items main-pos" id="<?php echo $i; ?>" >
											<img src="<?php	echo $this->assetUrl($couverture); ?>" alt="<?php echo $alt; ?>"  data-toggle="modal" data-target="#modal<?php echo "$id"; ?>" />
										</li>

										<div class="modal fade modalNouveautes" id="modal<?php echo "$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  	<div class="modal-dialog modal-lg" role="document">
										    	<div class="modal-content">
										      		<div class="modal-header">
										        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="crossClose" aria-hidden="true">&times;</span></button>
										        		<h3 class="modal-title" id="myModalLabel"><?php echo $titreLivre ?></h3>
										      		</div>
										      		<div class="modal-body">
														<img src='<?php	echo $objetView->assetUrl($couverture); ?>' alt='couverture' />
														<h3><span>Auteur : </span><?php echo $auteur["libelle"] ?></h3>
														<p><span>Editeur : </span><?php echo $editeur["libelle"] ?></p>
														<p><span>Collection : </span><?php echo $collection["libelle"] ?></p>
														<p><span>Genre : </span><?php echo $genre["libelle"] ?></p>
														<p><span>Sous-Genre : </span><?php echo $sousgenre["libelle"] ?></p>
														<p><span>Date de parution : </span><?php echo $dateParution ?></p>
														<p><span>ISBN : </span><?php echo $isbn ?></p>
														<p><span>Format : </span><?php echo $format["libelle"] ?></p>
														<p><span>Présentation : </span><?php echo $presentation["libelle"] ?></p>
														<p><span>Nombre de pages : </span><?php echo $nbPage ?></p>
														<p><span>Poids : </span><?php echo $poids ?> Kg</p>
														<p><span>dimension : </span><?php echo $dimensions ?></p>
														<p><span>Resume : </span><?php echo $resume ?></p>
														<p><span>Prix : </span><?php echo $prix ?> € TTC</p>
													</div>
											      	<div class="modal-footer">
											       		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											      	</div>
												</div>
										    </div>
										</div>
					<?php
									}
									else if($i == 2)
									{
					?>					
										<li class="items right-pos" id="<?php echo $i; ?>" >
											<img src="<?php	echo $this->assetUrl($couverture); ?>" alt="<?php echo $alt; ?>"  data-toggle="modal" data-target="#modal<?php echo "$id"; ?>" />
										</li>

										<div class="modal fade modalNouveautes" id="modal<?php echo "$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  	<div class="modal-dialog modal-lg" role="document">
										    	<div class="modal-content">
										      		<div class="modal-header">
										        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span  class="crossClose" aria-hidden="true">&times;</span></button>
										        		<h3 class="modal-title" id="myModalLabel"><?php echo $titreLivre ?></h3>
										      		</div>
										      		<div class="modal-body">
														<img src='<?php	echo $objetView->assetUrl($couverture); ?>' alt='couverture' />
														<h3><span>Auteur : </span><?php echo $auteur["libelle"] ?></h3>
														<p><span>Editeur : </span><?php echo $editeur["libelle"] ?></p>
														<p><span>Collection : </span><?php echo $collection["libelle"] ?></p>
														<p><span>Genre : </span><?php echo $genre["libelle"] ?></p>
														<p><span>Sous-Genre : </span><?php echo $sousgenre["libelle"] ?></p>
														<p><span>Date de parution : </span><?php echo $dateParution ?></p>
														<p><span>ISBN : </span><?php echo $isbn ?></p>
														<p><span>Format : </span><?php echo $format["libelle"] ?></p>
														<p><span>Présentation : </span><?php echo $presentation["libelle"] ?></p>
														<p><span>Nombre de pages : </span><?php echo $nbPage ?></p>
														<p><span>Poids : </span><?php echo $poids ?> Kg</p>
														<p><span>dimension : </span><?php echo $dimensions ?></p>
														<p><span>Resume : </span><?php echo $resume ?></p>
														<p><span>Prix : </span><?php echo $prix ?> € TTC</p>
													</div>
											      	<div class="modal-footer">
											       		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											      	</div>
												</div>
										    </div>
										</div>
					<?php	
									}
									else if($i == 7)
									{
					?>
										<li class="items left-pos" id="<?php echo $i; ?>" >
											<img src="<?php	echo $this->assetUrl($couverture); ?>" alt="<?php echo $alt; ?>"  data-toggle="modal" data-target="#modal<?php echo "$id"; ?>" />
										</li>

										<div class="modal fade modalNouveautes" id="modal<?php echo "$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  	<div class="modal-dialog modal-lg" role="document">
										    	<div class="modal-content">
										      		<div class="modal-header">
										        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span  class="crossClose" aria-hidden="true">&times;</span></button>
										        		<h3 class="modal-title" id="myModalLabel"><?php echo $titreLivre ?></h3>
										      		</div>
										      		<div class="modal-body">
														<img src='<?php	echo $objetView->assetUrl($couverture); ?>' alt='couverture' />
														<h3><span>Auteur : </span><?php echo $auteur["libelle"] ?></h3>
														<p><span>Editeur : </span><?php echo $editeur["libelle"] ?></p>
														<p><span>Collection : </span><?php echo $collection["libelle"] ?></p>
														<p><span>Genre : </span><?php echo $genre["libelle"] ?></p>
														<p><span>Sous-Genre : </span><?php echo $sousgenre["libelle"] ?></p>
														<p><span>Date de parution : </span><?php echo $dateParution ?></p>
														<p><span>ISBN : </span><?php echo $isbn ?></p>
														<p><span>Format : </span><?php echo $format["libelle"] ?></p>
														<p><span>Présentation : </span><?php echo $presentation["libelle"] ?></p>
														<p><span>Nombre de pages : </span><?php echo $nbPage ?></p>
														<p><span>Poids : </span><?php echo $poids ?> Kg</p>
														<p><span>dimension : </span><?php echo $dimensions ?></p>
														<p><span>Resume : </span><?php echo $resume ?></p>
														<p><span>Prix : </span><?php echo $prix ?> € TTC</p>
													</div>
											      	<div class="modal-footer">
											       		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											      	</div>
												</div>
										    </div>
										</div>
					<?php
									}
									else
									{
					?>
										<li class="items back-pos" id="<?php echo $i; ?>" >
										<img src="<?php	echo $this->assetUrl($couverture); ?>" alt="<?php echo $alt; ?>"  data-toggle="modal" data-target="#modal<?php echo "$id"; ?>" />
									</li>

									<div class="modal fade modalNouveautes" id="modal<?php echo "$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  	<div class="modal-dialog modal-lg" role="document">
									    	<div class="modal-content">
									      		<div class="modal-header">
									        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="crossClose" aria-hidden="true">&times;</span></button>
									        		<h3 class="modal-title" id="myModalLabel"><?php echo $titreLivre ?></h3>
									      		</div>
									      		<div class="modal-body">
													<img src='<?php	echo $objetView->assetUrl($couverture); ?>' alt='couverture' />
													<h3><span>Auteur : </span><?php echo $auteur["libelle"] ?></h3>
													<p><span>Editeur : </span><?php echo $editeur["libelle"] ?></p>
													<p><span>Collection : </span><?php echo $collection["libelle"] ?></p>
													<p><span>Genre : </span><?php echo $genre["libelle"] ?></p>
													<p><span>Sous-Genre : </span><?php echo $sousgenre["libelle"] ?></p>
													<p><span>Date de parution : </span><?php echo $dateParution ?></p>
													<p><span>ISBN : </span><?php echo $isbn ?></p>
													<p><span>Format : </span><?php echo $format["libelle"] ?></p>
													<p><span>Présentation : </span><?php echo $presentation["libelle"] ?></p>
													<p><span>Nombre de pages : </span><?php echo $nbPage ?></p>
													<p><span>Poids : </span><?php echo $poids ?> Kg</p>
													<p><span>dimension : </span><?php echo $dimensions ?></p>
													<p><span>Resume : </span><?php echo $resume ?></p>
													<p><span>Prix : </span><?php echo $prix ?> € TTC</p>
												</div>
										      	<div class="modal-footer">
										       		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										      	</div>
											</div>
									    </div>
									</div>
					<?php
									}
								}
					?>	

							</ul>
							<!-- <span>
							  <input type="button" value="Prev" id="prev">
							  <input type="button" value="Next" id="next">
							</span> -->
						</div><!-- id="carouselNouveautes" -->
					</div> 
				</div> <!-- class="row" -->
				<div id="buttonCarousel" class="row text-center">
					<input type="button" value="Prev" id="prev">
					<input type="button" value="Next" id="next">
				</div>
			</div><!--id="nouveautes"-->
			<div class="container">
				<div class="row parallaxRideau">
					<div class="col-xs-10 col-sm-8 col-md-8 col-centered">
						<div class="text-center blocText">
							<div id="ilEtaitUneFois">
								<h2>Il était une fois...</h2>
								<p>
									Les portes de la librairie, "A la gloire de mon père", se sont ouvertes, la première<br />
								fois, le 18 avril 2009 grâce à la détermination de sa propriétaire Eve Arnoux.<br />
								En dépit d’un contexte peu favorable face à une concurrence non spécialisée<br />
								présente sur Internet, la preuve est faite qu’une librairie généraliste<br />
								indépendante a su trouver sa place au sein d’un petit village du Vaucluse.<br />
								
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
				<div id="adresseSection" class="row blocText">
					<div id="divIframe" class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-1">
						<iframe id="localisation" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2867.2553174584305!2d5.125018715696843!3d44.05743623421457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ca76a77dea7fc5%3A0xefb2cbcce49b402f!2sLa+Gloire+De+Mon+P%C3%A8re+Mazan!5e0!3m2!1sfr!2sfr!4v1485903280277" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6">
						<div class="col-md-4 col-xs-5 col-xs-offset-1 text-center">
							<div id="adresse">
								<h2>Nous Trouver</h2>
								<address>
									<strong>La Gloire De Mon Père</strong><br>
									265 Avenue de l'Europe<br />
									84380 Mazan<br />
									<span>04 90 30 94 99</span>
								</address>
							</div>
						</div>
						<div class="col-xs-5 col-xs-offset-1 col-md-4 col-md-offset-2 text-center">
							<div id="horaires">
								<h2>Horaires d'ouverture</h2>
								<p>du Mardi au <br />
								Samedi<br />
								de <span>9h</span> à <span>12h30</span><br />
								et de <span>14h</span> à <span>19h</span><br /></p>
							</div>
						</div>
						<div id="sectionFormContact" class="col-xs-8 col-xs-offset-2 col-md-7">
							<div id="formContact" class="blocText">
								<h2>Nous contacter</h2>
								<form method="POST" action="">
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
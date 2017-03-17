
    </main>

    <footer class="container-fluid">
      <nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php"><img src="./assets/img/logo-librairie.png" alt="logo-librairie"></a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                  <div class=row>
                    <ul class="nav navbar-nav">
                      <li class="<?php afficherVarGlob('activeAccueil'); ?>"><a href="index.php">Accueil</a></li>
                      <li class="<?php afficherVarGlob('activeLibrairie'); ?>"><a href="librairie.php">Librairie</a></li>
                      <li class="<?php afficherVarGlob('activeCoupsDeCoeur'); ?>"><a href="coups-de-coeur.php">Nos Coups de Coeur</a></li>
                      <li class="<?php afficherVarGlob('activePapeterie'); ?>"><a href="papeterie.php">Papeterie</a></li>
                      <li class="<?php afficherVarGlob('activeLoisirsEtJeux'); ?>"><a href="loisirs-jeux.php">Loisirs et Jeux</a></li>
                      <li class="<?php afficherVarGlob('activeEvenementsAteliers'); ?>"><a href="evenements-ateliers.php">Evénements/Ateliers Créatifs</a></li>
                      <li class="<?php afficherVarGlob('activeNousContacter'); ?>"><a href="nous-contacter.php">Nous Contacter</a></li>
<?php // TEST POUR SAVOIR SI ON AFFICHE LA PAGE OU NON
// ON VA LIRE L'INFO MEMORISEE DANS LA SESSION
$niveau = lireSession("niveauUtilisateur", 0);
                if ($niveau >= 8)
{
        echo
<<<CODEHTML
<li class="afficherVarGlob('activeAdmin')"><a href="admin.php">Administration</a></li>
CODEHTML;
     
}
?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                      <li class="<?php afficherVarGlob('activeInscription'); ?>"><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
                      <li class="<?php afficherVarGlob('activeConnexion'); ?>"><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                      <li class="<?php afficherVarGlob('activeDeconnexion'); ?>"><a href="deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
                    </ul>
                  </div>
                </div><!-- /.navbar-collapse -->
                <div class=row class="col-md-12" id="copyright">
                    <p>&copy; A la gloire de mon père 2017</p>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </nav>        
    </footer>
     <script type="text/javascript" src="assets/js/script.js"></script>
    </body>
</html>
</main>
<footer>
    <!-- <div id="scrollUp" class="col-xs-1 col-xs-offset-10"> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 text-center blocText">
                <p class="blocText"><span>&copy;</span> A la gloire de mon père <span>2017</span></p>
            </div>
            <div id="scrollUp" class="col-xs-1">
                <span class="glyphicon glyphicon-menu-up"></span>
            </div>               
        </div><!-- class="class="row" -->
    </div> <!--class="container-fluid" -->
</footer>

            <!--On construit l'url à partir du nom de la route grâce à l'objet $this
            qui instancie le moteur plates (utilisé par le frameworl W)-->

            <!-- Script Ajax -->
            <script type="text/javascript">
<?php
$urlRouteAjax = $this->url("ajax_sousgenres");

// Astuce: 
// JE CREE DU CODE JS AVEC PHP
// POUR TRANSMETTRE DES INFOS DEPUIS PHP VERS JS
echo
<<<CODEJS

var urlRouteAjax = "$urlRouteAjax";

CODEJS;

?>
            </script>

            <!-- Chargement de la bibliothèque jquery minified pour Javascript -->
            <script type="text/javascript" src="<?php echo $this->assetUrl('js/jquery-3.2.0.min.js')?>"></script>

            <!-- Chargement du Script associé au Framework Bootstrap -->
            <script type="text/javascript" src="<?php echo $this->assetUrl('js/bootstrap.min.js')?>"></script>

            <!-- Fonctionnalité js date picker dans les formulaires -->       
            <script type="text/javascript" src="<?php echo $this->assetUrl('js/jquery-ui.min.js')?>"></script>

            <!-- Fonctionnalité js time picker dans les formulaires -->
            <script type="text/javascript" src="<?php echo $this->assetUrl('js/jquery.timepicker.min.js')?>"></script>

            <!-- Prise en charge de LESS -->
            <script type="text/javascript" src="<?php echo $this->assetUrl('js/less.min.js')?>"></script>


            <!-- Chargement du script Match Height pour gérer les hauteurs de colonnes différentes-->
            <script type="text/javascript" src="<?php echo $this->assetUrl('js/jquery.matchHeight.js')?>"></script>

            <!-- Chargement du script propre au projet-->
            <script type="text/javascript" src="<?php echo $this->assetUrl('js/script.js')?>"></script>

    </body>
</html>
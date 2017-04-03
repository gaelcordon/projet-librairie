</main>
<footer>
    <nav class="navbar">
        <!-- On récupère les liens de navigations pour les réduire en responsive design -->
            <ul class="nav navbar-nav col-centered">
                <li>&copy; A la gloire de mon père 2017</li>
            </ul><!-- class="nav navbar-nav" -->
    </nav> <!-- class="navbar navbar-default navbar-fixed-top" -->
</footer>

            <!--On construit l'url à partir du nom de la route grâce à l'objet $this
            qui instancie le moteur plates (utilisé par le frameworl W)-->


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
            <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/9487/jquery.matchHeight-min.js"></script>

            <!-- Chargement du script propre au projet-->
            <script type="text/javascript" src="<?php echo $this->assetUrl('js/script.js')?>"></script>
    </body>
</html>
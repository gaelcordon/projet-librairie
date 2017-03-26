            <div class="col-sm-1 sidenav">
                <div class="deco">

                </div>
                <div class="deco">

                </div>
            </div>
        </div> <!-- div class="row"-->
    </div> <!-- class="container-fluid"-->
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4>&copy; A la gloire de mon père 2017</h4>
            </div>
            <div class="col-sm-6">
                <a href="#0" class="cd-top">Top</a>
            </div>    
        </div> <!--class="row" -->
    </div> <!--class="container" -->
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

            <!-- Fonctionnalité pour Back To top Button -->
            <script type="text/javascript" src="<?php echo $this->assetUrl('js/dyscrollup.min.js')?>"></script>

            <!-- Prise en charge de LESS -->
            <script type="text/javascript" src="<?php echo $this->assetUrl('js/less.min.js')?>"></script>

            <!-- Chargement du script propre au projet-->
            <script type="text/javascript" src="<?php echo $this->assetUrl('js/script.js')?>"></script>
    </body>
</html>
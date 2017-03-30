// DEBUG 
// alert("CHARGE");

// IL FAUT AVOIR CHARGE LE SCRIPT DE JQUERY AVANT!
// POUR UTILISER JQUERY
/* global $ */

$(function(){
    // CE CODE SERA APPELE PAR JQUERY QUAND LA PAGE SERA PRETE
    
    // FORMULAIRE DE CREATION D'UN NOUVEAU MEMBRE
    // QUAND LE VISITEUR VA CLIQUER SUR LE BOUTON "Ajouter cet utilisateur"
    // JE VAIS VERIFIER SI LES 2 PASSWORDS SONT IDENTIQUES
    // ALORS ON ENVOIE LE FORMULAIRE
    // SINON, ON AFFICHE UN MESSAGE D'ERREUR

    $("#formUser").on("submit", function(event){
        // DEBUG
        alert("TU AS CLIQUE");
        // RECUPERER LES VALEURS DES 2 CHAMPS password1 et password2
        var password1 = $("#formUser input[name=password1]").val();
        var password2 = $("#formUser input[name=password2]").val();
        if ((password1 !== "") && (password1 === password2))
        {
            // OK
            // C'EST LE FORMULAIRE PEUT POURSUIVRE NORMALEMENT
            // ET VA ENVOYER LES INFOS SUR LE SERVEUR WEB
            // => TRAITEMENT EN PHP
        }
        else
        {
            // KO
            // BLOQUER L'ENVOI DU FORMULAIRE
            event.preventDefault();
            
            // AJOUTER LA CLASSE erreur AU CHAMP INPUT password1 et password2
            // https://api.jquery.com/category/selectors/
            $("#formUser input[name^=password]").addClass("erreur");
        }
    });

    // Fonction pour faire apparître un calendrier
     $('.datePicker').datepicker();

    // Fonction pour faire apparaître un choix horaire
     $('.timePicker').timepicker();

     // Fonction pour faire afficher les formulaires en cliquant sur les boutons

     $('#addBook').click(function(){
        $('#formBook').show("fast");
        $('#formEvent').hide();
        $('#formUser').hide(); 
    });

    $('#addEvent').click(function(){
        $('#formEvent').show("fast");
        $('#formBook').hide();
        $('#formUser').hide();
    });

    $('#addUser').click(function(){
        $('#formUser').show("fast");
        $('#formEvent').hide();
        $('#formBook').hide();
    });

    $('#buttonEvent').click(function(){
        $('.afficheEvent').show("fast");
        $('.afficheAtelier').hide();
    });

    $('#buttonAtelier').click(function(){
        $('.afficheAtelier').show("fast");
        $('.afficheEvent').hide();
    });

    $('#buttonAnim').click(function(){
        $('.afficheAtelier').show("fast");
        $('.afficheEvent').show("fast");
    });

    // Effet Parallax

    $(window).scroll(function(e){
        parallax();
    });

    function parallax(){
        var scrolled = $(window).scrollTop();
        $('.parallaxBgAccueil').css('bottom',-(scrolled*0.1)+'px');
    }

    // Modal

    /*$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
    })*/

    //Redimensionnement hauteur des colonnes bootstrap matchHeight()
    
    $(function() {
    $('#espaceAdulte, #espaceJeunesse, #espacePapeterie').matchHeight();
    });

    // Carousel

        //slideshow style interval
        var autoSwap = setInterval( swap,3500);

        //pause slideshow and reinstantiate on mouseout
        $('ul, span').hover(
        function () {
            clearInterval(autoSwap);
        }, 
        function () {
        autoSwap = setInterval( swap,3500);
        });

        //global variables
        var items = [];
        var startItem = 1;
        var position = 0;
        var itemCount = $('.carousel li.items').length;
        var leftpos = itemCount;
        var resetCount = itemCount;

        //unused: gather text inside items class
        $('li.items').each(function(index) {
            items[index] = $(this).text();
        });

        //swap images function
        function swap(action) {
        var direction = action;
        
        //moving carousel backwards
        if(direction == 'counter-clockwise') {
            var leftitem = $('.left-pos').attr('id') - 1;
            if(leftitem == 0) {
            leftitem = itemCount;
            }
            
            $('.right-pos').removeClass('right-pos').addClass('back-pos');
            $('.main-pos').removeClass('main-pos').addClass('right-pos');
            $('.left-pos').removeClass('left-pos').addClass('main-pos');
            $('#'+leftitem+'').removeClass('back-pos').addClass('left-pos');
            
            startItem--;
            if(startItem < 1) {
            startItem = itemCount;
            }
        }
        
        //moving carousel forward
        if(direction == 'clockwise' || direction == '' || direction == null ) {
            function pos(positionvalue) {
            if(positionvalue != 'leftposition') {
                //increment image list id
                position++;
                
                //if final result is greater than image count, reset position.
                if((startItem+position) > resetCount) {
                position = 1-startItem;
                }
            }
            
            //setting the left positioned item
            if(positionvalue == 'leftposition') {
                //left positioned image should always be one left than main positioned image.
                position = startItem - 1;
            
                //reset last image in list to left position if first image is in main position
                if(position < 1) {
                position = itemCount;
                }
            }
        
            return position;
            }  
        
        $('#'+ startItem +'').removeClass('main-pos').addClass('left-pos');
        $('#'+ (startItem+pos()) +'').removeClass('right-pos').addClass('main-pos');
        $('#'+ (startItem+pos()) +'').removeClass('back-pos').addClass('right-pos');
        $('#'+ pos('leftposition') +'').removeClass('left-pos').addClass('back-pos');

            startItem++;
            position=0;
            if(startItem > itemCount) {
            startItem = 1;
            }
        }
        }

        //next button click function
        $('#next').click(function() {
        swap('clockwise');
        });

        //prev button click function
        $('#prev').click(function() {
        swap('counter-clockwise');
        });

        //if any visible items are clicked
        $('li').click(function() {
        if($(this).attr('class') == 'items left-pos') {
            swap('counter-clockwise'); 
        }
        else {
            swap('clockwise'); 
        }
        });

});










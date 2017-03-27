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

});


// Fonction pour faire apparître un calendrier
$(function() {
    $('.datePicker').datepicker();

});

// Fonction pour faire apparaître un choix horaire
$(function() {
    $('.timePicker').timepicker();

});


// Effet Parallax

$(window).scroll(function(e){
    parallax();
});

function parallax(){
    var scrolled = $(window).scrollTop();
    $('.parallaxBgAccueil').css('bottom',-(scrolled*0.1)+'px');
}
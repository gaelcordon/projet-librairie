// DEBUG 
// alert("CHARGE");

// IL FAUT AVOIR CHARGE LE SCRIPT DE JQUERY AVANT!
// POUR UTILISER JQUERY
/* global $ */

/*

$(function(){
    // CE CODE SERA APPELE PAR JQUERY QUAND LA PAGE SERA PRETE
    
    // FORMULAIRE D'INSCRIPTION
    // QUAND LE VISITEUR VA CLIQUER SUR LE BOUTON "INSCRIPTION"
    // JE VAIS VERIFIER SI LES 2 PASSWORDS SONT IDENTIQUES
    // ALORS ON ENVOIE LE FORMULAIRE
    // SINON, ON AFFICHE UN MESSAGE D'ERREUR
    $("#formInscription").on("submit", function(event){
        // DEBUG
        //alert("TU AS CLIQUE");
        // RECUPERER LES VALEURS DES 2 CHAMPS password1 et password2
        // https://api.jquery.com/val/
        var password1 = $("#formInscription input[name=password1]").val();
        var password2 = $("#formInscription input[name=password2]").val();
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
            $("#formInscription input[name^=password]").addClass("erreur");
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

// au chargement de la page
$(function(){
    //modification du select categories
    $('#genre').on('change', function(){
        //appel du script ajax
        $.ajax({
            url: './assets/js/recupGenre.php',
            method: 'get', 
            data: {GenreJson: $(this).val()}, 
            dataType: 'json',
            success: function(data){
                console.log(data);
                // on vide le menu déroulant avant de le remplir avec la bouche
                    $('#sgenre').empty(); 
                //boucle foreach en JS
                $.each(data, function(index, value)	
                {
                    //on ajoute l'option dans le menu déroulant
                    $('#sgenre').append('<option value="'
                                                            +value.id
                                                            +'">'
                                                            +value.libelle
                                                            +'</option>'); 
                }); //fin du $.each
				} //fin du success
			}); // fin du $.ajax
		}); //fin du 'on change' sur genre
}); //fin du ready


*/

console.log("(╯°□°）╯︵ ┻━┻");
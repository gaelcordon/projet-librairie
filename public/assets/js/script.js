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
})

$('#buttonAtelier').click(function(){
    $('.afficheAtelier').show("fast");
    $('.afficheEvent').hide();
})

$('#buttonAnim').click(function(){
    $('.afficheAtelier').show("fast");
    $('.afficheEvent').show("fast");
})


/*
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
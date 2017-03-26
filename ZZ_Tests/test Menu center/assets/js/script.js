$(function(){

// Menu Toggle à partir de l'icone accueil livre
$( ".menuAccueil" ).hide();

$( ".logoAccueil" ).on( "click", function()
	{
			$( ".menuAccueil" ).stop().fadeToggle( "fast" );
	});

 });

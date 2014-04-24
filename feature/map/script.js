function datepickerLoader() {

	$('#datepicker').datepicker({
		dateFormat : 'yy-mm-dd',
		minDate : 0,
		regional : 'fr'
	});


/* French initialisation for the jQuery UI date picker plugin. */
/* Written by Keith Wood (kbwood{at}iinet.com.au),
              Stéphane Nahmani (sholby@sholby.net),
              Stéphane Raimbault <stephane.raimbault@gmail.com> */

	$.datepicker.regional['fr'] = {
		closeText: 'Fermer',
		prevText: 'Précédent',
		nextText: 'Suivant',
		currentText: 'Aujourd\'hui',
		monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin',
		'Juillet','Aout','Septembre','Octobre','Novembre','Décembre'],
		monthNamesShort: ['Janv.','Fév.','Mars','Avril','Mai','Juin',
		'Juil.','Août','Sept.','Oct.','Nov.','Déc.'],
		dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
		dayNamesShort: ['Dim.','Lun.','Mar.','Mer.','Jeu.','Ven.','Sam.'],
		dayNamesMin: ['D','L','M','M','J','V','S'],
		weekHeader: 'Sem.',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['fr']);
}

/*
 *Fonction d'ajout ou suppression de choix lors 
 *de la création d'un sondage
 */
function manageChoices(input)
{


	switch(input.className)
	{

		case 'orange_button':			

			// Ajout d'un champ de choix
			
			choices = document.getElementById("choices");

			choice = document.createElement("div");

			//Créaion de l'input
			var input=document.createElement("input");
			input.setAttribute("id","");
			input.className = "text_edit input_choice";
			input.setAttribute("type","text");
			input.setAttribute("name","choices[]");
			
			var label = document.createElement("label");
			label.setAttribute("for","");
			label.className = "text lbl_choice";

			var a = document.createElement("a");
			a.className = "grey_button"
			a.setAttribute("title","Supprimer");
			a.setAttribute("type","button");
			a.setAttribute("onclick","manageChoices(this);");
			a.innerText=" x ";

			//Création du bouton
			var button = document.createElement("button");
			button.innerText = "V";
			button.className ="valid";

			choice.className = 'choice';
			choice.appendChild(label);
			choice.appendChild(input);
			choice.appendChild(a);
			choice.appendChild(button);

			choices.appendChild(choice);
			createAutocompletion(input);
			
		break;

		case 'grey_button':

			// Suppression du champ de choix
			
			if(document.getElementsByName("choices[]").length > 2)
			{
				choices = input.parentNode.parentNode;
				choices.removeChild(input.parentNode);
				//Correction d'un bug mineur : children au lieu de childNote 
				var numero = input.parentNode.children[1].getAttribute("id");
				alert(numero);
				var numero = input.parentNode.children[1].getAttribute("id");				
				numero = numero.replace("choix","");
				numero = parseInt(numero);
				deleteMarkers(numero);
			}

		break;

		default:
			alert('error');

	}




	// Reset des label
	lbl_choice = document.getElementsByClassName('lbl_choice');
	input_choice = document.getElementsByClassName('input_choice');
	valid_choice = document.getElementsByClassName('valid');
	for(i = 1; i <= lbl_choice.length; i++)
	{
	   lbl_choice.item(i-1).innerHTML = "Choix "+i+'<span class="asterisc"> * </span>';
	   lbl_choice.item(i-1).setAttribute('for', 'choix'+i);

	   input_choice.item(i-1).setAttribute('id', 'choix'+i);
	   //Affectation de la fonction à appeler 
	   valid_choice.item(i-1).setAttribute("onclick","codeAddress(choix"+i+");");
	}

	if(document.getElementsByName("choices[]").length === 2)
	{
		document.getElementsByName("choices[]").css('cursor', 'no-drop');
	}
	else
	{
	   document.getElementsByName("choices[]").css('cursor', 'pointer');
	}


	initBlur();

}

/*
 *Fonction de gestion de la connexion
 *Lors de la création d'un sondage et que le créateur
 *ne se soit pas connecté, ou n'ait pas de compte */
function manageConnectionForm(radio) {

	switch(radio.id) {
		
		//Si possède déjà un compte
		case 'registered':
			$('.infos_user').css({display:'none'});
			$('#pwd_user').css({display:'inline-block'});
			document.getElementById('pwd_user').previousSibling.previousSibling.style.display = 'inline-block';
		break;
		
		//Si première utilisation
		case 'not_registered':
			$('.infos_user').css({display:'inline-block'});
			$('.info_box').css({display:'block'});
			$("#pwd_user").css({display:'none'});
			document.getElementById('pwd_user').previousSibling.previousSibling.style.display = 'none';
		break;

		default:
			alert('Erreur');


	}
}

function createAutocompletion(input){
	autocomplete = new google.maps.places.Autocomplete(input, options);
 	
  	google.maps.event.addListener(autocomplete, 'place_changed', function() {
   	var place = autocomplete.getPlace();
   	if (place.geometry.viewport) {
    	geomap.fitBounds(place.geometry.viewport);
   	} else {
      	geomap.setCenter(place.geometry.location);
      	geomap.setZoom(17);
   	}
	});
}

//fonction qui appelle l'ajout du marqueur en passant la recherche(autocomplétion) en paramètre et en gérant également le zoom
function codeAddress(idAddress) {
 	var address = document.getElementById(idAddress.id).value;
  geocoder.geocode( { 'address': address}, function(resultat, status) {
    if (status == google.maps.GeocoderStatus.OK) {
     addMarker(resultat);
     map.fitBounds(zonemarqueurs);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

// ajoute le marqueur
function addMarker(resultat){	
	for(var j = 0;j<markers.length;j++){
		if(markers[j].position.A == resultat[0].geometry.location.A && markers[j].position.k == resultat[0].geometry.location.k )
			boolMarker = true;
	}
	if(boolMarker == false){
 	 	var marker = new google.maps.Marker({
    		position: resultat[0].geometry.location,
    		map: map,
    		draggable:true,
    		animation: google.maps.Animation.DROP
  		});
  		markers.push(marker);
  		posmarkers.push(marker.getPosition());
  		zonemarqueurs.extend(marker.getPosition());  
  	}
  	boolMarker = false;
}


function deleteMarkers(numero){	  
   
    if(markers.length > 0 ){
    	markers[numero-1].setMap(null);
		markers.splice(numero-1,1);
		posmarkers.splice(numero-1,1);
		var zonemarqueurs = new google.maps.LatLngBounds();
    	for (var i =0; i <markers.length;i++){
      		zonemarqueurs.extend(markers[i].getPosition());
    	}
    	map.fitBounds(zonemarqueurs);
    	if(markers.length == 0 ){
    		markers = [];
  			posmarkers = [];
  			zonemarqueurs = new google.maps.LatLngBounds();
    		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    	}  
    }
}
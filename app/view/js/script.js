function datepickerLoader() {

	$('#datepicker').datepicker({
		dateFormat : 'yy-mm-dd',
		minDate : 0,
		regional : 'fr'
	});


/* French initialisation for the jQuery UI date picker plugin. */
/* Written by Keith Wood (kbwood{at}iinet.com.au),
              StÃ©phane Nahmani (sholby@sholby.net),
              StÃ©phane Raimbault <stephane.raimbault@gmail.com> */

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

function manageChoices(input)
{


	switch(input.className)
	{

		case 'orange_button':


			// Le choix selectionné passe en grisé		

			//input.className = 'grey_button';
			//input.innerHTML = 'x';
			

			// Ajout d'un champ de choix

			choices = document.getElementById("choices");

			choice = document.createElement("div");
			choice.className = 'choice';
			choice.innerHTML =	'<label for="" class="lbl_choice text" ></label>' 
								+' <input class="text_edit input_choice" id="" type="text" name="choices[]" /> '
							  +	'<a class="grey_button" type="button" onclick="manageChoices(this);">x</a>';
			
			choices.appendChild(choice);
			
		break;

		case 'grey_button':

			// Suppression du champ de choix

			if($('#choices .choice').length > 1)
			{
				choices = input.parentNode.parentNode;
				choices.removeChild(input.parentNode);
			}

		break;

		default:
			alert('error');

	}


	// Reset des label
	lbl_choice = document.getElementsByClassName('lbl_choice');
	input_choice = document.getElementsByClassName('input_choice');
	for(i = 1; i <= lbl_choice.length; i++)
	{
	   lbl_choice.item(i-1).innerHTML = "Choix "+i;
	   lbl_choice.item(i-1).setAttribute('for', 'choix'+i);

	   input_choice.item(i-1).setAttribute('id', 'choix'+i);
	}

	if($('#choices .choice').length == 1)
	{
		$('#choices .choice:first .grey_button').css('cursor', 'no-drop');
	}
	else
	{
	   $('#choices .choice:first .grey_button').css('cursor', 'pointer');
	}


	initBlur();

}


function manageConnectionForm(radio) {

	switch(radio.id) {

		case 'registered':
			$('.infos_user').css({display:'none'});
			$('#pwd_user').css({display:'inline-block'});
			document.getElementById('pwd_user').previousSibling.previousSibling.style.display = 'inline-block';
		break;

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
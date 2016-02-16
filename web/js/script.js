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
function manageChoices(input,type)
{

	switch(input.className)
	{

		case 'btn btn-default orange_button add_choice_button':			

			// Ajout d'un champ de choix
			
			choices = document.getElementById("choices");

			choice = document.createElement("div");
			choice.className = 'choice';
			switch(type){
				case 'c1':
					choice.innerHTML =	'<label for="" class="lbl_choice text" ></label>' 
								+' <input class="text_edit input_choice" id="" required="required" type="text" name="choices[]" value="" /> '
							  +	'<a class="btn btn-default grey_button" title="Supprimer" type="button" onclick="manageChoices(this,\''+type+'\');">x</a>';
					break;
				case 'c2':
					choice.innerHTML =	'<label for="" class="lbl_choice text" ></label>' 
								+' <input class="text_edit input_choice" required="required" id="" type="date" name="choices[]" /> '
							  +	'<a class="btn btn-default grey_button" title="Supprimer" type="button" onclick="manageChoices(this,\''+type+'\');">x</a>';
					break;
				case 'c3':
					choice.innerHTML =	'<label for="" class="lbl_choice text" ></label>' 
								+' <input class="text_edit input_choice" id="" type="text" name="choices[]" required="required" value="" /> '
							  +	'<a class="btn btn-default grey_button" title="Supprimer" type="button" onclick="manageChoices(this,\''+type+'\');">x</a>';
					break;
				default:
					choice.innerHTML =	'<label for="" class="lbl_choice text" ></label>' 
								+' <input class="text_edit input_choice" id="" type="text" name="choices[]" value="" /> '
							  +	'<a class="btn btn-default grey_button" title="Supprimer" type="button" onclick="manageChoices(this,\''+type+'\');">x</a>';
					break;
			}
			
			choices.appendChild(choice);
			
		break;

		case 'btn btn-default grey_button':

			// Suppression du champ de choix
			
			if(document.getElementsByName("choices[]").length > 2)
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
	   lbl_choice.item(i-1).innerHTML = "Choix "+i+'<span class="asterisc"> *</span>';
	   lbl_choice.item(i-1).setAttribute('for', 'choix'+i);

	   input_choice.item(i-1).setAttribute('id', 'choix'+i);
	}

	if(document.getElementsByName("choices[]").length === 2)
	{
		document.getElementsByName("choices[]").style.cursor =no-drop;
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
 *ne se soit pas connecté, ou n'ait pas de compte
 */
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
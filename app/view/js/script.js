

function manageChoices(input)
{


	switch(input.className)
	{

		case 'orange_button':


			// Le choix selectionné passe en grisé		

			input.className = 'grey_button';
			input.value = 'x';
			

			// Ajout d'un champ de choix

			choices = input.parentNode.parentNode;

			choice = document.createElement("div");
			choice.className = 'choice';
			choice.innerHTML = '<input class="text_edit" type="text" name="choices[]" placeholder="" /> '
							  +'<input class="orange_button" type="button" onclick="manageChoices(this);" value="+" />';
			
			choices.appendChild(choice);
			
		break;

		case 'grey_button':

			// Suppression du champ de choix

			choices = input.parentNode.parentNode;
			choices.removeChild(input.parentNode);

		break;

		default:
			alert('error');

	}


	// Reset des placeholder
	choices = document.getElementsByName('choices[]');

	for(i = 1; i <= choices.length; i++)
	{
	   choices.item(i-1).setAttribute('placeholder', "Choix "+i);
	}

}
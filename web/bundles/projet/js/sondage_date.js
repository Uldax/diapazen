/*
 *Fonction d'ajout ou suppression de choix lors
 *de la création d'un sondage
 */
function manageChoices(input) {


    switch (input.className) {

        case 'btn btn-default orange_button add_choice_button':

            // Ajout d'un champ de choix

            choices = document.getElementById("choices");

            choice = document.createElement("div");

            //Création de l'input
            var input = document.createElement("input");
            input.className = " text_edit input_choice datepicker";
            input.setAttribute("readonly", "true");
            input.setAttribute("name", "choices[]");

            var label = document.createElement("label");
            label.setAttribute("for", "");
            label.className = " text lbl_choice datepick";

            var a = document.createElement("a");
            a.className = "btn btn-default grey_button";
            a.setAttribute("title", "Supprimer");
            a.setAttribute("type", "button");
            a.setAttribute("onclick", "manageChoices(this);");
            a.innerText = "x";

            //Création du bouton
            choice.className = 'choice';
            choice.appendChild(label);
            choice.appendChild(input);
            choice.appendChild(a);

            choices.appendChild(choice);

            break;
        case 'btn btn-default grey_button':

        
            // Suppression du champ de choix
            if (document.getElementsByName("choices[]").length > 2) {
                choices = input.parentNode.parentNode;
                choices.removeChild(input.parentNode);
            }

            break;

        default:
            alert('error');

    }


    // Reset des label
    datepick = document.getElementsByClassName('datepick');
    input_choice = document.getElementsByClassName('datepicker');
    for (i = 1; i <= datepick.length; i++) {
        datepick.item(i - 1).innerHTML = "Date limite " + i + '<span class="asterisc"> *</span>';
        datepick.item(i - 1).setAttribute('for', 'datepicker' + i);
    }
    datepickerLoader();
}

/*
 *Fonction de gestion de la connexion
 *Lors de la création d'un sondage et que le créateur
 *ne se soit pas connecté, ou n'ait pas de compte */
function manageConnectionForm(radio) {

    switch (radio.id) {

        //Si possède déjà un compte
        case 'registered':
            $('.infos_user').css({
                display: 'none'
            });
            $('#pwd_user').css({
                display: 'inline-block'
            });
            document.getElementById('pwd_user').previousSibling.previousSibling.style.display = 'inline-block';
            break;

            //Si première utilisation
        case 'not_registered':
            $('.infos_user').css({
                display: 'inline-block'
            });
            $('.info_box').css({
                display: 'block'
            });
            $("#pwd_user").css({
                display: 'none'
            });
            document.getElementById('pwd_user').previousSibling.previousSibling.style.display = 'none';
            break;

        default:
            alert('Erreur');
    }
}
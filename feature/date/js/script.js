function datepickerLoader() {
    $('.datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        minDate: 0,
        regional: 'fr'
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
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
            'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
        ],
        monthNamesShort: ['Janv.', 'Fév.', 'Mars', 'Avril', 'Mai', 'Juin',
            'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'
        ],
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        weekHeader: 'Sem.',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['fr']);
}

/*
 *Fonction d'ajout ou suppression de choix lors
 *de la création d'un sondage
 */
function manageChoices(input) {


    switch (input.className) {

        case 'orange_button':

            // Ajout d'un champ de choix

            choices = document.getElementById("choices");

            choice = document.createElement("div");

            //Création de l'input
            var input = document.createElement("input");
            input.className = "datepicker";
            input.setAttribute("readonly", "true");
            input.setAttribute("name", "choices[]");


            var label = document.createElement("label");
            label.setAttribute("for", "");
            label.className = "datepick";

            var a = document.createElement("a");
            a.className = "grey_button"
            a.setAttribute("title", "Supprimer");
            a.setAttribute("type", "button");
            a.setAttribute("onclick", "manageChoices(this);");
            a.innerText = " x ";

            //Création du bouton

            choice.className = 'choice';
            choice.appendChild(label);
            choice.appendChild(input);
            choice.appendChild(a);

            choices.appendChild(choice);

            break;

        case 'grey_button':

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
        datepick.item(i - 1).innerHTML = "Date limite " + i + '<span class="asterisc"> * </span>';
        datepick.item(i - 1).setAttribute('for', 'datepicker' + i);
    }

    // if (document.getElementsByName("choices[]").length === 2) {
    //     document.getElementsByName("choices[]").css('cursor', 'no-drop');
    // } else {
    //     document.getElementsByName("choices[]").css('cursor', 'pointer');
    // }


    // initBlur();
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
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
            input.setAttribute("id", "");
            input.className = "text_edit input_choice";
            input.setAttribute("type", "text");
            input.setAttribute("name", "choices[]");

            var label = document.createElement("label");
            label.setAttribute("for", "");
            label.className = "text lbl_choice";

            var a = document.createElement("a");
            a.className = "grey_button"
            a.setAttribute("title", "Supprimer");
            a.setAttribute("type", "button");
            a.setAttribute("onclick", "manageChoices(this);");
            a.innerText = " x ";

            //Création du bouton
            var button = document.createElement("button");
            button.innerText = "V";
            button.className = "valid";

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

            if (document.getElementsByName("choices[]").length > 2) {
                choices = input.parentNode.parentNode;
                choices.removeChild(input.parentNode);
                var numero = input.parentNode.children[1].getAttribute("id");
                numero = numero.replace("choix", "");
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
    for (i = 1; i <= lbl_choice.length; i++) {
        lbl_choice.item(i - 1).innerHTML = "Choix " + i + '<span class="asterisc"> * </span>';
        lbl_choice.item(i - 1).setAttribute('for', 'choix' + i);
        input_choice.item(i - 1).setAttribute('id', 'choix' + i);
        valid_choice.item(i - 1).setAttribute("onclick", "codeAddress(choix" + i + ");");
    }

    if (document.getElementsByName("choices[]").length === 2) {
        document.getElementsByName("choices[]").css('cursor', 'no-drop');
    } else {
        document.getElementsByName("choices[]").css('cursor', 'pointer');
    }


    initBlur();

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

// Gestion du google map

var geocoder;
    var map;
    var markers=[];
    var posmarkers = [];
    var infowindowarray = [];
    var boolMarker = false; // booleen qui définit si un marqueur est déjà placé à la même position (true si déjà placé)
    var zonemarqueurs = new google.maps.LatLngBounds();
    var infowindow;
    function initialize() {
    geocoder = new google.maps.Geocoder();
    
    latlng = new google.maps.LatLng(46.3333,  2.6);
    mapOptions = {
    zoom: 5,
    center: latlng
    }
    //Instance de l'objet autocomplete avec comme restriction géographique la France
    options = {
    types: ['geocode'],
    // componentRestrictions: {country: 'fr'} // restriction vis-à-vis des propositions de la recherche des villes
    };
    //function de création de input autovomplete
    var input1 = document.getElementById('choix1');
    var input2 = document.getElementById('choix2');
    autocomplete1 = new google.maps.places.Autocomplete(input1, options);
    autocomplete2 = new google.maps.places.Autocomplete(input2, options);
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    }

//fonction qui permet la completion du champ de texte
function createAutocompletion(input) {
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
    geocoder.geocode({
        'address': address
    }, function(resultat, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            addMarker(resultat, address);
            map.fitBounds(zonemarqueurs);
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}

// ajoute le marqueur et l'infobulle sur chaque marqueur
function addMarker(resultat, adresse) {
    for (var j = 0; j < markers.length; j++) {
        if (markers[j].position.A == resultat[0].geometry.location.A && markers[j].position.k == resultat[0].geometry.location.k)
            boolMarker = true;
    }
    if (boolMarker == false) {
        infowindow = new google.maps.InfoWindow({
            content: adresse + '<br />' + resultat[0].geometry.location.A + ';' + resultat[0].geometry.location.k
        });
        var marker = new google.maps.Marker({
            position: resultat[0].geometry.location,
            map: map,
            animation: google.maps.Animation.DROP
        });
        markers.push(marker);
        posmarkers.push(marker.getPosition());
        zonemarqueurs.extend(marker.getPosition());
        infowindowarray.push(infowindow);
        for (var i = 0; i < infowindowarray.length; i++) {
            marker = markers[i];
            google.maps.event.addListener(marker, 'click', function(marker, i) {
                return function() {
                    infowindowarray[i].open(map, marker);
                }
            }(markers[i], i));
        }
    }
    boolMarker = false;
}

// Fonction qui supprime les marqueurs de la carte, ainsi que les infowindows
function deleteMarkers(numero) {

    if (markers.length > 0) {
        markers[numero - 1].setMap(null);
        markers.splice(numero - 1, 1);
        posmarkers.splice(numero - 1, 1);
        infowindowarray.splice(numero - 1, 1);
        zonemarqueurs = new google.maps.LatLngBounds();
        for (var i = 0; i < infowindowarray.length; i++) {
            marker = markers[i];
            google.maps.event.clearListeners(marker, 'click', function(marker, i) {
                return function() {
                    infowindowarray[i].open(map, marker);
                }
            }(marker, i));
            google.maps.event.addListener(marker, 'click', function(marker, i) {
                return function() {
                    infowindowarray[i].open(map, marker);
                }
            }(marker, i));
        }
        for (var i = 0; i < markers.length; i++) {
            zonemarqueurs.extend(markers[i].getPosition());
        }
        map.fitBounds(zonemarqueurs);

        if (markers.length == 0) {
            markers = [];
            posmarkers = [];
            infowindowarray = [];
            zonemarqueurs = new google.maps.LatLngBounds();
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        }
    }
}
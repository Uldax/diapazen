    var geocoder = new google.maps.Geocoder();
    var map = new google.maps.Map(document.getElementById('map-canvas'));
    var zonemarqueurs = new google.maps.LatLngBounds();


    // function placeMarkerWithInfowindows(posGPS) {
    //     //Dans le code php, on a implode le tableau sous forme de chaine de caractère, en séparant
    //     //Les éléments du tableau par des "/", on va donc "recréer" ici notre tableau grâce à la méthode split
    //     posGPS = posGPS.split("/");
    //     for (var i = 0; i < posGPS.length; i++) {
    //         // on split également chaque ligne en deux, afin de bien récupérer latitude et longitude dans 2 cases différentes du tableau
    //         posGPS[i] = posGPS[i].split(",");
    //         var lat = posGPS[i][0];
    //         var lng = posGPS[i][1];
    //         // on appelle la fonction qui va nous placer chaque marqueur un par un
    //         placeUniqueMarkeur(lat, lng, i);
    //     }
    // }

    //initialisation des différents éléments de la map
   // function initialize(posGPS) {
   //     geocoder = new google.maps.Geocoder();
   //     zonemarqueurs = new google.maps.LatLngBounds();
   //     map = new google.maps.Map(document.getElementById('map-canvas'));
   //     placeMarkerWithInfowindows(posGPS);
   // }
    
     function initialize() {
        geocoder = new google.maps.Geocoder();
        zonemarqueurs = new google.maps.LatLngBounds();
        map = new google.maps.Map(document.getElementById('map-canvas'));
        console.log(posGPS);
        placeMarkerWithInfowindows();
    }

       function placeMarkerWithInfowindows() {
        for (var i = 0; i < posGPS.length; i++) {
            // on split également chaque ligne en deux, afin de bien récupérer latitude et longitude dans 2 cases différentes du tableau
            var lat = posGPS[i][0];
            var lng = posGPS[i][1];
            // on appelle la fonction qui va nous placer chaque marqueur un par un
            placeUniqueMarkeur(lat, lng, i);
        }
    }

    function placeUniqueMarkeur(lat, lng, i) {
        // variable qui va contenir les coordonnées GPS (latitude et longitude)
        var latlng = new google.maps.LatLng(lat, lng);
        geocoder.geocode({
            'latLng': latlng
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[1]) {
                    //Ajout du marker avec les coordonnées GPS
                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map,
                        animation: google.maps.Animation.DROP
                    });
                    //Contenu de l'infowindow                  
                    var infowindow = new google.maps.InfoWindow({
                        content: results[1].formatted_address + '<br />' + lat + ';' + lng
                    });
                    //Ajout de l'infobulle
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map, marker);
                    });
                    //Gestion du zoom
                    zonemarqueurs.extend(marker.getPosition());
                    map.fitBounds(zonemarqueurs);
                    // On appelle la fonction qui créé et rempli automatiquement les input avec les adresses
                    // 
                    addAdress(results[1].formatted_address, i);
                }
            } else {
                alert("Geocoder failed due to: " + status);
            }
        });
    }


    function addAdress(adress,i){
        var input=document.getElementById("answer_"+i);
        input.innerText=adress;
    }

    // // Méthode qui va créer le nombre d'input necessaires et de les remplir des adresses, provenant des coordonnées du tableau (posGPS)
    // function addInputWithAdresses(adresse, i) {
    //     // on récupére l'id de la div qui contiendra tous les input
    //     choices = document.getElementById("choices");
    //     // on crée un div qui contiendra un seul input
    //     choice = document.createElement("div");

    //     //Création de l'input
    //     var input = document.createElement("input");
    //     input.setAttribute("id", "choix" + i + 1);
    //     input.className = "text_edit input_choice";
    //     input.setAttribute("type", "text");
    //     input.setAttribute("name", "choices[]");
    //     input.setAttribute("value", adresse);
    //     input.setAttribute("readonly", "true");

    //     // Création du label
    //     var label = document.createElement("label");
    //     label.setAttribute("for", "choix" + i + 1);
    //     label.className = "text lbl_choice";
    //     label.innerHTML = "Choix " + (i + 1) + " ";
    //     choice.className = 'choice';

    //     // ajout des élements au div
    //     choice.appendChild(label);
    //     choice.appendChild(input);
    //     choices.appendChild(choice);
    // }


 window.onload=initialize();
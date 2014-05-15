    var geocoder;
    var map;
    var zonemarqueurs = new google.maps.LatLngBounds();
    var posGPS = [
        [43.124228, 5.927999999999997],
        [48.856614, 2.3522219000000177],
        [35.6894875, 139.69170639999993]
    ];
    var adresses = [];
    //Au niveau des sondés, cette fonction permet l'affichage des marqueurs avec les infowindows proposés
    // par celui qui a créé le sondage et lui permet de voter
    function placeMarkerWithInfowindows(posGPS) {
        for (var i = 0; i < posGPS.length; i++) {
            var lat = posGPS[i][0];
            var lng = posGPS[i][1];
            placeUniqueMarkeur(lat, lng, i);
        }
    }

    function placeUniqueMarkeur(lat, lng, i) {
        var latlng = new google.maps.LatLng(lat, lng);
        geocoder.geocode({
            'latLng': latlng
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[1]) {
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
                    addInputWithAdresses(results[1].formatted_address, i);
                }
            } else {
                alert("Geocoder failed due to: " + status);
            }
        });
    }


    function initialize() {
        geocoder = new google.maps.Geocoder();
        latlng = new google.maps.LatLng(46.3333, 2.6);
        mapOptions = {
            zoom: 5
        }
        map = new google.maps.Map(document.getElementById('map-canvas'));
        placeMarkerWithInfowindows(posGPS);
    }

    function addInputWithAdresses(adresse, i) {
        choices = document.getElementById("choices");

        choice = document.createElement("div");

        //Création de l'input
        var input = document.createElement("input");
        input.setAttribute("id", "choix" + i + 1);
        input.className = "text_edit input_choice";
        input.setAttribute("type", "text");
        input.setAttribute("name", "choices[]");
        input.setAttribute("value", adresse);
        input.setAttribute("readonly", "true");

        var label = document.createElement("label");
        label.setAttribute("for", "choix" + i + 1);
        label.className = "text lbl_choice";
        label.innerHTML = "Choix " + (i + 1) + " ";
        choice.className = 'choice';
        choice.appendChild(label);
        choice.appendChild(input);
        choices.appendChild(choice);
    }
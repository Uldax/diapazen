var geocoder;
var map;
var markers=[];
var posmarkers = [];
var zonemarqueurs = new google.maps.LatLngBounds();

function initialize() {
  geocoder = new google.maps.Geocoder();

  //faire la geoloc à ++++++ce niveau (Centre sur la france par defaut)
  var latlng = new google.maps.LatLng(46.3333,  2.6);
  var mapOptions = {
    zoom: 5,
    center: latlng
  }

   //Instance de l'objet autocomplete avec comme restriction géographique la France
  var options = {
     types: ['geocode'],
     // componentRestrictions: {country: 'global'} // restriction vis-à-vis des propositions de la recherche des villes
  };
  var input = document.getElementById('address');
  autocomplete = new google.maps.places.Autocomplete(input, options);

  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

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


// fonction qui allie auto-complétion et ajout des marqueurs sur la carte
function codeAddress() {

  var address = document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(resultat, status) {
    if (status == google.maps.GeocoderStatus.OK) {
     addMarker(resultat);
     map.fitBounds(zonemarqueurs);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}


// Fonction qui permet d'ajouter les marqueurs sur la carte en fonction de la zone de recherche avec l'auto-complétion
function addMarker(resultat){
  var marker = new google.maps.Marker({
    position: resultat[0].geometry.location,
    map: map
  });
  markers.push(marker);
  posmarkers.push(marker.getPosition());
  zonemarqueurs.extend(marker.getPosition());
}



// Sets the map on all markers in the array.
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setAllMap(null);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
  posmarkers = [];
  zonemarqueurs = new google.maps.LatLngBounds();
  initialize();
}

//Deletes the last entered marker in the array
function deleteLastMarker(){
  var j = markers.length;
  if(j>1){
    markers[j-1].setMap(null);
    markers.pop();
    posmarkers.pop();
    var zonemarqueurs = new google.maps.LatLngBounds();
    for (var i =0; i <markers.length;i++){
      zonemarqueurs.extend(markers[i].getPosition());
    }
    map.fitBounds(zonemarqueurs);
  }
  else{
    deleteMarkers();
  }
}

google.maps.event.addDomListener(window, 'load', initialize);

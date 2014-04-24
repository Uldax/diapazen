<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Geocoding service</title>
    <!-- à séparer ! -->
    <style>
      html, body,{
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
      #map-canvas{
        height: 500px; 
        width: 500px;
      }
    </style>
    <!-- A séparer -->
    <!-- URL qui récupère la carte google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNOpHpuGzB9PguOdh3naoMxPzBhOonyo4&v=3.exp&sensor=false"></script>
    <!-- Chargement de place API pour l'autocomplétion de l'input" -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&amp;sensor=false"></script>
    <script type="text/javascript" src="script.js"></script>
    <script>
var geocoder;
var map;
var markers=[];
var posmarkers = [];
var boolMarker = false; // booleen qui définit si un marqueur est déjà placé à la même position (true si déjà placé)
var zonemarqueurs = new google.maps.LatLngBounds();

function initialize() {
  geocoder = new google.maps.Geocoder();

  //faire la geoloc à ++++++ce niveau (Centre sur la france par defaut)
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


// fonction qui allie auto-complétion et ajout des marqueurs sur la carte


// Fonction qui permet d'ajouter les marqueurs sur la carte en fonction de la zone de recherche avec l'auto-complétion



// Sets the map on all markers in the array.
// function setAllMap(map) {
//   for (var i = 0; i < markers.length; i++) {
//     markers[i].setMap(map);
//   }
// }

// // Removes the markers from the map, but keeps them in the array.
// function clearMarkers() {
//   setAllMap(null);
// }

// // Deletes all markers in the array by removing references to them.
// function deleteMarkers() {
//   clearMarkers();
//   markers = [];
//   posmarkers = [];
//   zonemarqueurs = new google.maps.LatLngBounds();
//   initialize();
// }

// //Deletes the last entered marker in the array
// function deleteLastMarker(){
//   var j = markers.length;
//   if(j>1){
//     markers[j-1].setMap(null);
//     markers.pop();
//     posmarkers.pop();
//     var zonemarqueurs = new google.maps.LatLngBounds();
//     for (var i =0; i <markers.length;i++){
//       zonemarqueurs.extend(markers[i].getPosition());
//     }
//     map.fitBounds(zonemarqueurs);
//   }
//   else{
//     deleteMarkers();
//   }
// }

//google.maps.event.addDomListener(window, 'load', initialize);

    </script>

  </head>
  <body>
  <body onload="initialize()">
  <!--   <div id="panel">
      <input id="address" type="textbox" size="60" value="">
      <input type="button" value="Ajouter" onclick="codeAddress()">
      <input type="button" value="Supprimer tous les marqueurs" onclick="deleteMarkers()">
      <input type="button" value="Supprimer le dernier marqueur" onclick="deleteLastMarker()">
    </div> -->

    <div id="choices">
      <div id="choice">
        <label for="choix1" class="text lbl_choice">Choix 1<span class="asterisc"> *</span></label>
          <input class="text_edit input_choice" id="choix1" type="text" name="choices[]" value="" />
          <a class="grey_button" title="Supprimer" type="button" onclick="manageChoices(this);">x</a>
          <input type="button" value="V" class="valid" onClick="codeAddress(choix1);">
       </div>
       <div class="choice">
          <label for="choix2" class="text lbl_choice">Choix 2<span class="asterisc"> *</span></label>
          <input class="text_edit input_choice" id="choix2" type="text" name="choices[]" value="" />
          <a class="grey_button" title="Supprimer" type="button" onclick="manageChoices(this);">x</a>
          <input type="button" value="V" class="valid" onClick="codeAddress(choix2);">
        </div>
      </div>      
      <a class="orange_button" title="Ajouter un champ" id="add_choice_button" type="button" onclick="manageChoices(this);">+</a>
    <div id="map-canvas"></div>
  </body>
</html>
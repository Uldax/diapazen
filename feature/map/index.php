<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Geocoding service</title>
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
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <!-- Chargement de place API pour l'autocomplétion de l'imput" -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&amp;sensor=false"></script>
    <script>
var geocoder;
var map;



function initialize() {
  geocoder = new google.maps.Geocoder();

  //faire la geoloc a se niveau (Centre sur la france par default)
  var latlng = new google.maps.LatLng(46.3333,  2.6);
  var mapOptions = {
    zoom: 5,
    center: latlng
  }

   //Instance de l'objet autocomplete avec comme restriction géographique la zone du Canada
  var options = {
     types: ['geocode'],
     componentRestrictions: {country: 'fr'}
  };
  var input = document.getElementById('address');

  //Création des éléments
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


function codeAddress() {
  var address = document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>





  </head>
  <body>
    <div id="panel">
      <input id="address" type="textbox" size="60" value="">
      <input type="button" value="Ajouter" onclick="codeAddress()">
    </div>
    <div id="map-canvas"></div>
  </body>
</html>
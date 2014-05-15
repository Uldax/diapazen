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
  <!-- URL qui récupère la carte google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNOpHpuGzB9PguOdh3naoMxPzBhOonyo4&v=3.exp&sensor=false"></script>
  <!-- Chargement de place API pour l'autocomplétion de l'input" -->
 
  <script type="text/javascript" src="script.js"></script>
</head>
<body>
  <body onload="initialize()">
    <div id="choices"></div>
    <div id="map-canvas"></div>
  </body>
  </html>
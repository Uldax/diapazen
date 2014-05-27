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

  <script type="text/javascript" src="script.js"></script>
</head>
<body>
     <div id="choices"></div>
  <div id="map-canvas" ></div>
  <?php
  $tab = [[43.124228,5.927999999999997],[48.856614,2.3522219000000177],[35.6894875,139.69170639999993],[51.508515,-0.12548719999995228]];
  $j = "";
  // le compteur permet d'éviter de mettre un "/" après la dernière case du tableau
  $cpt = 0;
  $taille = sizeof($tab);
  for($i = 0;$i<$taille;$i++) {
    $cpt++; 
    // on regroupe tout le tableau en une grande chaine, ou chaque coordonnées GPS seront séparées par des "/"
    $j = $j.implode(",",$tab[$i]);
    if($cpt != $taille){
      $j = $j."/";
    }
  }
  ?>
<?php
// on appelle la fonction initialize du fichier js "script.js" qui permettra d'afficher les points sur la carte ainsi que les input contenant les adresses
  echo '<script>initialize("'.$j.'");</script>';
 ?>

</body>
</html>
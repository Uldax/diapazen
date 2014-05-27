<?php
// Démarrage de la session
session_start();
// si le tableau reçu est vide ou n'existe pas, on ne peut pas continuer le sondage
if(isset($_POST['position'])){
	if($_POST['position'] != ""){
		$_SESSION['position'] =  $_POST['position'];
		echo (json_encode(true));
	}else{
		echo (json_encode(false));
	}
}else{
	echo (json_encode(false));
}

?>
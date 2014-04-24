<?php

include_once('config/config.php');   
//  start sessions
	if (session_status() == PHP_SESSION_NONE) {
    	session_start();
    	//notre clef client
    	$_SESSION['clientid'] = $client_id;
	}
// CSRF Counter-measure
	$token = md5(uniqid(rand(), TRUE));
    $_SESSION['state'] = $token;
?>
    
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="google-signin-clientid" content="330767389348-acuj6f53cs45k4ge789jce27go8naoi9.apps.googleusercontent.com" />
		<meta name="google-signin-scope" content="https://www.googleapis.com/auth/plus.profile.emails.read" />
		<meta name="google-signin-cookiepolicy" content="single_host_origin" /> <!-- single_host_origin -->
		<meta name="google-signin-callback" content="signinCallback" />
		<title>Google sign in</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!--  asynchronous JavaScript (google doc)	 -->
		<script type="text/javascript">
			(function() {
    			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    			po.src = 'https://apis.google.com/js/platform.js';
    			var s = document.getElementsByTagName('script')[0]; 
    			s.parentNode.insertBefore(po, s);
			})();
		</script>

	<!-- le code pour effectuer le rendu de notre bouton personnalisé. 
	Nous allons utiliser un script PHP pour générer les JavaScripts pour deux raisons:
	Les variables de session vont être utilisés par les scripts JavaScript pour obtenir le client_id
	Nous allons utiliser un script différent pour le bouton lorsque l'utilisateur se connecte après une déconnexion 
	dans la même session.-->

	<?php
	if (!isset($_SESSION['logout'])) {
		$gScript = 'po.src = \'https://plus.google.com/js/client:plus.js?onload=render\';';
	} else {
		$gScript = 'po.src = \'https://plus.google.com/js/client:plus.js\';';
	}
	?>

	<script type="text/javascript">
    		(function () {
      			var po = document.createElement('script');
      			po.type = 'text/javascript';
      			po.async = true;
      			<?php echo $gScript; ?>
				var s = document.getElementsByTagName('script')[0];
      			s.parentNode.insertBefore(po, s);
    		})();

    		//callBack correspond à la fonction appelé lors du clic sur customBtn
			function render() {
		    		// Additional params
				 	 var additionalParams = {
				 	   'theme' : 'dark'
				 	 };

				 	 gapi.signin.render('signinButton', additionalParams);
					}
				      	
      		//Attention le sign in part troptot
      		//fonction appelé lors du clic
      		//appelle le script PHP sur le serveur pour le rendu des éléments qui seront affichés lorsque l'utilisateur sera connecté.
			function signinCallback(authResult) {
				if (authResult['status']['signed_in']) {
				    // Update the app to reflect a signed in user
				    // Hide the sign-in button now that the user is authorized, for example:
				    document.getElementById('connected_div').setAttribute('style', 'display: block');
				    document.getElementById('signinButton').setAttribute('style', 'display: none');
					$.post( "ajx/plus.php?storeToken", { code: authResult['code'], state: <?php echo "'".$_SESSION['state']."'" ?> },
						function( data ) {
							$('#gPlus').empty().append( data );
					    }
					);
		  		} 
		  		else {
			    // Update the app to reflect a signed out user
			    // 
			    // Possible error values:
			    //   "user_signed_out" - User is signed-out
			    //   "access_denied" - User denied access to your app
			    //   "immediate_failed" - Could not automatically log in the user
			    console.log('Sign-in state: ' + authResult['error']);
  				}
			}

			function revokeAccess() {
				document.getElementById('signinButton').setAttribute('style', 'display: block');
				$.post("ajx/plus.php?revoke", {state: <?php echo "'".$_SESSION['state']."'" ?> },
					function( data ) {
						$('#gPlus').empty().append( data );
					}
				);
	  		};

			function gvnSignOut() {
				  document.getElementById('signinButton').setAttribute('style', 'display: block');
				  document.getElementById('connected_div').setAttribute('style', 'display: none');
				$.post( "ajx/plus.php?logout", {state: <?php echo "'".$_SESSION['state']."'" ?>},
				function( data ) {
					$('#gPlus').empty().append( data );
				});
				gapi.auth.signOut();
			};
		</script>
		<style type="text/css">
			#customBtn {cursor: pointer;}
			#customBtn:hover {text-decoration: underline; cursor: hand;}
		</style>

	</head>
	<body>
		<h1>Simple Google+ Signin using the one-time code server flow</h1>
		<p>This sample shows Google+ signin in action using a custom signin button. You can also try disconnect and remove your consent.</p>
		<br />
		<div id="signinButton">
	  <span class="g-signin">
	  </span>
	</div>
	<div id="connected_div" hidden="true">
			<a onclick="gvnSignOut(); return false;" href="#">Disconnect me</a>&nbsp;&nbsp;&nbsp;
			<a onclick="revokeAccess(); return false;" href="#">Remove my consent</a>
	</div>
	<div id="content"></div>
	<a href="suite.php">Tada</a>


	<?php 
	//session_destroy();
	?>

	</body>	
</html>





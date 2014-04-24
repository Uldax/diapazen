<?php 
// CSRF Counter-measure
$token = md5(uniqid(rand(), TRUE));
$_SESSION['state'] = $token;
?>



<!-- Haut du fichier index.html -->
<html>
	<head>
	  <!-- DÉBUT Prérequis -->
	<meta name="google-signin-clientid" content="330767389348-acuj6f53cs45k4ge789jce27go8naoi9.apps.googleusercontent.com" />
	<meta name="google-signin-scope" content="https://www.googleapis.com/auth/plus.profile.emails.read" />
	<meta name="google-signin-requestvisibleactions" content="http://schemas.google.com/AddActivity" />
	<meta name="google-signin-cookiepolicy" content="none" />
	<meta name="google-signin-callback" content="signinCallback" />
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


  	<script src="https://apis.google.com/js/client:plus.js?onload=handleClientLoad"></script>


 	<script type="text/javascript">

 	var clientId = "330767389348-acuj6f53cs45k4ge789jce27go8naoi9.apps.googleusercontent.com";
	var apiKey = 'AIzaSyCNOpHpuGzB9PguOdh3naoMxPzBhOonyo4';
	var scopes = 'https://www.googleapis.com/auth/plus.me';

    (function () {
      var po = document.createElement('script');
      po.type = 'text/javascript';
      po.async = true;
      po.src = 'https://plus.google.com/js/client:plusone.js?onload=start';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(po, s);
    })();

    /* Executed when the APIs finish loading */
	function render() {

  	// Additional params
 	 var additionalParams = {
 	   'theme' : 'dark'
 	 };

 	 gapi.signin.render('signinButton', additionalParams);
	}

    function signinCallback(authResult) {
  	if (authResult['status']['signed_in']) {
    // Update the app to reflect a signed in user
    // Hide the sign-in button now that the user is authorized, for example:
    document.getElementById('signinButton').setAttribute('style', 'display: none');
    handleAuthResult(authResult);



  } else {
    // Update the app to reflect a signed out user
    // 
    // Possible error values:
    //   "user_signed_out" - User is signed-out
    //   "access_denied" - User denied access to your app
    //   "immediate_failed" - Could not automatically log in the user
    console.log('Sign-in state: ' + authResult['error']);
  }
	}


	//Test d'api de call
	function handleClientLoad() {
  gapi.client.setApiKey(apiKey);
  window.setTimeout(checkAuth,1);
}

function checkAuth() {
  gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: true}, handleAuthResult);
}

function handleAuthResult(authResult) {
  console.log(authResult);
  var authorizeButton = document.getElementById('authorize-button');
  if (authResult && !authResult.error) {
    //authorizeButton.style.visibility = 'hidden';
    makeApiCall();
  //  alert("touuuuuuou");
  } else {
    authorizeButton.style.visibility = '';
    authorizeButton.onclick = handleAuthClick;
  }
}

function handleAuthClick(event) {
  gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: false}, handleAuthResult);
  return false;
}

function makeApiCall() {
  gapi.client.load('plus', 'v1', function() {
      var request = gapi.client.plus.people.get({
          'userId': 'me'
            });
      request.execute(function(resp) {
          var heading = document.createElement('h4');
          var image = document.createElement('img');
          var e_mail= document.createElement('h4');
          console.log(resp);
          image.src = resp.image.url;
          heading.appendChild(image);
          heading.appendChild(document.createTextNode(resp.displayName));
          e_mail.appendChild(document.createTextNode(resp.emails[0].value));

          document.getElementById('content').appendChild(heading);
          document.getElementById('content').appendChild(e_mail);
        });
    });
}


  </script>
  <!-- FIN prérequis -->
</head>
<body>
	<!-- Ajoutez l'emplacement auquel le bouton de connexion doit s'afficher -->
	<div id="signinButton">
	  <span class="g-signin">
	  </span>
	</div>

	<div id="content"></div>

  </body>

</html>

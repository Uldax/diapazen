<?php 

//ACTIVER L'EXTENSION PHP_CURL
//// Google_HttpStreamIO au lieu du curl

require_once 'src/Google_Client.php';
require_once 'src/contrib/Google_PlusService.php';

session_start();
$client = new Google_Client();
$client->setApplicationName("Google+ PHP Starter Application");
$client->setClientId('330767389348.apps.googleusercontent.com');
$client->setClientSecret('notasecret');
$client->setRedirectUri('83204cfec27ab948c6da1cc150e9f9355c779e92');
$client->setDeveloperKey('AIzaSyCNOpHpuGzB9PguOdh3naoMxPzBhOonyo4');

$plus = new Google_PlusService($client);

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['access_token']);
}

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if (isset($_SESSION['access_token'])) {
  $client->setAccessToken($_SESSION['access_token']);
}
if ($client->getAccessToken()) {
  $me = $plus->people->get('me');

  // These fields are currently filtered through the PHP sanitize filters.
  // See http://www.php.net/manual/en/filter.filters.sanitize.php
  $url = filter_var($me['url'], FILTER_VALIDATE_URL);
  $img = filter_var($me['image']['url'], FILTER_VALIDATE_URL);
  $name = filter_var($me['displayName'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $personMarkup = "<a rel='me' href='$url'>$name</a><div><img src='$img'></div>";

  $optParams = array('maxResults' => 100);
  $activities = $plus->activities->listActivities('me', 'public', $optParams);
  $activityMarkup = '';
  foreach($activities['items'] as $activity) {
    // These fields are currently filtered through the PHP sanitize filters.
    // See http://www.php.net/manual/en/filter.filters.sanitize.php
    $url = filter_var($activity['url'], FILTER_VALIDATE_URL);
    $title = filter_var($activity['title'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $content = filter_var($activity['object']['content'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $activityMarkup .= "<div class='activity'><a href='$url'>$title</a><div>$content</div></div>";
  }

  // The access token may have been updated lazily.
  $_SESSION['access_token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
}
?>



<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel='stylesheet' href='style.css' />
</head>
<body>
<header><h1>Google+ Sample App</h1></header>
<div class="box">

<?php if(isset($personMarkup)): ?>
<div class="me"><?php print $personMarkup ?></div>
<?php endif ?>

<?php if(isset($activityMarkup)): ?>
<div class="activities">Your Activities: <?php print $activityMarkup ?></div>
<?php endif ?>

<?php
  if(isset($authUrl)) {
    print "<a class='login' href='$authUrl'>Connect Me!</a>";
  } else {
   print "<a class='logout' href='?logout'>Logout</a>";
  }
?>
</div>
</body>
</html>













<!-- Dernière partie de l'élément BODY dans le fichier index.html -->
<script type="text/javascript">
function signInCallback(authResult) {
  if (authResult['code']) {

    // Masquer le bouton de connexion maintenant que l'utilisateur est autorisé, par exemple :
    $('#signinButton').attr('style', 'display: none');

    // Envoyer le code au serveur
    $.ajax({
      type: 'POST',
      url: 'plus.php?storeToken',
      contentType: 'application/octet-stream; charset=utf-8',
      success: function(result) {
        // Traiter ou vérifier la réponse du serveur si nécessaire

        // Imprime la liste des personnes que l'utilisateur a transmise à l'application
        // sur la console.
        console.log(result);
        if (result['profile'] && result['people']){
          $('#results').html('Hello ' + result['profile']['displayName'] + '. You successfully made a server side call to people.get and people.list');
        } else {
          $('#results').html('Failed to make a server-side call. Check your configuration and console.');
        }
      },
      processData: false,
      data: authResult['code']
    });
  } else if (authResult['error']) {
    // Une erreur s'est produite.
    // Codes d'erreur possibles :
    //   "access_denied" - L'utilisateur a refusé l'accès à votre application
    //   "immediate_failed" - La connexion automatique de l'utilisateur a échoué
    // console.log('Une erreur s'est produite : ' + authResult['error']);
  }
}
</script>


<?php
/*
  // Créer un jeton d'état pour empêcher la falsification de requête.
  // Stocker le jeton dans la session pour une validation ultérieure.
  $state = md5(rand());
  $app['session']->set('state', $state);
  // Définir l'identifiant client, l'état du jeton et le nom de l'application dans le code HTML
  // avant l'envoi de la page.
  return $app['twig']->render('index.html', array(
      'CLIENT_ID' => CLIENT_ID,
      'STATE' => $state,
      'APPLICATION_NAME' => APPLICATION_NAME
  ));


  $code = $request->getContent();
  $gPlusId = $request->get['gplus_id'];
  // Échanger le code d'autorisation OAuth 2.0 contre les informations d'identification de l'utilisateur.
  $client->authenticate($code);

  $token = json_decode($client->getAccessToken());
  // Vérifier le jeton
  $reqUrl = 'https://www.googleapis.com/oauth2/v1/tokeninfo?access_token=' .
          $token->access_token;
  $req = new Google_HttpRequest($reqUrl);

  $tokenInfo = json_decode(
      $client::getIo()->authenticatedRequest($req)->getResponseBody());

  // En cas d'erreur dans les informations de jeton, annuler.
  if ($tokenInfo->error) {
    return new Response($tokenInfo->error, 500);
  }
  // S'assurer que le jeton est destiné à l'utilisateur prévu.
  if ($tokenInfo->userid != $gPlusId) {
    return new Response(
        "Token's user ID doesn't match given user ID", 401);
  }
  // S'assurer que le jeton obtenu est destiné à notre application.
  if ($tokenInfo->audience != CLIENT_ID) {
    return new Response(
        "Token's client ID does not match app's.", 401);
  }

  // Stocker le jeton dans la session pour une utilisation ultérieure.
  $app['session']->set('token', json_encode($token));
  $response = 'Succesfully connected with token: ' . print_r($token, true);
  */
 ?>
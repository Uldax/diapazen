

<!-- Haut du fichier index.html -->
<html itemscope itemtype="http://schema.org/Article">
<head>
  <!-- DÉBUT Prérequis -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
  </script>
  <script type="text/javascript">
    (function () {
      var po = document.createElement('script');
      po.type = 'text/javascript';
      po.async = true;
      po.src = 'https://plus.google.com/js/client:plusone.js?onload=start';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(po, s);
    })();
  </script>
  <!-- FIN prérequis -->
</head>
<!-- Ajoutez l'emplacement auquel le bouton de connexion doit s'afficher -->
<div id="signinButton">
  <span class="g-signin"
    data-scope="https://www.googleapis.com/auth/plus.login"
    data-clientid="330767389348.apps.googleusercontent.com"
    data-redirecturi="postmessage"
    data-accesstype="offline"
    data-cookiepolicy="single_host_origin"
    data-callback="signInCallback">
  </span>
</div>
<div id="result">
<a href="suite.php">Tada</a>
</div>
  </body>
</html>

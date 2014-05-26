<?php

/* BdlsProjetBundle:Default:layout.html.twig */
class __TwigTemplate_7f2ca19df52a8a785f8071dbb6b7f739a23d9a5130e1035f26e1c0e0cfd4cb15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t\t<!--<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
\t</head>
    <body>

\t\t<header>
                    <div id=\"header_content row\">
                        <div class=\"col-lg-3 col-md-1\"></div>
                        <div class=\"col-lg-4 col-md-6 col-sm-5 col-xs-8 div_connect\">
                            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">
                            <img id=\"logo\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/media/pictures/diapazen_v2.png"), "html", null, true);
        echo "\" alt=\"Diapazen\" class=\"img-rounded\">
                            </a>
                        </div>

                            <!--<?php if (!\$this->isUserConnected()){ ?>-->
                         <div class=\"col-lg-4 col-md-5 col-sm-7 col-xs-4 div_connect\">
\t\t\t\t\t\t\t ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 31
            echo "\t\t\t\t\t\t\t\t<div id=\"connected_box\" ><p class=\"text\" >Bonjour <a class=\"orangelink\" href=\"";
            echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
            echo "\"><span class=\"orange_text\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</span></a></p><a class=\"link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Se déconnecter</a></div>
\t\t\t";
            // line 33
            echo "\t\t\t\t\t\t\t\t";
        } else {
            // line 34
            echo "                                <div id=\"connect_box\" >
                                    <form action=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\" class=\"form-inline\">
                                            <input type=\"text\" id=\"username\" class=\"small_text_edit form-control hidden-xs\" placeholder=\"E-mail\" name=\"_username\" />
                                            <input type=\"password\" class=\"small_text_edit form-control hidden-xs\" id=\"password\" placeholder=\"Mot de passe\" name=\"_password\" />
                                           <input type=\"hidden\" name=\"_target_path\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "schemeAndHttpHost") . $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"))), "html", null, true);
            echo "\" />
                                            <input class=\"btn btn-default orange_small_button hidden-xs\" type=\"submit\" value=\"Connexion\">
                                    </form>
                                    
                         <button class=\"btn btn-default orange_small_button orange_small_button-xs visible-xs\" data-toggle=\"modal\" data-target=\"#myModal\">
                               Connexion
                         </button>
                         <!-- Modal -->
                            <!--<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                              <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                  <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                                  </div>
                                  <div class=\"modal-body\">
                                    ...
                                  </div>
                                  <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                    <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>-->
                                            
                                                                                       
                                </div>
                                <a class=\"btn btn-link small_link hidden-xs\" href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("bdls_projet_forgot");
            echo "\" >Mot de passe oublié ?</a> 
                         </div>
                         <div class=\"col-lg-1\"></div>
 
                       ";
        }
        // line 71
        echo "\t\t\t\t
                    </div>
\t\t</header>
\t\t";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "\t\t<!--<div class=\"white_bg\">-->
\t\t";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "
    
\t";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 111
        echo "\t\t
    </body>

</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/Aristo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/diapazen.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
                        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
                        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/orangeSoberKit.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />    

\t\t";
    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        // line 75
        echo "\t\t";
    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        // line 78
        echo "                    <!-- Création des input date en jquerry necessaire pour tout les sondages -->
                    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery-2.0.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <!--Inutilisé il me semble  -->
                     <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script src=";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "></script>
                    <script>datepickerLoader();</script>
               ";
    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        // line 89
        echo "\t\t<footer class=\"hidden-xs\">
\t\t    <ul>
\t\t        <li><a class=\"btn btn-link btn-lg link\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a class=\"btn btn-link btn-lg link\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("bdls_projet_about");
        echo "\">À propos</a></li>
\t\t        <!-- <li><a class=\"link\" href=\"#\">Contact</a></li> -->
\t\t    </ul>
\t\t    <p class=\"text\">© ";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo " Diapazen</p>
\t\t    <img id=\"logo_isen\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/media/pictures/logo_isen.png"), "html", null, true);
        echo "\" class=\"img-rounded\">
\t\t</footer>
                        
                <!-- Footer mobile -->        
                <footer class=\"visible-xs footer-xs\">
\t\t    <ul>
\t\t        <li><a class=\"btn btn-link btn-lg link\" href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a class=\"btn btn-link btn-lg link\" href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("bdls_projet_about");
        echo "\">À propos</a></li>
\t\t        <!-- <li><a class=\"link\" href=\"#\">Contact</a></li> -->
\t\t    </ul>
\t\t    <p class=\"text\">© ";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo " Diapazen</p>
\t\t    <img id=\"logo_isen\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/media/pictures/logo_isen.png"), "html", null, true);
        echo "\">

\t\t</footer>
\t\t";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 107,  258 => 106,  252 => 103,  248 => 102,  239 => 96,  235 => 95,  229 => 92,  225 => 91,  221 => 89,  218 => 88,  211 => 83,  207 => 82,  202 => 80,  198 => 79,  195 => 78,  192 => 77,  188 => 75,  185 => 74,  178 => 12,  174 => 11,  170 => 10,  166 => 9,  162 => 8,  157 => 7,  154 => 6,  148 => 5,  141 => 111,  139 => 88,  135 => 86,  133 => 77,  130 => 76,  128 => 74,  123 => 71,  115 => 66,  84 => 38,  78 => 35,  75 => 34,  72 => 33,  63 => 31,  61 => 30,  52 => 24,  48 => 23,  36 => 15,  34 => 6,  30 => 5,  24 => 1,);
    }
}

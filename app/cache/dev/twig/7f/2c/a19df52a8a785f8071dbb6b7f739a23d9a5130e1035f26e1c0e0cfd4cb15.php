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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/diapazen_v2.png"), "html", null, true);
        echo "\" alt=\"Diapazen\" class=\"img-rounded\">
                            </a>
                        </div>

                            <!--<?php if (!\$this->isUserConnected()){ ?>-->
                         <div class=\"col-lg-4 col-md-5 col-sm-7 col-xs-4 div_connect\">
                                <div id=\"connect_box\" >
                                <form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("bdls_projet_login");
        echo "\" method=\"post\" class=\"form-inline\">
                                        <input id=\"mail_connect\" name=\"email\" class= \"form-control hidden-xs\" type=\"mail\" placeholder=\"E-mail\">
                                        <input id=\"password_connect\" name=\"password\" class=\"form-control hidden-xs\" type=\"password\" placeholder=\"Mot de passe\">
                                        <input class=\"btn btn-default orange_small_button hidden-xs\" type=\"submit\" value=\"Connexion\">
                                        <input class=\"btn btn-default orange_small_button orange_small_button-xs visible-xs\" type=\"submit\" value=\"Connexion\">
                                </form>
                                </div>
                                <a class=\"btn btn-link small_link hidden-xs\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("bdls_projet_forgot");
        echo "\" >Mot de passe oublié ?</a> 
                         </div>
                         <div class=\"col-lg-1\"></div>
                            <!--<?php } else { ?>
                                            <div id=\"connected_box\" ><p class=\"text\" >Bonjour <a class=\"orangelink\" href=\"<?php \$this->getHomeUrl();?>/user/profile\"><span class=\"orange_text\"><?php echo \$this->getUserInfo('firstname').' '.\$this->getUserInfo('lastname').' '; ?></span></a></p><a class=\"link\" href=\"<?php \$this->getHomeUrl(); ?>/user/logout\">Se déconnecter</a></div>
                            <?php } ?>-->
                    </div>
\t\t</header>
\t\t";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "\t\t<!--<div class=\"white_bg\">-->
\t\t
\t\t
\t\t";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    
\t";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "</html>";
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

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "\t<body>
\t\t
\t</body>
\t\t";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "                        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery-2.0.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        
\t\t";
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "\t\t<footer class=\"hidden-xs\">
\t\t    <ul>
\t\t        <li><a class=\"btn btn-link btn-lg link\" href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a class=\"btn btn-link btn-lg link\" href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("bdls_projet_about");
        echo "\">À propos</a></li>
\t\t        <!-- <li><a class=\"link\" href=\"#\">Contact</a></li> -->
\t\t    </ul>
\t\t    <p class=\"text\">© ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo " Diapazen</p>
\t\t    <img id=\"logo_isen\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/logo_isen.png"), "html", null, true);
        echo "\" class=\"img-rounded\">
\t\t</footer>
                        
                <!-- Footer mobile -->        
                <footer class=\"visible-xs footer-xs\">
\t\t    <ul>
\t\t        <li><a class=\"btn btn-link btn-lg link\" href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a class=\"btn btn-link btn-lg link\" href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("bdls_projet_about");
        echo "\">À propos</a></li>
\t\t        <!-- <li><a class=\"link\" href=\"#\">Contact</a></li> -->
\t\t    </ul>
\t\t    <p class=\"text\">© ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo " Diapazen</p>
\t\t    <img id=\"logo_isen\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/logo_isen.png"), "html", null, true);
        echo "\" class=\"img-rounded\">
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
        return array (  215 => 81,  211 => 80,  205 => 77,  201 => 76,  192 => 70,  188 => 69,  182 => 66,  178 => 65,  174 => 63,  171 => 62,  164 => 58,  160 => 57,  156 => 56,  151 => 55,  148 => 54,  141 => 47,  138 => 46,  131 => 12,  127 => 11,  123 => 10,  119 => 9,  115 => 8,  110 => 7,  107 => 6,  101 => 5,  97 => 84,  95 => 62,  92 => 61,  90 => 54,  85 => 51,  83 => 46,  72 => 38,  62 => 31,  52 => 24,  48 => 23,  36 => 15,  34 => 6,  30 => 5,  24 => 1,);
    }
}

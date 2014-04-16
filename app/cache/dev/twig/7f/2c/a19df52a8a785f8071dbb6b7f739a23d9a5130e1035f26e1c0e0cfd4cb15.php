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
\t\t\t<div id=\"header_content\">
\t\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">
\t\t\t    \t<img id=\"logo\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/diapazen_v2.png"), "html", null, true);
        echo "\" alt=\"Diapazen\" class=\"img-rounded\">
\t\t\t\t</a>


\t\t\t\t<!--<?php if (!\$this->isUserConnected()){ ?>-->
\t\t\t\t\t<div id=\"connect_box\" >
\t\t\t\t    \t<form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("bdls_projet_login");
        echo "\" method=\"post\" class=\"form-inline\">
\t\t\t\t        \t<input id=\"mail_connect\" name=\"email\" class= \"form-control\" type=\"mail\" placeholder=\"E-mail\">
\t\t\t\t        \t<input id=\"password_connect\" name=\"password\" class=\"form-control\" type=\"password\" placeholder=\"Mot de passe\">
                                                <input class=\"btn btn-default orange_small_button\" type=\"submit\" value=\"Connexion\">
                                        </form>
                                                <a class=\"btn btn-link small_link\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("bdls_projet_forgot");
        echo "\" >Mot de passe oublié ?</a> 
\t\t\t\t\t</div>
\t\t\t\t<!--<?php } else { ?>
\t\t\t\t\t\t<div id=\"connected_box\" ><p class=\"text\" >Bonjour <a class=\"orangelink\" href=\"<?php \$this->getHomeUrl();?>/user/profile\"><span class=\"orange_text\"><?php echo \$this->getUserInfo('firstname').' '.\$this->getUserInfo('lastname').' '; ?></span></a></p><a class=\"link\" href=\"<?php \$this->getHomeUrl(); ?>/user/logout\">Se déconnecter</a></div>
\t\t\t\t<?php } ?>-->
\t\t\t\t
\t\t\t</div>
\t\t</header>
\t\t";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "\t\t<!--<div class=\"white_bg\">-->
\t\t
\t\t
\t\t";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    
\t";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 68
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

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "\t<body>
\t\t
\t</body>
\t\t";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "                        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery-2.0.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        
\t\t";
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "\t\t<footer>
\t\t    <ul>
\t\t        <li><a class=\"btn btn-link btn-lg link\" href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a class=\"btn btn-link btn-lg link\" href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("bdls_projet_about");
        echo "\">À propos</a></li>
\t\t        <!-- <li><a class=\"link\" href=\"#\">Contact</a></li> -->
\t\t    </ul>
\t\t    <p class=\"text\">© ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo " Diapazen</p>
\t\t    <img id=\"logo_isen\" src=\"";
        // line 65
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
        return array (  187 => 65,  183 => 64,  177 => 61,  173 => 60,  169 => 58,  166 => 57,  159 => 53,  155 => 52,  151 => 51,  146 => 50,  143 => 49,  136 => 42,  133 => 41,  126 => 12,  122 => 11,  118 => 10,  114 => 9,  110 => 8,  105 => 7,  102 => 6,  96 => 5,  92 => 68,  90 => 57,  87 => 56,  85 => 49,  80 => 46,  78 => 41,  67 => 33,  59 => 28,  50 => 22,  46 => 21,  36 => 15,  34 => 6,  30 => 5,  24 => 1,);
    }
}

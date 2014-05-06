<?php

/* BdlsProjetBundle:Default:layout.html.twig */
class __TwigTemplate_c4206325451c2844c28abbc526a3511f6b24306a43cc6d6afc231896e608fbd3 extends Twig_Template
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
        // line 12
        echo "\t\t<!--<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
\t</head>
    

\t\t<header>
\t\t\t<div id=\"header_content\">
\t\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">
\t\t\t    \t<img id=\"logo\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/media/pictures/diapazen_v2.png"), "html", null, true);
        echo "\" alt=\"Diapazen\">
\t\t\t\t</a>

\t\t\t\t<!--<?php if (!\$this->isUserConnected()){ ?>-->
\t\t\t\t\t<div id=\"connect_box\" >
\t\t\t\t    \t<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("bdls_projet_login");
        echo "\" method=\"post\">
\t\t\t\t        \t<input id=\"mail_connect\" name=\"email\" class=\"small_text_edit\" type=\"mail\" placeholder=\"E-mail\">
\t\t\t\t        \t<input id=\"password_connect\" name=\"password\" class=\"small_text_edit\" type=\"password\" placeholder=\"Mot de passe\">
\t\t\t\t        \t<input class =\"orange_small_button\" type=\"submit\" value=\"Connexion\">
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<a class=\"small_link\" href=\"";
        // line 29
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
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "\t\t<!--<div class=\"white_bg\">-->
\t\t
\t\t
\t\t";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    
\t";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 63
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
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/orangeSoberKit.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "\t<body>
\t\t
\t</body>
\t\t";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script>datepickerLoader();</script>
\t\t";
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "\t\t<footer>
\t\t    <ul>
\t\t        <li><a class=\"link\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a class=\"link\" href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("bdls_projet_about");
        echo "\">À propos</a></li>
\t\t        <!-- <li><a class=\"link\" href=\"#\">Contact</a></li> -->
\t\t    </ul>
\t\t    <p class=\"text\">© ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo " Diapazen</p>
\t\t    <img id=\"logo_isen\" src=\"";
        // line 60
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
        return array (  173 => 60,  169 => 59,  163 => 56,  159 => 55,  155 => 53,  152 => 52,  145 => 48,  141 => 47,  136 => 46,  133 => 45,  126 => 38,  123 => 37,  117 => 10,  113 => 9,  109 => 8,  104 => 7,  101 => 6,  95 => 5,  91 => 63,  89 => 52,  86 => 51,  79 => 42,  66 => 29,  58 => 24,  50 => 19,  46 => 18,  36 => 12,  34 => 6,  30 => 5,  24 => 1,  88 => 43,  84 => 45,  77 => 37,  64 => 28,  51 => 18,  37 => 7,  31 => 3,  28 => 2,);
    }
}

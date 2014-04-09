<?php

/* BdlsProjetBundle:Default:layout.html.twig */
class __TwigTemplate_444a1671c243583143f2ea690f9598a231e7219d6817c4ef4c3a5289b4744185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
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
    <body>

\t\t<header>
\t\t\t<div id=\"header_content\">
\t\t\t\t<!--<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo ">-->
\t\t\t    \t<img id=\"logo\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/diapazen_v2.png"), "html", null, true);
        echo "\" alt=\"Diapazen\">
\t\t\t\t<!--</a>-->

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
        // line 39
        echo "\t\t<!--<div class=\"white_bg\">-->
\t\t";
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "    </body>

</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
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
        echo "\t\t";
    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        // line 41
        echo "\t\t<footer>
\t\t    <ul>
\t\t        <li><a class=\"link\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a class=\"link\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("bdls_projet_about");
        echo "\">À propos</a></li>
\t\t        <!-- <li><a class=\"link\" href=\"#\">Contact</a></li> -->
\t\t    </ul>
\t\t    <!--<p class=\"text\">© <?php echo date('Y'); ?> Diapazen</p>
\t\t    <img id=\"logo_isen\" src=\"<?php \$this->getPath('media/pictures/logo_isen.png'); ?>\" alt=\"ISEN Toulon\">-->
\t\t</footer>
\t\t";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
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
        return array (  158 => 53,  153 => 52,  150 => 51,  139 => 44,  135 => 43,  131 => 41,  128 => 40,  124 => 38,  121 => 37,  115 => 10,  111 => 9,  107 => 8,  102 => 7,  99 => 6,  93 => 5,  87 => 55,  84 => 51,  82 => 40,  79 => 39,  77 => 37,  66 => 29,  58 => 24,  50 => 19,  46 => 18,  36 => 12,  34 => 6,  30 => 5,  24 => 1,);
    }
}

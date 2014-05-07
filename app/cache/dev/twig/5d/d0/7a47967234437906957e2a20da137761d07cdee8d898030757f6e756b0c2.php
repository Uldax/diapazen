<?php

/* BdlsProjetBundle:Default:layout.html.twig */
class __TwigTemplate_5dd07a47967234437906957e2a20da137761d07cdee8d898030757f6e756b0c2 extends Twig_Template
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
\t\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">
\t\t\t    \t<img id=\"logo\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/diapazen_v2.png"), "html", null, true);
        echo "\" alt=\"Diapazen\" class=\"img-rounded\">
\t\t\t\t</a>
\t\t\t\t";
        // line 21
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 22
            echo "\t\t\t\t\t<div id=\"connected_box\" ><p class=\"text\" >Bonjour <a class=\"orangelink\" href=\"";
            echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
            echo "\"><span class=\"orange_text\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "</span></a></p><a class=\"link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Se déconnecter</a></div>
";
            // line 24
            echo "\t\t\t\t\t";
        } else {
            // line 25
            echo "\t\t\t\t\t<div id=\"connect_box\" >
\t\t\t\t    \t<form action=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
";
            // line 28
            echo "\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" class=\"small_text_edit\" placeholder=\"E-mail\" name=\"_username\" />
";
            // line 30
            echo "\t\t\t\t\t\t\t<input type=\"password\" class=\"small_text_edit\" id=\"password\" placeholder=\"Mot de passe\" name=\"_password\" />
\t\t\t\t\t\t\t";
            // line 35
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "schemeAndHttpHost") . $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"))), "html", null, true);
            echo "\" />
\t\t\t\t        \t<input class =\"orange_small_button\" type=\"submit\" value=\"Connexion\">
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<a class=\"small_link\" href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("bdls_projet_forgot");
            echo "\" >Mot de passe oublié ?</a> 
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t
\t\t\t</div>
\t\t</header>
\t\t";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "\t\t<!--<div class=\"white_bg\">-->
\t\t";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
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

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "\t\t";
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "\t\t<footer>
\t\t    <ul>
\t\t        <li><a class=\"link\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a class=\"link\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("bdls_projet_about");
        echo "\">À propos</a></li>
\t\t        <!-- <li><a class=\"link\" href=\"#\">Contact</a></li> -->
\t\t    </ul>
\t\t    <!--<p class=\"text\">© <?php echo date('Y'); ?> Diapazen</p>
\t\t    <img id=\"logo_isen\" src=\"<?php \$this->getPath('media/pictures/logo_isen.png'); ?>\" alt=\"ISEN Toulon\">-->
\t\t</footer>
\t\t";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 60
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
        return array (  181 => 60,  176 => 59,  173 => 58,  162 => 51,  158 => 50,  154 => 48,  151 => 47,  147 => 45,  144 => 44,  138 => 10,  134 => 9,  130 => 8,  125 => 7,  122 => 6,  116 => 5,  110 => 62,  107 => 58,  105 => 47,  102 => 46,  100 => 44,  95 => 41,  89 => 38,  82 => 35,  79 => 30,  76 => 28,  72 => 26,  69 => 25,  66 => 24,  57 => 22,  55 => 21,  50 => 19,  46 => 18,  36 => 12,  34 => 6,  30 => 5,  24 => 1,);
    }
}

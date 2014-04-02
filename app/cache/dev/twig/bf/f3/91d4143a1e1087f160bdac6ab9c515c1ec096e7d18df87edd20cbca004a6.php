<?php

/* BdlsProjetBundle:Default:home.html.twig */
class __TwigTemplate_bff391d4143a1e1087f160bdac6ab9c515c1ec096e7d18df87edd20cbca004a6 extends Twig_Template
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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--<?php
/**
 * Page d'accueil du site
 * 
 * @package     Diapazen
 * @subpackage  View
 * @copyright   Copyright (c) 2013, ISEN-Toulon
 * @license     http://www.gnu.org/licenses/gpl.html GNU GPL v3
 * 
 * This file is part of Diapazen.
 * 
 * Diapazen is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License 3 as published by
 * the Free Software Foundation.
 * 
 * Diapazen is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Diapazen.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

    // fixe un bug de la documentation
    namespace ns;
    // fixe un bug de la documentation
?>
<?php 
    session_destroy();
    \$this->getHeader();
?>
        

<?php \$this->getFooter(); ?>-->

<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 42
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 43
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 49
        echo "\t\t<!--<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
\t</head>
\t
\t<body>
\t\t";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "\t</body>
\t
</html>
";
    }

    // line 42
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
    }

    // line 43
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 44
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/Aristo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/diapazen.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/orangeSoberKit.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "\t\t\t<div id=\"content\">

\t\t\t\t<article class=\"use_description\" >
\t\t\t\t\t<div class=\"icon_article\" id=\"img_un\">
\t\t\t\t\t\t<img class=\"img_un\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/1_140x140.png"), "html", null, true);
        echo "\" alt=\"1\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Créez votre sondage</h2>
\t\t\t\t\t\t<p class=\"big_text\">Un dîner entre amis à organiser ? Un avis à demander ? Créez votre sondage en un rien de temps selon vos envies.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t\t<article class=\"use_description\">
\t\t\t\t\t<div class=\"icon_article\" id=\"img_deux\">
\t\t\t\t\t\t<img class=\"img_deux\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/2_140x140.png"), "html", null, true);
        echo "\" alt=\"2\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Ajoutez des propositions</h2>
\t\t\t\t\t\t<p class=\"big_text\">Votre sondage peut comporter le nombre de propositions que vous souhaitez, ajoutez-en ou supprimez-en dynamiquement.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t\t\t<a id=\"create_survey\" class=\"orange_big_button\" href=\"poll/create\">C'est parti !</a>
\t\t\t\t<article class=\"use_description\">
\t\t\t\t\t<div class=\"icon_article\" id=\"img_trois\">
\t\t\t\t\t\t<img class=\"img_trois\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/3_140x140.png"), "html", null, true);
        echo "\" alt=\"3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Partagez-le !</h2>
\t\t\t\t\t\t<p class=\"big_text\">Invitez les personnes susceptibles de venir répondre à votre sondage. Après votre inscription, un mail leur sera envoyé pour qu'ils puissent venir faire leur choix.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>

\t\t\t\t<!-- <p id=\"asterisk\" class=\"bold\">*Créer un sondage nécessite une inscription, celle-ci peut se faire en même temps que la création de votre sondage</p> -->
\t\t\t</div>
\t\t";
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 89,  155 => 78,  142 => 68,  129 => 58,  123 => 54,  120 => 53,  114 => 47,  110 => 46,  106 => 45,  101 => 44,  98 => 43,  92 => 42,  85 => 90,  82 => 89,  80 => 53,  72 => 49,  70 => 43,  66 => 42,  23 => 1,);
    }
}

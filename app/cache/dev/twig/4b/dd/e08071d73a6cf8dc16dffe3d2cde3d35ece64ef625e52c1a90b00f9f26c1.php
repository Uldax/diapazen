<?php

/* BdlsProjetBundle:Default:header.html.twig */
class __TwigTemplate_4bdde08071d73a6cf8dc16dffe3d2cde3d35ece64ef625e52c1a90b00f9f26c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--<?php
/**
 * Header du site
 * 
 * @package     Diapazen
 * @subpackage\tView
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

\t// fixe un bug de la documentation
\tnamespace ns;
\t// fixe un bug de la documentation
?>-->

<!DOCTYPE html>
<html>

    <head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 36
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 37
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "\t\t<!--<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
\t</head>
        <!-- jQuery 1.9-->
\t\t";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "    <body>
\t\t<header>
\t\t\t<div id=\"header_content\">
\t\t\t\t<!--<a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo ">-->
\t\t\t    \t<img id=\"logo\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/media/pictures/diapazen_v2.png"), "html", null, true);
        echo "\" alt=\"Diapazen\">
\t\t\t\t<!--</a>-->

\t\t\t\t<!--<?php if (!\$this->isUserConnected()){ ?>-->
\t\t\t\t\t<div id=\"connect_box\" >
\t\t\t\t    \t<form action=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("bdls_projet_login");
        echo "\" method=\"post\">
\t\t\t\t        \t<input id=\"mail_connect\" name=\"email\" class=\"small_text_edit\" type=\"mail\" placeholder=\"E-mail\">
\t\t\t\t        \t<input id=\"password_connect\" name=\"password\" class=\"small_text_edit\" type=\"password\" placeholder=\"Mot de passe\">
\t\t\t\t        \t<input class =\"orange_small_button\" type=\"submit\" value=\"Connexion\">
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<a class=\"small_link\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("bdls_projet_forgot");
        echo "\" >Mot de passe oublié ?</a> 
\t\t\t\t\t</div>
\t\t\t\t<!--<?php } else { ?>
\t\t\t\t\t\t<div id=\"connected_box\" ><p class=\"text\" >Bonjour <a class=\"orangelink\" href=\"<?php \$this->getHomeUrl();?>/user/profile\"><span class=\"orange_text\"><?php echo \$this->getUserInfo('firstname').' '.\$this->getUserInfo('lastname').' '; ?></span></a></p><a class=\"link\" href=\"<?php \$this->getHomeUrl(); ?>/user/logout\">Se déconnecter</a></div>
\t\t\t\t<?php } ?>-->
\t\t\t\t
\t\t\t</div>
\t\t</header>

\t\t<div class=\"white_bg\">";
    }

    // line 36
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 38
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/Aristo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/diapazen.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/orangeSoberKit.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
                        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery.js"), "html", null, true);
        echo "> </script>
\t\t";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 48,  127 => 39,  113 => 36,  65 => 44,  58 => 35,  234 => 82,  228 => 79,  215 => 72,  211 => 71,  205 => 68,  197 => 65,  194 => 64,  178 => 56,  174 => 143,  161 => 50,  150 => 11,  146 => 10,  124 => 5,  104 => 50,  84 => 38,  34 => 6,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 30,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 83,  235 => 74,  230 => 82,  227 => 81,  224 => 78,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 41,  119 => 37,  102 => 32,  71 => 19,  67 => 15,  63 => 37,  59 => 36,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 34,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 35,  46 => 7,  27 => 4,  44 => 10,  31 => 3,  28 => 2,  201 => 67,  196 => 90,  183 => 58,  171 => 54,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 9,  138 => 8,  136 => 56,  121 => 46,  117 => 87,  105 => 40,  91 => 59,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 53,  72 => 47,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 47,  139 => 42,  131 => 40,  123 => 47,  120 => 40,  115 => 64,  111 => 62,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 54,  74 => 50,  66 => 15,  55 => 15,  52 => 24,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 59,  182 => 66,  176 => 64,  173 => 65,  168 => 53,  164 => 51,  162 => 57,  154 => 12,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 7,  130 => 6,  125 => 44,  122 => 38,  116 => 41,  112 => 42,  109 => 53,  106 => 52,  103 => 32,  99 => 64,  95 => 28,  92 => 43,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 34,  51 => 14,  48 => 23,  45 => 17,  42 => 7,  39 => 9,  36 => 15,  33 => 4,  30 => 5,);
    }
}

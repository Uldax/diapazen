<?php

/* BdlsProjetBundle:Default:header.html.twig */
class __TwigTemplate_581ef7e43512a4cf8494f12b422b1eae2e5efdff544e537d7044e53e1d490149 extends Twig_Template
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
        // line 43
        echo "\t\t<!--<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
\t</head>
        <!-- jQuery 1.9-->
\t\t";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "    <body>

\t\t<header>
\t\t\t<div id=\"header_content\">
\t\t\t\t<!--<a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo ">-->
\t\t\t    \t<img id=\"logo\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/diapazen_v2.png"), "html", null, true);
        echo "\" alt=\"Diapazen\">
\t\t\t\t<!--</a>-->

\t\t\t\t<!--<?php if (!\$this->isUserConnected()){ ?>-->
\t\t\t\t\t<div id=\"connect_box\" >
\t\t\t\t    \t<form action=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("bdls_projet_login");
        echo "\" method=\"post\">
\t\t\t\t        \t<input id=\"mail_connect\" name=\"email\" class=\"small_text_edit\" type=\"mail\" placeholder=\"E-mail\">
\t\t\t\t        \t<input id=\"password_connect\" name=\"password\" class=\"small_text_edit\" type=\"password\" placeholder=\"Mot de passe\">
\t\t\t\t        \t<input class =\"orange_small_button\" type=\"submit\" value=\"Connexion\">
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<a class=\"small_link\" href=\"";
        // line 65
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
\t\t";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "        <script src=\"<?php \$this->getPath('js/jquery.js'); ?>\"> </script>
        <script src=\"<?php \$this->getPath('js/formCheck.js'); ?>\"> </script>
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
        return array (  114 => 36,  100 => 65,  65 => 43,  155 => 53,  152 => 52,  126 => 38,  113 => 9,  104 => 7,  84 => 55,  77 => 37,  58 => 35,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 59,  140 => 55,  132 => 40,  128 => 39,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 55,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 37,  59 => 36,  38 => 6,  94 => 28,  89 => 52,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 18,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 56,  158 => 67,  156 => 66,  151 => 63,  142 => 46,  138 => 54,  136 => 41,  121 => 46,  117 => 10,  105 => 40,  91 => 63,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 42,  72 => 46,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 47,  139 => 45,  131 => 52,  123 => 38,  120 => 37,  115 => 43,  111 => 37,  108 => 36,  101 => 6,  98 => 67,  96 => 31,  83 => 25,  74 => 50,  66 => 29,  55 => 15,  52 => 21,  50 => 19,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 60,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 47,  133 => 45,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 8,  106 => 36,  103 => 32,  99 => 31,  95 => 5,  92 => 60,  86 => 51,  82 => 22,  80 => 54,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 34,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 12,  33 => 4,  30 => 5,);
    }
}

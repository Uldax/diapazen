<?php

/* BdlsProjetBundle:Default:login.html.twig */
class __TwigTemplate_4e0fe4389faeea7a896d3c71bf84dbc016c7d1d00faa26e9401f0be8810f2d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--<?php
/**
 * Page de connexion
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
?>-->

";
        // line 31
        $this->env->loadTemplate("BdlsProjetBundle:Default:header.html.twig")->display($context);
        // line 32
        echo "        
        <div id=\"content\">
            
            <?php 
            \tif(isset(\$infoLogin))
            \t{
            \t\tswitch(\$infoLogin)
            \t\t{
            \t\t\tcase 'connectionError':
            \t\t\t\techo \"<div class='error_message' >Erreur de connexion, le nom d'utilisateur ou le mot de passe est incorrect.</div>\";
            \t\t\t\tbreak;

            \t\t\tcase 'sendPassword':
            \t\t\t\techo \"<div class='success_message' >Votre mot de passe vous a été envoyé, tentez de vous connecter.</div>\";
            \t\t\t\tbreak;

                        case 'sendFailPassword':
                            echo \"<div class='error_message' >Erreur lors de l'envoi de l'email. Nous allons corriger le problème le plus rapidement possible.</div>\";
                            break;
            \t\t}
            \t}
            ?>
            
            <form onsubmit=\"return formCheck(this)\" action=\"<?php \$this->getHomeUrl(); ?>/user/login\" class=\"default_form\" id=\"connect_box_fail\" method=\"post\">
            \t<p class=\"title\" >Réessayer de vous connecter !</p>
                <label for=\"mail_connect_fail\" class=\"text\" >E-mail</label>
\t        \t<input id=\"mail_connect_fail\" name=\"email\" class=\"text_edit\" type=\"mail\" >
\t        \t<label for=\"password_connect_fail\" class=\"text\" >Mot de passe</label>
                <input id=\"password_connect_fail\" name=\"password\" class=\"text_edit\" type=\"password\" >
\t        \t<input class =\"orange_button\" type=\"submit\" value=\"Connexion\">
            </form>
        </div>

";
        // line 65
        $this->env->loadTemplate("BdlsProjetBundle:Default:footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 65,  104 => 62,  20 => 1,  114 => 36,  100 => 65,  84 => 55,  65 => 76,  53 => 32,  70 => 33,  81 => 45,  77 => 36,  58 => 35,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 117,  132 => 40,  128 => 39,  107 => 36,  61 => 46,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 77,  63 => 37,  59 => 36,  38 => 6,  94 => 55,  89 => 20,  85 => 25,  75 => 41,  68 => 14,  56 => 33,  87 => 25,  21 => 1,  26 => 6,  93 => 46,  88 => 65,  78 => 55,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 46,  138 => 54,  136 => 41,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 40,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 40,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 47,  139 => 97,  131 => 52,  123 => 38,  120 => 37,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 50,  66 => 15,  55 => 15,  52 => 31,  50 => 30,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 60,  86 => 28,  82 => 22,  80 => 54,  73 => 34,  64 => 47,  60 => 39,  57 => 11,  54 => 34,  51 => 31,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}

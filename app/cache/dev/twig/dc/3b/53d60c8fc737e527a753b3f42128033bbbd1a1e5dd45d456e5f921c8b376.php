<?php

/* BdlsProjetBundle:Default:ariadneThread.html.twig */
class __TwigTemplate_dc3b53d60c8fc737e527a753b3f42128033bbbd1a1e5dd45d456e5f921c8b376 extends Twig_Template
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
        echo "<?php
/**
 * Fil d'arianne
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
?>

\t\t\t<div style=\"width: <?php echo \$width_ariadne; ?>px;\" id=\"ariadne_thread\"> 
\t\t\t\t<span class=\"<?php echo \$class_create; ?>_ariadne\" ><span></span><span>Création</span><span></span></span>
\t\t\t\t<?php
\t\t\t\tif (isset(\$show_ariadne) && \$show_ariadne == true)
\t\t\t\t{
\t\t\t\t?>
\t\t\t\t<span class=\"<?php echo \$class_connect; ?>_ariadne\" ><span></span><span>Connexion</span><span></span></span>
\t\t\t\t<?php
\t\t\t\t}
\t\t\t\t?>
\t\t\t\t<span class=\"<?php echo \$class_share; ?>_ariadne\" ><span></span><span>Partage</span><span></span></span>
\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:ariadneThread.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  146 => 48,  126 => 16,  113 => 9,  104 => 7,  84 => 44,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 42,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 42,  102 => 32,  71 => 34,  67 => 15,  63 => 29,  59 => 14,  38 => 6,  94 => 28,  89 => 56,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 45,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 46,  138 => 54,  136 => 56,  121 => 46,  117 => 10,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 15,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 6,  98 => 67,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 24,  52 => 21,  50 => 10,  43 => 15,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 8,  106 => 36,  103 => 32,  99 => 31,  95 => 5,  92 => 21,  86 => 28,  82 => 42,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 23,  48 => 13,  45 => 19,  42 => 7,  39 => 9,  36 => 12,  33 => 4,  30 => 5,);
    }
}

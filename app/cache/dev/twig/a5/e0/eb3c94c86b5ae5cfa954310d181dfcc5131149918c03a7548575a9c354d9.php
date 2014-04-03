<?php

/* BdlsProjetBundle:Default:footer.html.twig */
class __TwigTemplate_a5e0eb3c94c86b5ae5cfa954310d181dfcc5131149918c03a7548575a9c354d9 extends Twig_Template
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
 * Footer des pages du site
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

\t\t</div>
\t\t<footer>
\t\t    <ul>
\t\t        <li><a class=\"link\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a class=\"link\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("bdls_projet_about");
        echo "\">À propos</a></li>
\t\t        <!-- <li><a class=\"link\" href=\"#\">Contact</a></li> -->
\t\t    </ul>
\t\t    <!--<p class=\"text\">© <?php echo date('Y'); ?> Diapazen</p>
\t\t    <img id=\"logo_isen\" src=\"<?php \$this->getPath('media/pictures/logo_isen.png'); ?>\" alt=\"ISEN Toulon\">-->
\t\t</footer>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 35,  54 => 34,  19 => 1,  145 => 47,  142 => 46,  136 => 41,  132 => 40,  128 => 39,  123 => 38,  120 => 37,  114 => 36,  100 => 65,  92 => 60,  84 => 55,  80 => 54,  74 => 50,  63 => 37,  59 => 36,  22 => 1,  110 => 65,  104 => 62,  94 => 55,  81 => 45,  75 => 41,  72 => 46,  67 => 77,  65 => 43,  62 => 40,  60 => 39,  20 => 1,);
    }
}

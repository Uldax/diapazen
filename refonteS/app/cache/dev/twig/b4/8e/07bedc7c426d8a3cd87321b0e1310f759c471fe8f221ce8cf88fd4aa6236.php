<?php

/* BdlsProjetBundle:Default:dbError.html.twig */
class __TwigTemplate_b48e07bedc7c426d8a3cd87321b0e1310f759c471fe8f221ce8cf88fd4aa6236 extends Twig_Template
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
 * Page d'erreur de la base de données
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

<?php \$this->getHeader(); ?>
        
        <div id=\"content\">
            <img id=\"broken_diapason\" src=\"<?php \$this->getPath('media/pictures/diapason_broken.png'); ?>\" alt=\"diapason broken\" >
            <div id=\"text_404\">
            \t<p class=\"big_title\" >Erreur interne du serveur</p>
            \t<p class=\"title\" >Nous sommes désolé, une erreur critique est survenue.</p>
            \t<a class=\"link\" href=\"<?php \$this->getHomeUrl(); ?>\">Aller à la page d'accueil</a>
            </div>
        </div>

<?php \$this->getFooter(); ?>";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:dbError.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

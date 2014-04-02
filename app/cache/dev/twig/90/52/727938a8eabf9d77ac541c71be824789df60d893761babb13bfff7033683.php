<?php

/* BdlsProjetBundle:Default:about.html.twig */
class __TwigTemplate_9052727938a8eabf9d77ac541c71be824789df60d893761babb13bfff7033683 extends Twig_Template
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
        echo "<?php
/**
 * Page À propos
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
<!DOCTYPE html>
<html>
\t<head>
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
\t
\t<body>
\t\t";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
        echo "\t</body>
\t
</html>        
        


<?php \$this->getFooter(); ?>
";
    }

    // line 36
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
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

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "\t\t\t<div id=\"content\" class=\"about\">
         
            <p class=\"big_title\">À propos de Diapazen</p>
            <br>
            <p class=\"title\">Présentation</p>
            <br>
            <p class=\"text\">
                Diapazen permet de planifier rapidement des événements avec ses collaborateurs.<br>
            </p>
            <p class=\"text\">C'est un service libre et gratuit réalisé par des étudiants de l'<a class=\"link\" target=\"_blank\" href=\"http://www.isen.fr/toulon.asp\">ISEN-Toulon</a>. Le code source est disponible sur <a class=\"link\" target=\"_blank\" href=\"http://github.com/diapazen/diapazen\">github.com/diapazen</a>.</p>
            <br>
            <p class=\"text\">
                Diapazen utilise les technologies suivantes:<br>
            </p>
            <br>
            <p class=\"text\">
                <ul class=\"text\">
                    <li>
                        - PHP 5
                    </li>
                    <li>
                        - MySQL
                    </li>
                    <li>
                        - HTML5 / CSS3
                    </li>
                    <li>
                        - jQuery 1.9.1
                    </li>
                </ul>
            </p>
            <br>
            <br>
            <p class=\"title\">Prérequis</p>
            <br>
            <p class=\"text\">
                Un serveur web avec PHP 5.2 Recommandé: Apache2
                Le module mod_rewrite de Apache, installé et activé
                Une base de données MySQL avec phpMyAdmin
            </p>
            <br>
            <p class=\"title\">Installation</p>
            <br>
            <p class=\"text\">
                Importer le fichier diapazen.sql dans MySQL. La base de données sera créé automatiquement.

                Ouvrir le fichier de configuration de Diapazen Config.class.php dans le dossier config

                Modifier les paramètres de connexion à la base de données

                Configurer le serveur SMTP pour l'envoi d'emails

                Et c'est tout ! Créez un sondage pour commencer à utiliser Diapazen.
            </p>
            <br>
            <p class=\"title\">Documentation</p>
            <br>
            <p class=\"text\">
                La documentation technique est incluse dans le code source. Pour générer la documentation, vous devez installer phpDocumentator.
            </p>
        
        </div>
\t\t";
    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 111,  121 => 48,  118 => 47,  112 => 41,  108 => 40,  104 => 39,  99 => 38,  96 => 37,  90 => 36,  79 => 112,  76 => 111,  74 => 47,  66 => 43,  64 => 37,  60 => 36,  23 => 1,);
    }
}

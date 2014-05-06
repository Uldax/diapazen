<?php

/* BdlsProjetBundle:Default:about.html.twig */
class __TwigTemplate_f28fc0119625bcb1bb1ec6fe17dbbf6ca1fd3d779766d3db57fa6842f77cb5fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BdlsProjetBundle:Default:layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BdlsProjetBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"content\" class=\"about\">

\t<p class=\"big_title\">À propos de Diapazen</p>
\t<br>
\t<p class=\"title\">Présentation</p>
\t<br>
\t<p class=\"text\">
\t\tDiapazen permet de planifier rapidement des événements avec ses collaborateurs.<br>
\t</p>
\t<p class=\"text\">C'est un service libre et gratuit réalisé par des étudiants de l'<a class=\"link\" target=\"_blank\" href=\"http://www.isen.fr/toulon.asp\">ISEN-Toulon</a>. Le code source est disponible sur <a class=\"link\" target=\"_blank\" href=\"http://github.com/diapazen/diapazen\">github.com/diapazen</a>.</p>
\t<br>
\t<p class=\"text\">
\t\tDiapazen utilise les technologies suivantes:<br>
\t</p>
\t<br>
\t<p class=\"text\">
\t\t<ul class=\"text\">
\t\t\t<li>
\t\t\t\t- PHP 5
\t\t\t</li>
\t\t\t<li>
\t\t\t\t- MySQL
\t\t\t</li>
\t\t\t<li>
\t\t\t\t- HTML5 / CSS3
\t\t\t</li>
\t\t\t<li>
\t\t\t\t- jQuery 1.9.1
\t\t\t</li>
\t\t</ul>
\t</p>
\t<br>
\t<br>
\t<p class=\"title\">Prérequis</p>
\t<br>
\t<p class=\"text\">
\t\tUn serveur web avec PHP 5.2 Recommandé: Apache2
\t\tLe module mod_rewrite de Apache, installé et activé
\t\tUne base de données MySQL avec phpMyAdmin
\t</p>
\t<br>
\t<p class=\"title\">Installation</p>
\t<br>
\t<p class=\"text\">
\t\tImporter le fichier diapazen.sql dans MySQL. La base de données sera créé automatiquement.

\t\tOuvrir le fichier de configuration de Diapazen Config.class.php dans le dossier config

\t\tModifier les paramètres de connexion à la base de données

\t\tConfigurer le serveur SMTP pour l'envoi d'emails

\t\tEt c'est tout ! Créez un sondage pour commencer à utiliser Diapazen.
\t</p>
\t<br>
\t<p class=\"title\">Documentation</p>
\t<br>
\t<p class=\"text\">
\t\tLa documentation technique est incluse dans le code source. Pour générer la documentation, vous devez installer phpDocumentator.
\t</p>

</div>
";
    }

    // line 67
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
        return array (  98 => 67,  32 => 4,  29 => 3,);
    }
}

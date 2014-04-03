<?php

/* BdlsProjetBundle:Default:about.html.twig */
class __TwigTemplate_9052727938a8eabf9d77ac541c71be824789df60d893761babb13bfff7033683 extends Twig_Template
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

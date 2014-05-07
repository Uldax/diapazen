<?php

/* BdlsProjetBundle:Default:about.html.twig */
class __TwigTemplate_42f6077cff74f57989226ef714109ecc14ee097335bb0cb936210b45357fe2a1 extends Twig_Template
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
        echo "    <div id=\"content\" class=\"about hidden-sm hidden-xs\">
        <p class=\"big_title\">À propos de Diapazen</p>
        <br>
        <dl>
            <dt class=\"title\">Présentation</dt>
            <dd class=\"text\">
                    Diapazen permet de planifier rapidement des événements avec ses collaborateurs.<br>
            </dd>
            <dd class=\"text\">
                    C'est un service libre et gratuit réalisé par des étudiants de l'<a class=\"btn btn-link btn-lg link_underline\" target=\"_blank\" href=\"http://www.isen.fr/toulon.asp\">ISEN-Toulon</a>. 
                    Le code source est disponible sur <a class=\"btn btn-link btn-lg link_underline\" target=\"_blank\" href=\"http://github.com/diapazen/diapazen\">github.com/diapazen</a>.
            </dd>
            <br>
            <dd class=\"text\">
                    Diapazen utilise les technologies suivantes:<br>
            </dd>
            <br>
            <dd class=\"text\">
                    <ul class=\"text\" >
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
                </dd>
            </dl>
            <dl>
                <dt class=\"title\">Prérequis</dt>
                <br>
                <dd class=\"text\">
                        Un serveur web avec PHP 5.2 Recommandé: Apache2
                        Le module mod_rewrite de Apache, installé et activé
                        Une base de données MySQL avec phpMyAdmin
                </dd>
            </dl>
            <br>
            <dl>
                <dt class=\"title\">Installation</dt>
                <br>
                <dd class=\"text\">
                        Importer le fichier diapazen.sql dans MySQL. La base de données sera créé automatiquement.

                        Ouvrir le fichier de configuration de Diapazen Config.class.php dans le dossier config

                        Modifier les paramètres de connexion à la base de données

                        Configurer le serveur SMTP pour l'envoi d'emails

                        Et c'est tout ! Créez un sondage pour commencer à utiliser Diapazen.
                </dd>
            </dl>   
            <br>
            <dl>
                <dt class=\"title\">Documentation</dt>
                <br>
                <dd class=\"text\">
                        La documentation technique est incluse dans le code source. Pour générer la documentation, vous devez installer phpDocumentator.
                </dd>
            </dl>
    </div>

    <!-- Version mobile -->
    <div id=\"long_content-xs\" class=\"about visible-sm visible-xs\">
        <p class=\"big_title long_text-xs\">À propos de Diapazen</p>
        <br>
        <dl>
            <dt class=\"title long_text-xs\">Présentation</dt>
            <dd class=\"text long_text-xs\">
                    Diapazen permet de planifier rapidement des événements avec ses collaborateurs.<br>
            </dd>
            <dd class=\"text long_text-xs\">
                    C'est un service libre et gratuit réalisé par des étudiants de l'<a class=\"btn btn-link btn-lg link_underline\" target=\"_blank\" href=\"http://www.isen.fr/toulon.asp\">ISEN-Toulon</a>. 
                    Le code source est disponible sur <a class=\"btn btn-link btn-lg link_underline\" target=\"_blank\" href=\"http://github.com/diapazen/diapazen\">github.com/diapazen</a>.
            </dd>
            <br>
            <dd class=\"text long_text-xs\">
                    Diapazen utilise les technologies suivantes:<br>
            </dd>
            <br>
            <dd class=\"text long_text-xs\">
                    <ul class=\"text long_text-xs\" >
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
                </dd>
            </dl>
            <dl>
                <dt class=\"title long_text-xs\">Prérequis</dt>
                <br>
                <dd class=\"text long_text-xs\">
                        Un serveur web avec PHP 5.2 Recommandé: Apache2
                        Le module mod_rewrite de Apache, installé et activé
                        Une base de données MySQL avec phpMyAdmin
                </dd>
            </dl>
            <br>
            <dl>
                <dt class=\"title long_text-xs\">Installation</dt>
                <br>
                <dd class=\"text long_text-xs\">
                        Importer le fichier diapazen.sql dans MySQL. La base de données sera créé automatiquement.

                        Ouvrir le fichier de configuration de Diapazen Config.class.php dans le dossier config

                        Modifier les paramètres de connexion à la base de données

                        Configurer le serveur SMTP pour l'envoi d'emails

                        Et c'est tout ! Créez un sondage pour commencer à utiliser Diapazen.
                </dd>
            </dl>   
            <br>
            <dl>
                <dt class=\"title long_text-xs\">Documentation</dt>
                <br>
                <dd class=\"text long_text-xs\">
                        La documentation technique est incluse dans le code source. Pour générer la documentation, vous devez installer phpDocumentator.
                </dd>
            </dl>
    </div>
";
    }

    // line 143
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
        return array (  174 => 143,  32 => 4,  29 => 3,);
    }
}

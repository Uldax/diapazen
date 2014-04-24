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
        return array (  150 => 51,  126 => 38,  113 => 9,  104 => 7,  84 => 45,  77 => 37,  58 => 24,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 50,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 18,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 54,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 46,  121 => 46,  117 => 10,  105 => 40,  91 => 61,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 42,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 37,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 6,  98 => 67,  96 => 31,  83 => 25,  74 => 14,  66 => 29,  55 => 15,  52 => 21,  50 => 19,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 58,  164 => 57,  162 => 57,  154 => 53,  149 => 51,  147 => 50,  144 => 49,  141 => 47,  133 => 45,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 8,  106 => 36,  103 => 32,  99 => 31,  95 => 5,  92 => 21,  86 => 49,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 12,  33 => 4,  30 => 5,);
    }
}

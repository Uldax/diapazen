<?php

/* BdlsProjetBundle:Default:home.html.twig */
class __TwigTemplate_42ddf4ee3ed092e0266829d20a9bf06de203f5defff8f3058e9efd5801ffa79b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BdlsProjetBundle:Default:layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t\t\t<div id=\"content\">

\t\t\t\t<article class=\"use_description\" >
\t\t\t\t\t<div class=\"icon_article\" id=\"img_un\">
\t\t\t\t\t\t<img class=\"img_un\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/1_140x140.png"), "html", null, true);
        echo "\" alt=\"1\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Créez votre sondage</h2>
\t\t\t\t\t\t<p class=\"big_text\">Un dîner entre amis à organiser ? Un avis à demander ? Créez votre sondage en un rien de temps selon vos envies.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>

\t\t\t\t<article class=\"use_description\">
\t\t\t\t\t<div class=\"icon_article\" id=\"img_deux\">
\t\t\t\t\t\t<img class=\"img_deux\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/2_140x140.png"), "html", null, true);
        echo "\" alt=\"2\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Ajoutez des propositions</h2>
\t\t\t\t\t\t<p class=\"big_text\">Votre sondage peut comporter le nombre de propositions que vous souhaitez, ajoutez-en ou supprimez-en dynamiquement.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t\t\t
\t\t\t\t<article class=\"use_description\">
\t\t\t\t\t<div class=\"icon_article\" id=\"img_trois\">
\t\t\t\t\t\t<img class=\"img_trois\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/3_140x140.png"), "html", null, true);
        echo "\" alt=\"3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Partagez-le !</h2>
\t\t\t\t\t\t<p class=\"big_text\">Invitez les personnes susceptibles de venir répondre à votre sondage. Après votre inscription, un mail leur sera envoyé pour qu'ils puissent venir faire leur choix.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t\t
\t\t\t\t<article class=\"use_description\">
\t\t\t\t\t<div class=\"icon_article\" id=\"img_quatre\">
\t\t\t\t\t\t<img class=\"img_quatre\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/3_140x140.png"), "html", null, true);
        echo "\" alt=\"3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Choix du type : </h2>
\t\t\t\t\t\t<form action=\"\" method=\"post\" ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t\t    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t\t\t    <input type=\"submit\" class=\"orange_big_button\" value=\"C'est parti !\" />
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</article>

\t\t\t\t<p id=\"asterisk\" class=\"bold\">*Créer un sondage nécessite une inscription, celle-ci peut se faire en même temps que la création de votre sondage</p>
\t\t";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  100 => 65,  65 => 43,  150 => 51,  126 => 38,  113 => 9,  104 => 7,  84 => 42,  77 => 38,  58 => 35,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 40,  128 => 39,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 37,  59 => 36,  38 => 6,  94 => 28,  89 => 50,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 43,  78 => 21,  46 => 18,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 54,  156 => 66,  151 => 63,  142 => 46,  138 => 54,  136 => 41,  121 => 46,  117 => 10,  105 => 40,  91 => 61,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 42,  72 => 46,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 1,  246 => 90,  157 => 56,  145 => 47,  139 => 45,  131 => 52,  123 => 38,  120 => 37,  115 => 43,  111 => 37,  108 => 36,  101 => 6,  98 => 67,  96 => 31,  83 => 25,  74 => 50,  66 => 29,  55 => 15,  52 => 21,  50 => 19,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 58,  164 => 57,  162 => 57,  154 => 53,  149 => 51,  147 => 50,  144 => 49,  141 => 47,  133 => 45,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 8,  106 => 36,  103 => 32,  99 => 31,  95 => 5,  92 => 60,  86 => 49,  82 => 22,  80 => 54,  73 => 19,  64 => 28,  60 => 6,  57 => 11,  54 => 34,  51 => 18,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 12,  33 => 4,  30 => 5,);
    }
}

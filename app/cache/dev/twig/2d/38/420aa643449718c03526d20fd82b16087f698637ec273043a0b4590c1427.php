<?php

/* BdlsProjetBundle:Default:pollCreation.html.twig */
class __TwigTemplate_2d38420aa643449718c03526d20fd82b16087f698637ec273043a0b4590c1427 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"content\">
\t\t<div style=\"width: 2000px;\" id=\"ariadne_thread\"> 
\t\t<span class=\"orange_ariadne\" ><span></span><span>Création</span><span></span></span>
\t\t";
        // line 9
        echo "\t\t\t<span class=\"grey_ariadne\" ><span></span><span>Connexion</span><span></span></span>
\t\t\t";
        // line 12
        echo "\t\t<span class=\"grey_ariadne\" ><span></span><span>Partage</span><span></span></span>
\t\t</div>
\t\t
\t\t<form onsubmit=\"return formCheck(this);\" id=\"poll_creation_form\" class=\"default_form\" action=\"connect\" method=\"post\">
\t\t\t<h1 class=\"small_title\">Votre sondage</h1>
\t\t\t<label for=\"id_title_input\" class=\"text\">Titre<span class=\"asterisc\"> *</span></label>
\t\t\t<input class=\"text_edit\" id=\"id_title_input\" name=\"title_input\" type=\"text\" value=\"\">
\t\t\t<label for=\"datepicker\" class=\"text\">Date limite</label>
\t\t\t<input class=\"text_edit\" name=\"date_input\" readonly id=\"datepicker\">
\t\t\t<label for=\"id_description_input\" class=\"text lbl_textarea\">Description<span class=\"asterisc\"> *</span></label>
\t\t\t<textarea class=\"small_text_edit\" id=\"id_description_input\" maxlength=\"1000\" placeholder=\"1000 carac. maximum.\" name=\"description_input\"></textarea>
\t\t\t<h1 class=\"small_title\">Propositions</h1>
\t\t\t<div id=\"choices\">
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix1\" class=\"text lbl_choice\">Choix 1<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice\" id=\"choix1\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix2\" class=\"text lbl_choice\">Choix 2<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice\" id=\"choix2\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix3\" class=\"text lbl_choice\">Choix 3<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice\" id=\"choix3\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input class=\"orange_button\" type=\"submit\" value=\"Étape suivante\" />
\t\t\t<a class=\"orange_button\" title=\"Ajouter un champ\" id=\"add_choice_button\" type=\"button\" onclick=\"manageChoices(this);\">+</a>
\t\t</form>
\t</div>

\t<!--<script src=\"<?php \$this->getPath('js/script.js'); ?>\"> </script>
\t<script src=\"<?php \$this->getPath('js/jquery-ui-1.10.3.custom.js'); ?>\"></script>-->
\t<script>datepickerLoader();</script>
    ";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:pollCreation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  100 => 66,  84 => 56,  65 => 44,  58 => 15,  155 => 53,  152 => 52,  146 => 47,  118 => 10,  114 => 36,  110 => 8,  90 => 52,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 59,  140 => 42,  132 => 40,  128 => 39,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 55,  143 => 56,  135 => 53,  119 => 42,  102 => 6,  71 => 19,  67 => 31,  63 => 24,  59 => 36,  38 => 6,  94 => 28,  89 => 20,  85 => 47,  75 => 17,  68 => 14,  56 => 9,  87 => 51,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 39,  46 => 19,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 56,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 47,  136 => 41,  121 => 46,  117 => 44,  105 => 7,  91 => 27,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 47,  69 => 27,  47 => 10,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 40,  123 => 38,  120 => 37,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 67,  96 => 5,  83 => 25,  74 => 51,  66 => 15,  55 => 15,  52 => 21,  50 => 20,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 60,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 48,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 11,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 61,  86 => 28,  82 => 22,  80 => 55,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 13,  51 => 12,  48 => 13,  45 => 17,  42 => 9,  39 => 12,  36 => 9,  33 => 4,  30 => 5,);
    }
}

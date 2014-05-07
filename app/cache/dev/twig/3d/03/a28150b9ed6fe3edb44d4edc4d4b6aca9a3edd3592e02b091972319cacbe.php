<?php

/* BdlsProjetBundle:Default:personalData.html.twig */
class __TwigTemplate_3d03a28150b9ed6fe3edb44d4edc4d4b6aca9a3edd3592e02b091972319cacbe extends Twig_Template
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
        echo "\t\t<div id=\"content\">
\t\t\t<?php 
\t\t\t\t//\$data_updated = false;

\t\t\t\tif(isset(\$data_updated)) {
\t\t\t\t\tif(\$data_updated) {
\t\t\t\t\t\t?>
\t\t\t\t\t\t<div class=\"success_message message_personal_data\">Vos données personelles ont été mises à jour avec succés.</div>
\t\t\t\t\t\t<?php
\t\t\t\t\t} else {
\t\t\t\t\t\t?>
\t\t\t\t\t\t<div class=\"error_message message_personal_data\">Erreur, vérifiez les données saisies.</div>
\t\t\t\t\t\t<?php  
\t\t\t\t\t}
\t\t\t\t}
\t\t\t?>
\t\t\t<form onsubmit=\"return formCheck(this)\" id=\"personal_data_form\" class=\"default_form\" action=\"profile\" method=\"post\">
\t\t\t\t<p class=\"big_title\" id=\"title_personnal_data\">Données personnelles</p>
\t\t\t\t<label class=\"text\" for=\"user_lastname\">Nom<span class=\"asterisc\"> *</span></label>
\t\t\t\t<input type=\"text\" id=\"user_lastname\" class=\"text_edit\" value=\"<?php if(isset(\$lastname)){echo \$lastname;}?>\" name=\"lastNameUser\">
\t\t\t\t<label class=\"text\" for=\"user_firstname\">Prénom<span class=\"asterisc\"> *</span></label>
\t\t\t\t<input type=\"text\" id=\"user_firstname\" class=\"text_edit\" value=\"<?php if(isset(\$firstname)){echo \$firstname;}?>\" name=\"firstNameUser\">
\t\t\t\t<label class=\"text\" for=\"user_mail\">E-mail<span class=\"asterisc\"> *</span></label>
\t\t\t\t<input id=\"user_mail\" type=\"mail\" class=\"text_edit\" value=\"<?php if(isset(\$email)){echo \$email;}?>\" name=\"email\">
\t\t\t\t<label class=\"text\" for=\"new_pwd\">Nouveau mot de passe</label>
\t\t\t\t<input type=\"password\" id=\"new_pwd\" class=\"text_edit\" placeholder=\"3 carac. minimum\" name=\"newPassword\">
\t\t\t\t<label class=\"text\" for=\"new_pwd_confirm\">Confirmation</label>
\t\t\t\t<input type=\"password\" id=\"new_pwd_confirm\" class=\"text_edit\" value=\"\" name=\"passwordConfirm\">
\t\t\t\t<br/>
\t\t\t\t<p class=\"orange_text info_box\">Pour confirmer les modifications, entrez votre mot de passe actuel.</p>
\t\t\t\t<label class=\"text\" for=\"pwd_user\">Mot de passe<span class=\"asterisc\"> *</span></label>
\t\t\t\t<input type=\"password\" id=\"pwd_user\" class=\"text_edit\" value=\"\" name=\"password\">
\t\t\t\t<a class=\"grey_button\" href=\"<?php \$this->getHomeUrl(); ?>/dashboard\" >Annuler</a>
\t\t\t\t<input class=\"orange_button\" type=\"submit\" value=\"Modifier\">
\t\t\t</form>    
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:personalData.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  100 => 65,  65 => 43,  167 => 59,  161 => 56,  153 => 53,  150 => 52,  126 => 38,  113 => 9,  104 => 7,  84 => 42,  77 => 38,  58 => 35,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 40,  128 => 39,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 48,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 37,  59 => 36,  38 => 6,  94 => 28,  89 => 52,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 43,  78 => 21,  46 => 18,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 60,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 46,  138 => 47,  136 => 41,  121 => 46,  117 => 10,  105 => 40,  91 => 63,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 42,  72 => 46,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 1,  246 => 90,  157 => 55,  145 => 47,  139 => 45,  131 => 52,  123 => 38,  120 => 37,  115 => 43,  111 => 37,  108 => 36,  101 => 6,  98 => 67,  96 => 31,  83 => 25,  74 => 50,  66 => 29,  55 => 15,  52 => 21,  50 => 19,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 45,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 8,  106 => 36,  103 => 32,  99 => 31,  95 => 5,  92 => 60,  86 => 51,  82 => 22,  80 => 54,  73 => 19,  64 => 28,  60 => 6,  57 => 11,  54 => 34,  51 => 18,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 12,  33 => 4,  30 => 5,);
    }
}

<?php

/* BdlsProjetBundle:Default:personalData.html.twig */
class __TwigTemplate_98aab69480c42dca98c68f5023197ca71a997a49873d00f523c53660ff0ea682 extends Twig_Template
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
        return array (  170 => 101,  148 => 48,  127 => 39,  113 => 36,  65 => 44,  58 => 35,  234 => 82,  228 => 79,  215 => 72,  211 => 127,  205 => 124,  197 => 122,  194 => 64,  178 => 56,  174 => 143,  161 => 50,  150 => 11,  146 => 10,  124 => 5,  104 => 50,  84 => 38,  34 => 6,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 30,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 83,  235 => 74,  230 => 82,  227 => 81,  224 => 78,  221 => 77,  219 => 76,  217 => 130,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 41,  119 => 37,  102 => 32,  71 => 19,  67 => 15,  63 => 37,  59 => 36,  38 => 8,  94 => 28,  89 => 44,  85 => 43,  75 => 34,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 39,  46 => 7,  27 => 4,  44 => 10,  31 => 3,  28 => 2,  201 => 123,  196 => 90,  183 => 58,  171 => 54,  166 => 71,  163 => 62,  158 => 67,  156 => 90,  151 => 63,  142 => 9,  138 => 8,  136 => 56,  121 => 46,  117 => 87,  105 => 40,  91 => 59,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 53,  72 => 47,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 47,  139 => 42,  131 => 40,  123 => 47,  120 => 40,  115 => 64,  111 => 62,  108 => 57,  101 => 32,  98 => 50,  96 => 31,  83 => 54,  74 => 50,  66 => 15,  55 => 15,  52 => 24,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 115,  182 => 66,  176 => 64,  173 => 65,  168 => 53,  164 => 51,  162 => 57,  154 => 12,  149 => 51,  147 => 58,  144 => 49,  141 => 78,  133 => 7,  130 => 6,  125 => 44,  122 => 62,  116 => 59,  112 => 58,  109 => 53,  106 => 52,  103 => 32,  99 => 64,  95 => 28,  92 => 43,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 28,  60 => 6,  57 => 11,  54 => 34,  51 => 18,  48 => 23,  45 => 17,  42 => 7,  39 => 9,  36 => 15,  33 => 4,  30 => 5,);
    }
}

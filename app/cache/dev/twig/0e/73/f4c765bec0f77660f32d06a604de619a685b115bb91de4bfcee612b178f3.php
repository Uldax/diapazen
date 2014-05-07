<?php

/* BdlsProjetBundle:Default:pollCreation.lieu.html.twig */
class __TwigTemplate_0e73f4c765bec0f77660f32d06a604de619a685b115bb91de4bfcee612b178f3 extends Twig_Template
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
\t\t\t<h1 class=\"small_title\">Votre sondage de type ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["nametype"]) ? $context["nametype"] : $this->getContext($context, "nametype")), "html", null, true);
        echo "</h1>
\t\t\t<label for=\"id_title_input\" class=\"text\">Titre<span class=\"asterisc\"> *</span></label>
\t\t\t<input class=\"text_edit\" id=\"id_title_input\" name=\"title_input\" type=\"text\" value=\"\">
\t\t\t<label for=\"datepicker\" class=\"text\">Date limite</label>
\t\t\t<input class=\"text_edit\" name=\"date_input\" id=\"datepicker\" readonly/>
\t\t\t<label for=\"id_description_input\" class=\"text lbl_textarea\">Description<span class=\"asterisc\"> *</span></label>
\t\t\t<textarea class=\"small_text_edit\" id=\"id_description_input\" maxlength=\"1000\" placeholder=\"1000 carac. maximum.\" name=\"description_input\"></textarea>
\t\t\t<h1 class=\"small_title\">Propositions de ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["nametype"]) ? $context["nametype"] : $this->getContext($context, "nametype")), "html", null, true);
        echo "</h1>
\t\t\t<div id=\"choices\">
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix1\" class=\"text lbl_choice\">Choix 1<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice\" id=\"choix1\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this,'";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "');\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix2\" class=\"text lbl_choice\">Choix 2<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice\" id=\"choix2\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this,'";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "');\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix3\" class=\"text lbl_choice\">Choix 3<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice\" id=\"choix3\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this,'";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "');\">x</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input class=\"orange_button\" type=\"submit\" value=\"Étape suivante\" />
\t\t\t<a class=\"orange_button\" title=\"Ajouter un champ\" id=\"add_choice_button\" type=\"button\" onclick=\"manageChoices(this,'";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "');\">+</a>
\t\t</form>
\t</div>

\t<!--<script src=\"<?php \$this->getPath('js/script.js'); ?>\"> </script>
\t<script src=\"<?php \$this->getPath('js/jquery-ui-1.10.3.custom.js'); ?>\"></script>-->
    ";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:pollCreation.lieu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 42,  79 => 38,  71 => 33,  63 => 28,  55 => 23,  45 => 16,  39 => 12,  36 => 9,  31 => 4,  28 => 3,);
    }
}

<?php

/* BdlsProjetBundle:Default:pollCreation.date.html.twig */
class __TwigTemplate_ab3bb350af57844552aea174e0a6a100da937bcb8c21f0074496ecf27ecdac14 extends Twig_Template
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
        echo "\t<div id=\"content\" class=\"hidden-xs\">
\t\t<div id=\"ariadne_thread\"> 
\t\t<span class=\"orange_ariadne\" ><span></span><span>Création</span><span></span></span>
\t\t";
        // line 9
        echo "\t\t\t<span class=\"grey_ariadne\" ><span></span><span>Connexion</span><span></span></span>
\t\t\t";
        // line 12
        echo "\t\t<span class=\"grey_ariadne\" ><span></span><span>Partage</span><span></span></span>
\t\t</div>
\t
\t\t
\t\t
\t\t";
        // line 18
        echo "\t\t<form onsubmit=\"return formCheck(this);\" id=\"poll_creation_form\" class=\"default_form\" action=\"connect\" method=\"post\">
\t\t\t<h1 class=\"small_title\">Votre sondage de type ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["nametype"]) ? $context["nametype"] : $this->getContext($context, "nametype")), "html", null, true);
        echo "</h1>
\t\t\t<label for=\"id_title_input\" class=\"text\">Titre<span class=\"asterisc\"> *</span></label>
\t\t\t<input class=\"text_edit form-control\" id=\"id_title_input\" name=\"title_input\" type=\"text\" value=\"\">
\t\t\t<label for=\"datepicker\" class=\"text\">Date limite</label>
\t\t\t<input class=\"text_edit datepicker\" name=\"date_input\" id=\"datepicker\" readonly=\"true\"/>
\t\t\t<label for=\"id_description_input\" class=\"text lbl_textarea\">Description<span class=\"asterisc\"> *</span></label>
\t\t\t<textarea class=\"small_text_edit form-control\" id=\"id_description_input\" maxlength=\"1000\" placeholder=\"1000 carac. maximum.\" name=\"description_input\"></textarea>
\t\t\t<h1 class=\"small_title\">Propositions de ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nametype"]) ? $context["nametype"] : $this->getContext($context, "nametype")), "html", null, true);
        echo "</h1>
\t\t\t<div id=\"choices\">
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix1\" class=\"text lbl_choice datepick\">Date limite 1<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice datepicker\" id=\"choix1\"  name=\"choices[]\" value=\"\"  readonly=\"true\" />
                                        <a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix2\" class=\"text lbl_choice datepick\">Date limite 2<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice datepicker\" id=\"choix2\"  name=\"choices[]\" value=\"\"  readonly=\"true\" />           
\t\t\t\t\t<a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix3\" class=\"text lbl_choice datepick\">Date limite 3<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice datepicker\" id=\"choix3\"  name=\"choices[]\" value=\"\"  readonly=\"true\" />                                    
\t\t\t\t\t<a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input class=\"btn btn-default orange_button next_step\" type=\"submit\" value=\"Étape suivante\" />
\t\t\t<a class=\"btn btn-default orange_button add_choice_button\" title=\"Ajouter un champ\" id=\"add_choice_button\" type=\"button\" onclick=\"manageChoices(this,'";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "');\">+</a>
\t\t</form>
\t</div>

        <!-- Version Mobile -->
        <div id=\"content_mobile\" class=\"visible-xs\">
                <div id=\"ariadne_thread_mobile\"> 
\t\t<span class=\"orange_ariadne orange_ariadne-xs\" ><span></span><span>Création</span><span></span></span>
\t\t";
        // line 55
        echo "\t\t\t<span class=\"grey_ariadne grey_ariadne-xs\" ><span></span><span>Connexion</span><span></span></span>
\t\t\t";
        // line 58
        echo "\t\t<span class=\"grey_ariadne grey_ariadne-xs\" ><span></span><span>Partage</span><span></span></span>
\t\t</div>
\t
\t\t
\t\t
\t\t";
        // line 64
        echo "\t\t<form onsubmit=\"return formCheck(this);\" id=\"poll_creation_form\" class=\"default_form default_form-xs\" action=\"connect\" method=\"post\">
\t\t\t<h1 class=\"small_title\">Votre sondage de type ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["nametype"]) ? $context["nametype"] : $this->getContext($context, "nametype")), "html", null, true);
        echo "</h1>
\t\t\t<label for=\"id_title_input\" class=\"text\">Titre<span class=\"asterisc\"> *</span></label>
\t\t\t<input class=\"text_edit\" id=\"id_title_input\" name=\"title_input\" type=\"text\" value=\"\">
\t\t\t<label for=\"datepicker\" class=\"text\">Date limite</label>
\t\t\t<input class=\"text_edit datepicker datepicker-xs\" name=\"date_input\" id=\"datepicker\" readonly=\"true\"/>
\t\t\t<label for=\"id_description_input\" class=\"text lbl_textarea\">Description<span class=\"asterisc\"> *</span></label>
\t\t\t<textarea class=\"small_text_edit\" id=\"id_description_input\" maxlength=\"1000\" placeholder=\"1000 carac. maximum.\" name=\"description_input\"></textarea>
\t\t\t<h1 class=\"small_title\">Propositions de ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["nametype"]) ? $context["nametype"] : $this->getContext($context, "nametype")), "html", null, true);
        echo "</h1>
\t\t\t<div id=\"choices\">
\t\t\t\t<div class=\"choice choice-xs\">
\t\t\t\t\t<label for=\"choix1\" class=\"text lbl_choice datepick\">Date limite 1<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice datepicker date-xs\" id=\"choix1_mobile\"  name=\"choices[]\" value=\"\"  readonly=\"true\" />
                                        <a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice choice-xs\">
\t\t\t\t\t<label for=\"choix2\" class=\"text lbl_choice datepick\">Date limite 2<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice datepicker date-xs\" id=\"choix2_mobile\"  name=\"choices[]\" value=\"\"  readonly=\"true\" />           
\t\t\t\t\t<a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice choice-xs\">
\t\t\t\t\t<label for=\"choix3\" class=\"text lbl_choice datepick\">Date limite 3<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice datepicker date-xs\" id=\"choix3_mobile\"  name=\"choices[]\" value=\"\"  readonly=\"true\" />                                    
\t\t\t\t\t<a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input class=\"btn btn-default orange_button next_step-xs\" type=\"submit\" value=\"Étape suivante\" />
\t\t\t<a class=\"btn btn-default orange_button add_choice_button\" title=\"Ajouter un champ\" id=\"add_choice_button\" type=\"button\" onclick=\"manageChoices(this,'";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "');\">+</a>
\t\t</form>
\t</div>
  
    <script src=";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/sondage_date.js"), "html", null, true);
        echo "> </script>
    ";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:pollCreation.date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 95,  137 => 91,  115 => 72,  105 => 65,  102 => 64,  95 => 58,  92 => 55,  81 => 45,  59 => 26,  49 => 19,  46 => 18,  39 => 12,  36 => 9,  31 => 4,  28 => 3,);
    }
}

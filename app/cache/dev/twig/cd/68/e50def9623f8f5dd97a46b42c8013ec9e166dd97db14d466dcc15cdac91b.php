<?php

/* BdlsProjetBundle:Default:pollCreation.html.twig */
class __TwigTemplate_cd68e50def9623f8f5dd97a46b42c8013ec9e166dd97db14d466dcc15cdac91b extends Twig_Template
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
\t\t
\t\t<form onsubmit=\"return formCheck(this);\" id=\"poll_creation_form\" class=\"default_form\" action=\"connect\" method=\"post\">
\t\t\t<h1 class=\"small_title\">Votre sondage</h1>
\t\t\t<label for=\"id_title_input\" class=\"text\">Titre<span class=\"asterisc\"> *</span></label>
\t\t\t<input class=\"text_edit form-control\" id=\"id_title_input\" name=\"title_input\" type=\"text\" value=\"\">
\t\t\t<label for=\"datepicker\" class=\"text\">Date limite</label>
\t\t\t<input class=\"text_edit datepicker\" name=\"date_input\" readonly id=\"datepicker\">
\t\t\t<label for=\"id_description_input\" class=\"text lbl_textarea\">Description<span class=\"asterisc\"> *</span></label>
\t\t\t<textarea class=\"small_text_edit form-control\" id=\"id_description_input\" maxlength=\"1000\" placeholder=\"1000 carac. maximum.\" name=\"description_input\"></textarea>
\t\t\t<h1 class=\"small_title\">Propositions</h1>
\t\t\t<div id=\"choices\">
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix1\" class=\"text lbl_choice\">Choix 1<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix1\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix2\" class=\"text lbl_choice\">Choix 2<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix2\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix3\" class=\"text lbl_choice\">Choix 3<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix3\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t</div>
                        <div>
                            <input class=\"btn btn-default orange_button next_step\" type=\"submit\" value=\"Étape suivante\" />
                            <a class=\"btn btn-default orange_button add_choice_button\" title=\"Ajouter un champ\" id=\"add_choice_button\" type=\"button\" onclick=\"manageChoices(this);\">+</a>
                        </div>
                </form>
\t</div>
        
        <!-- Version Mobile -->
        <div id=\"long_content-xs\" class=\"visible-xs\">
\t\t<div id=\"ariadne_thread-xs\"> 
\t\t<span class=\"orange_ariadne orange_ariadne-xs\" ><span></span><span>Création</span><span></span></span>
\t\t";
        // line 54
        echo "\t\t\t<span class=\"grey_ariadne grey_ariadne-xs\" ><span></span><span>Connexion</span><span></span></span>
\t\t\t";
        // line 57
        echo "\t\t<span class=\"grey_ariadne grey_ariadne-xs\" ><span></span><span>Partage</span><span></span></span>
\t\t</div>
\t\t
\t\t<form onsubmit=\"return formCheck(this);\" id=\"poll_creation_form\" class=\"default_form-xs\" action=\"connect\" method=\"post\">
\t\t\t<h1 class=\"small_title\">Votre sondage</h1>
\t\t\t<label for=\"id_title_input\" class=\"text\">Titre<span class=\"asterisc\"> *</span></label>
\t\t\t<input class=\"text_edit form-control\" id=\"id_title_input\" name=\"title_input\" type=\"text\" value=\"\">
\t\t\t<label for=\"datepicker\" class=\"text\">Date limite</label>
\t\t\t<input class=\"text_edit datepicker-xs\" name=\"date_input\" readonly id=\"datepicker\">
\t\t\t<label for=\"id_description_input\" class=\"text lbl_textarea\">Description<span class=\"asterisc\"> *</span></label>
\t\t\t<textarea class=\"small_text_edit form-control\" id=\"id_description_input\" maxlength=\"1000\" placeholder=\"1000 carac. maximum.\" name=\"description_input\"></textarea>
\t\t\t<h1 class=\"small_title\">Propositions</h1>
\t\t\t<div id=\"choices\">
\t\t\t\t<div class=\"choice choice-xs\">
\t\t\t\t\t<label for=\"choix1\" class=\"text lbl_choice\">Choix 1<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix1\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice choice-xs\">
\t\t\t\t\t<label for=\"choix2\" class=\"text lbl_choice\">Choix 2<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix2\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice choice-xs\">
\t\t\t\t\t<label for=\"choix3\" class=\"text lbl_choice\">Choix 3<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix3\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input class=\"btn btn-default orange_button next_step-xs\" type=\"submit\" value=\"Étape suivante\" />
\t\t\t<a class=\"btn btn-default orange_button add_choice_button-xs\" title=\"Ajouter un champ\" id=\"add_choice_button\" type=\"button\" onclick=\"manageChoices(this);\">+</a>
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
        return array (  84 => 57,  81 => 54,  39 => 12,  36 => 9,  31 => 4,  28 => 3,);
    }
}

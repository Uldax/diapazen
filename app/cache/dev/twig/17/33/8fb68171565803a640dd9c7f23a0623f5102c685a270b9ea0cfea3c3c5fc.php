<?php

/* BdlsProjetBundle:Default:pollCreation.lieu.html.twig */
class __TwigTemplate_17338fb68171565803a640dd9c7f23a0623f5102c685a270b9ea0cfea3c3c5fc extends Twig_Template
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
\t\t\t<h1 class=\"small_title\">Votre sondage de type ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["nametype"]) ? $context["nametype"] : $this->getContext($context, "nametype")), "html", null, true);
        echo "</h1>
\t\t\t<label for=\"id_title_input\" class=\"text\">Titre<span class=\"asterisc\"> *</span></label>
\t\t\t<input class=\"text_edit form-control\" id=\"id_title_input\" name=\"title_input\" type=\"text\" value=\"\">
\t\t\t<label for=\"datepicker\" class=\"text \">Date limite</label>
\t\t\t<input class=\"text_edit datepicker\" name=\"date_input\" id=\"datepicker\" readonly/>
\t\t\t<label for=\"id_description_input\" class=\"text lbl_textarea\">Description<span class=\"asterisc\"> *</span></label>
\t\t\t<textarea class=\"small_text_edit form-control\" id=\"id_description_input\" maxlength=\"1000\" placeholder=\"1000 carac. maximum.\" name=\"description_input\"></textarea>
\t\t\t<h1 class=\"small_title\">Propositions de ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["nametype"]) ? $context["nametype"] : $this->getContext($context, "nametype")), "html", null, true);
        echo "</h1>
\t\t\t<div id=\"choices\">
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix1\" class=\"text lbl_choice\">Choix 1<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix1\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<input type=\"button\" value=\"V\" class=\"valid btn btn-default green_button\" onClick=\"codeAddress(choix1);\">
                                        <a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix2\" class=\"text lbl_choice\">Choix 2<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix2\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<input type=\"button\" value=\"V\" class=\"valid btn btn-default green_button\" onClick=\"codeAddress(choix2);\">
                                        <a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice\">
\t\t\t\t\t<label for=\"choix3\" class=\"text lbl_choice\">Choix 3<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix3\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<input type=\"button\" value=\"V\" class=\"valid btn btn-default green_button\" onClick=\"codeAddress(choix3);\">
                                        <a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t
                    <!-- Map google -->
                   <div id=\"map-canvas\" class=\"map\"></div>
                   
                   <input class=\"btn btn-default orange_button next_step\" type=\"submit\" value=\"Étape suivante\" />
                   <a class=\"btn btn-default orange_button add_choice_button\" title=\"Ajouter un champ\" id=\"add_choice_button\" type=\"button\" onclick=\"manageChoices(this,'";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "');\">+</a>
                </form> 
                
\t</div>

        <!-- Version Mobile -->
        <div id=\"long_content-xs\" class=\"visible-xs\">
\t\t<div id=\"ariadne_thread-xs\"> 
\t\t<span class=\"orange_ariadne orange_ariadne-xs\" ><span></span><span>Création</span><span></span></span>
\t\t";
        // line 62
        echo "\t\t\t<span class=\"grey_ariadne grey_ariadne-xs\" ><span></span><span>Connexion</span><span></span></span>
\t\t\t";
        // line 65
        echo "\t\t<span class=\"grey_ariadne grey_ariadne-xs\" ><span></span><span>Partage</span><span></span></span>
\t\t</div>

\t\t
\t\t<form onsubmit=\"return formCheck(this);\" id=\"poll_creation_form\" class=\"default_form default_form-xs\" action=\"connect\" method=\"post\">
\t\t\t<h1 class=\"small_title\">Votre sondage de type ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["nametype"]) ? $context["nametype"] : $this->getContext($context, "nametype")), "html", null, true);
        echo "</h1>
\t\t\t<label for=\"id_title_input\" class=\"text\">Titre<span class=\"asterisc\"> *</span></label>
\t\t\t<input class=\"text_edit form-control\" id=\"id_title_input\" name=\"title_input\" type=\"text\" value=\"\">
\t\t\t<label for=\"datepicker\" class=\"text \">Date limite</label>
\t\t\t<input class=\"datepicker text_edit datepicker-xs\" name=\"date_input\" id=\"datepicker\" readonly/>
\t\t\t<label for=\"id_description_input\" class=\"text lbl_textarea\">Description<span class=\"asterisc\"> *</span></label>
\t\t\t<textarea class=\"small_text_edit form-control\" id=\"id_description_input\" maxlength=\"1000\" placeholder=\"1000 carac. maximum.\" name=\"description_input\"></textarea>
\t\t\t<h1 class=\"small_title\">Propositions de ";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["nametype"]) ? $context["nametype"] : $this->getContext($context, "nametype")), "html", null, true);
        echo "</h1>
\t\t\t<div id=\"choices\" class=\"choice_map\">
\t\t\t\t<div class=\"choice choice-xs choice_map-xs\">
\t\t\t\t\t<label for=\"choix1\" class=\"text lbl_choice\">Choix 1<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix1\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<input type=\"button\" value=\"V\" class=\"valid btn btn-default green_button\" onClick=\"codeAddress(choix1);\">
                                        <a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice choice-xs choice_map-xs\">
\t\t\t\t\t<label for=\"choix2\" class=\"text lbl_choice\">Choix 2<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix2\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<input type=\"button\" value=\"V\" class=\"valid btn btn-default green_button\" onClick=\"codeAddress(choix2);\">
                                        <a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"choice choice-xs choice_map-xs\">
\t\t\t\t\t<label for=\"choix3\" class=\"text lbl_choice\">Choix 3<span class=\"asterisc\"> *</span></label>
\t\t\t\t\t<input class=\"text_edit input_choice form-control\" id=\"choix3\" type=\"text\" name=\"choices[]\" value=\"\" />
\t\t\t\t\t<input type=\"button\" value=\"V\" class=\"valid btn btn-default green_button\" onClick=\"codeAddress(choix3);\">
                                        <a class=\"btn btn-default grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
\t\t\t\t</div>
\t\t\t</div>
                   
                   <input class=\"btn btn-default orange_button next_step_map-xs\" type=\"submit\" value=\"Étape suivante\" />
                   <a class=\"btn btn-default orange_button add_choice_button\" title=\"Ajouter un champ\" id=\"add_choice_button\" type=\"button\" onclick=\"manageChoices(this,'";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "');\">+</a>
                </form> 
                
\t</div>

    <!-- Chargement de l'API google map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCNOpHpuGzB9PguOdh3naoMxPzBhOonyo4&v=3.exp&sensor=false\"></script>
    <!-- Chargement de place API pour l'autocomplétion de l'input\" -->
    <script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?libraries=places&amp;sensor=false\"></script>
    <script src=";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/sondage_map.js"), "html", null, true);
        echo "> </script>
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
        return array (  156 => 109,  144 => 100,  118 => 77,  108 => 70,  101 => 65,  98 => 62,  86 => 51,  56 => 24,  46 => 17,  39 => 12,  36 => 9,  31 => 4,  28 => 3,);
    }
}

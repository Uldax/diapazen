<?php

/* BdlsProjetBundle:Default:pollCreation.html.twig */
class __TwigTemplate_406ffb10603d80852408e5ba34069ce27c7488368c50f119b03e7577431c29dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BdlsProjetBundle:Default:layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'span' => array($this, 'block_span'),
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
        echo "\t";
        $this->displayBlock('span', $context, $blocks);
        // line 16
        echo "        <div id=\"content\">
            ";
        // line 18
        echo "            <form onsubmit=\"return formCheck(this);\" id=\"poll_creation_form\" class=\"default_form\" action=\"connect\" method=\"post\">
                <h1 class=\"small_title\">Votre sondage</h1>
                <label for=\"id_title_input\" class=\"text\">Titre<span class=\"asterisc\"> *</span></label>
                <input class=\"text_edit\" id=\"id_title_input\" name=\"title_input\" type=\"text\" value=\"\">
                <label for=\"datepicker\" class=\"text\">Date limite</label>
                <input class=\"text_edit\" name=\"date_input\" readonly id=\"datepicker\">
                <label for=\"id_description_input\" class=\"text lbl_textarea\">Description<span class=\"asterisc\"> *</span></label>
                <textarea class=\"small_text_edit\" id=\"id_description_input\" maxlength=\"1000\" placeholder=\"1000 carac. maximum.\" name=\"description_input\"></textarea>
                <h1 class=\"small_title\">Propositions</h1>
                <div id=\"choices\">
                    <div class=\"choice\">
                        <label for=\"choix1\" class=\"text lbl_choice\">Choix 1<span class=\"asterisc\"> *</span></label>
                        <input class=\"text_edit input_choice\" id=\"choix1\" type=\"text\" name=\"choices[]\" value=\"\" />
                        <a class=\"grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
                    </div>
                    <div class=\"choice\">
                        <label for=\"choix2\" class=\"text lbl_choice\">Choix 2<span class=\"asterisc\"> *</span></label>
                        <input class=\"text_edit input_choice\" id=\"choix2\" type=\"text\" name=\"choices[]\" value=\"\" />
                        <a class=\"grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
                    </div>
                    <div class=\"choice\">
                        <label for=\"choix3\" class=\"text lbl_choice\">Choix 3<span class=\"asterisc\"> *</span></label>
                        <input class=\"text_edit input_choice\" id=\"choix3\" type=\"text\" name=\"choices[]\" value=\"\" />
                        <a class=\"grey_button\" title=\"Supprimer\" type=\"button\" onclick=\"manageChoices(this);\">x</a>
                    </div>
                </div>
                <input class=\"orange_button\" type=\"submit\" value=\"Étape suivante\" />
                <a class=\"orange_button\" title=\"Ajouter un champ\" id=\"add_choice_button\" type=\"button\" onclick=\"manageChoices(this);\">+</a>
            </form>
        </div>
\t\t
        <!--<script src=\"<?php \$this->getPath('js/script.js'); ?>\"> </script>
        <script src=\"<?php \$this->getPath('js/jquery-ui-1.10.3.custom.js'); ?>\"></script>-->
        <script>datepickerLoader();</script>
    ";
    }

    // line 4
    public function block_span($context, array $blocks = array())
    {
        // line 5
        echo "\t<div style=\"width: 200px;\" id=\"ariadne_thread\"> 
\t\t<span class=\"ariane_ariadne\" ><span></span><span>Création</span><span></span></span>
\t\t";
        // line 7
        if (array_key_exists("show_ariadne", $context)) {
            // line 8
            echo "\t\t\t";
            if (($this->getContext($context, "show_ariadne") == true)) {
                // line 9
                echo "\t\t\t<span class=\"connect_ariadne\" ><span></span><span>Connexion</span><span></span></span>
\t\t\t";
            }
            // line 11
            echo "\t\t";
        }
        // line 12
        echo "\t\t?>
\t\t<span class=\"share_ariadne\" ><span></span><span>Partage</span><span></span></span>
\t</div>
\t\t";
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
        return array (  95 => 12,  92 => 11,  88 => 9,  85 => 8,  83 => 7,  79 => 5,  76 => 4,  38 => 18,  35 => 16,  32 => 4,  29 => 3,);
    }
}

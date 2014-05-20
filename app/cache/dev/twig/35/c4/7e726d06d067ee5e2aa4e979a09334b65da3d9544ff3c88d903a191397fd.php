<?php

/* BdlsProjetBundle:Default:pollConnection.html.twig */
class __TwigTemplate_35c47e726d06d067ee5e2aa4e979a09334b65da3d9544ff3c88d903a191397fd extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
\t\t<div id=\"content\">
            ";
        // line 6
        echo "                ";
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) == "err")) {
            // line 7
            echo "                    <div class='error_message bg-danger' >Erreur de connexion, le nom d'utilisateur ou le mot de passe est incorrect.</div><br>
\t\t\t\t\t";
            // line 15
            echo "\t\t\t\t";
        }
        // line 16
        echo "                <div id=\"ariadne_thread\"> 
                        <span class=\"grey_ariadne\" ><span></span><span>Création</span><span></span></span>
                        <span class=\"orange_ariadne\" ><span></span><span>Connexion</span><span></span></span>
                        <span class=\"grey_ariadne\" ><span></span><span>Partage</span><span></span></span>
\t\t</div>
\t\t\t\t\t
            <form onsubmit=\"return formCheck(this)\" action=\"share\" method=\"post\" class=\"default_form\" id=\"poll_connection_form\">
                <label for=\"registered\" class=\"text label_chkbox\"><input id=\"registered\" value=\"registered\" type=\"radio\" name=\"account\" checked=\"checked\" onchange=\"manageConnectionForm(this)\">J'ai déjà un compte</label>
                <label for=\"not_registered\" class=\"text label_chkbox\"><input onchange=\"manageConnectionForm(this)\" id=\"not_registered\" value=\"not_registered\" type=\"radio\" name=\"account\">C'est rapide, je m'inscris</label>
                <label for=\"email\" class=\"text\">E-mail<span class=\"asterisc\"> *</span></label>
                <input class=\"text_edit form-control\" id=\"email\" name=\"email\" type=\"mail\" placeholder=\"\" value=\"\">
                <label for=\"firstname_user\" class=\"text infos_user\">Prénom<span class=\"asterisc\"> *</span></label>
                <input class=\"text_edit infos_user form-control\" id=\"firstname_user\" name=\"firstNameUser\" type=\"text\">
                <label for=\"name_user\" class=\"text infos_user\">Nom<span class=\"asterisc\"> *</span></label>
                <input class=\"text_edit infos_user form-control\" id=\"lastname_user\" name=\"lastNameUser\" type=\"text\">
                <label for=\"pwd_user\" class=\"text\">Mot de passe<span class=\"asterisc\"> *</span></label>
                <input class=\"text_edit form-control\" id=\"pwd_user\" type=\"password\" name=\"password\" placeholder=\"\" value=\"\">
                <p class=\"orange_text info_box infos_user\">Un mot de passe vous sera envoyé à l'adresse e-mail renseignée.</p>
                <input class=\"btn btn-default orange_button next_step\" type=\"submit\" value=\"Étape suivante\"/>
            </form>
        </div>

\t";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "\t";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/js/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:pollConnection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 40,  78 => 39,  75 => 38,  71 => 42,  69 => 38,  45 => 16,  42 => 15,  39 => 7,  36 => 6,  32 => 3,  29 => 2,);
    }
}

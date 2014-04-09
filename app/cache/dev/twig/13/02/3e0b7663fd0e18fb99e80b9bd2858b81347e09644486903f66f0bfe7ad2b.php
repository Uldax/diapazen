<?php

/* BdlsProjetBundle:Default:forgot.html.twig */
class __TwigTemplate_13023e0b7663fd0e18fb99e80b9bd2858b81347e09644486903f66f0bfe7ad2b extends Twig_Template
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
        echo "        <div id=\"content\">
            <?php
                if(isset(\$err)) {
                    if(\$err == 'mailempty') {
                        ?>
                        <div class=\"error_message message_personal_data\">Veuillez saisir votre adresse mail.</div>
                        <?php
                    }
                    elseif (\$err == 'mailnotfound') {
                        ?>
                        <div class=\"error_message message_personal_data\">Aucun utilisateur ne correspond à cette adresse email.</div>
                        <?php
                    }
                }
            ?>  
            <form onsubmit=\"return formCheck(this)\" id=\"form_forgot\" action=\"<?php \$this->getHomeUrl(); ?>/user/forgot\" class=\"default_form\" method=\"post\">
            \t<p class=\"orange_text info_box\" >Entrez votre e-mail pour reçevoir un nouveau mot de passe.</p>
\t        \t<label for=\"mailRetrieve\" class=\"text\">E-mail<span class=\"asterisc\"> *</span></label>
\t        \t<input type=\"mail\" id=\"mailRetrieve\" name=\"email\" class=\"text_edit\" >
\t        \t<input class =\"orange_button\" type=\"submit\" value=\"Envoyer\">
            </form>
        </div>
\t";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:forgot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}

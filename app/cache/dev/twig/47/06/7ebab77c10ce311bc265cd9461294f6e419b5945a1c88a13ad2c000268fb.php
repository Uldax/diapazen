<?php

/* BdlsProjetBundle:Default:pollShare.html.twig */
class __TwigTemplate_47067ebab77c10ce311bc265cd9461294f6e419b5945a1c88a13ad2c000268fb extends Twig_Template
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
            <div style=\"width: 2000px;\" id=\"ariadne_thread\"> 
\t\t\t<span class=\"grey_ariadne\" ><span></span><span>Création</span><span></span></span>
\t\t\t";
        // line 8
        echo "\t\t\t\t<span class=\"grey_ariadne\" ><span></span><span>Connexion</span><span></span></span>
\t\t\t\t";
        // line 11
        echo "\t\t\t<span class=\"orange_ariadne\" ><span></span><span>Partage</span><span></span></span>
\t\t\t</div>
\t\t\t
            <form onsubmit=\"return formCheck(this)\" id=\"share_form\" class=\"default_form\" method=\"post\" action=\"<?php \$this->getHomeUrl(); ?>/poll/sent\">
                <h2 class=\"title\">Votre sondage a bien été créé !</h2>
                <h3 class=\"small_title\">Lien du sondage</h3>
                <label class=\"text\" for=\"poll_link\" >Lien</label>
                <input name=\"poll_link\" type=\"text\" id=\"poll_link\" class=\"text_edit\" readonly onClick=\"this.select();\" value=\"lien\" />";
        // line 19
        echo "                <h3 class=\"small_title\">Partagez ce lien par e-mail</h3>
                <label class=\"text lbl_textarea\" for=\"mails\">E-mails</label>
                <textarea class=\"small_text_edit\" id=\"mails\" name=\"mails\" placeholder=\"mail.example@mail.com                                             Séparer les adresses par ; ou , ou retour à la ligne\"></textarea>
                <input class=\"orange_button\" type=\"submit\" value=\"Partager\">
                <a class=\"orange_button\" href=\"<?php echo \$this->getHomeUrl().'/p/'.\$pollUrl; ?>\">Voir le sondage</a>
            </form>
        </div>
\t";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:pollShare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  39 => 11,  36 => 8,  31 => 3,  28 => 2,);
    }
}

<?php

/* BdlsProjetBundle:Default:home.html.twig */
class __TwigTemplate_2f9ad092e1e872ca3ac4d86b24a43e9a2d5086be127a5afd974d3ed6a04f6b62 extends Twig_Template
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
        echo "\t\t\t<div id=\"content\">

\t\t\t\t<article class=\"use_description\" >
\t\t\t\t\t<div class=\"icon_article\" id=\"img_un\">
\t\t\t\t\t\t<img class=\"img_un\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/1_140x140.png"), "html", null, true);
        echo "\" alt=\"1\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Créez votre sondage</h2>
\t\t\t\t\t\t<p class=\"big_text\">Un dîner entre amis à organiser ? Un avis à demander ? Créez votre sondage en un rien de temps selon vos envies.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t\t<article class=\"use_description\">
\t\t\t\t\t<div class=\"icon_article\" id=\"img_deux\">
\t\t\t\t\t\t<img class=\"img_deux\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/2_140x140.png"), "html", null, true);
        echo "\" alt=\"2\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Ajoutez des propositions</h2>
\t\t\t\t\t\t<p class=\"big_text\">Votre sondage peut comporter le nombre de propositions que vous souhaitez, ajoutez-en ou supprimez-en dynamiquement.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t\t\t<a id=\"create_survey\" class=\"btn btn-default orange_button\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("bdls_projet_creation");
        echo "\">C'est parti !</a>
\t\t\t\t<article class=\"use_description\">
\t\t\t\t\t<div class=\"icon_article\" id=\"img_trois\">
\t\t\t\t\t\t<img class=\"img_trois\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/3_140x140.png"), "html", null, true);
        echo "\" alt=\"3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Partagez-le !</h2>
\t\t\t\t\t\t<p class=\"big_text\">Invitez les personnes susceptibles de venir répondre à votre sondage. Après votre inscription, un mail leur sera envoyé pour qu'ils puissent venir faire leur choix.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>

\t\t\t\t<p id=\"asterisk\" class=\"bold\">*Créer un sondage nécessite une inscription, celle-ci peut se faire en même temps que la création de votre sondage</p>
                        </div>
\t\t";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 26,  59 => 23,  49 => 16,  37 => 7,  31 => 3,  28 => 2,);
    }
}

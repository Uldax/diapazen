<?php

/* BdlsProjetBundle:Default:home.html.twig */
class __TwigTemplate_d59ffc49410e021f135bf2026f0436a072eb2437b46da1782cee263124f803a3 extends Twig_Template
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
\t\t\t\t\t\t<img class=\"img_un img-circle\" src=\"";
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
\t\t\t\t\t\t<img class=\"img_deux img-circle\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/2_140x140.png"), "html", null, true);
        echo "\" alt=\"2\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Ajoutez des propositions</h2>
\t\t\t\t\t\t<p class=\"big_text\">Votre sondage peut comporter le nombre de propositions que vous souhaitez, ajoutez-en ou supprimez-en dynamiquement.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t\t\t
\t\t\t\t<article class=\"use_description\">
\t\t\t\t\t<div class=\"icon_article\" id=\"img_trois\">
\t\t\t\t\t\t<img class=\"img_trois img-circle\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/3_140x140.png"), "html", null, true);
        echo "\" alt=\"3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Partagez-le !</h2>
\t\t\t\t\t\t<p class=\"big_text\">Invitez les personnes susceptibles de venir répondre à votre sondage. Après votre inscription, un mail leur sera envoyé pour qu'ils puissent venir faire leur choix.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>
                                
                                
\t\t\t\t<p id=\"asterisk\" class=\"bold\">*Créer un sondage nécessite une inscription, celle-ci peut se faire en même temps que la création de votre sondage</p>
                                
                                <!-- Select -->
                                <div class=\"div_choix\">
                                    <div class=\"btn-group styled_select_div\">
                                      <!-- Boutton du Select -->
                                      <span class=\"btn btn-default styled_select\" data-toggle=\"dropdown\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_autre.png"), "html", null, true);
        echo "\" class=\"img_option\">Autre</span>
                                      <button type=\"button\" class=\"btn btn-default dropdown-toggle styled_select_button\" data-toggle=\"dropdown\">
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">Toggle Dropdown</span>
                                      </button>
                                      <!-- Liste des éléments -->
                                      <ul class=\"dropdown-menu list_select\" role=\"menu\">
                                        <li class=\"list_option\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_autre.png"), "html", null, true);
        echo "\" class=\"img_option\">Autre</li>
                                        <li class=\"list_option\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_map.png"), "html", null, true);
        echo "\" class=\"img_option\">Lieux</li>
                                        <li class=\"list_option\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_calendrier.png"), "html", null, true);
        echo "\" class=\"img_option\">Date</li>
                                      </ul>
                                    </div>
                                    <a id=\"create_survey\" class=\"btn btn-default orange_button styled_select_div\" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("bdls_projet_creation");
        echo "\">C'est parti !</a>
                                </div>
                                
                                <!-- -->
                                
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
        return array (  105 => 54,  99 => 51,  95 => 50,  91 => 49,  81 => 42,  63 => 27,  50 => 17,  37 => 7,  31 => 3,  28 => 2,);
    }
}

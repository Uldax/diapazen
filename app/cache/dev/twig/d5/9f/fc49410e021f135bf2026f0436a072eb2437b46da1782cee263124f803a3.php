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
        echo "\t\t\t<div id=\"content\" class=\"hidden-xs\">
\t\t\t\t<article class=\"use_description\" >
\t\t\t\t\t<div class=\"icon_article col-xs-2\" id=\"img_un\">
\t\t\t\t\t\t<img class=\"img_un img-circle\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/1_140x140.png"), "html", null, true);
        echo "\" alt=\"1\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text_article\">
                                            <h2 class=\"big_title\">Créez votre <br class=\"visible-xs\" />sondage</h2>
                                            <p class=\"big_text hidden-xs\">Un dîner entre amis à organiser ? Un avis à demander ? Créez votre sondage en un rien de temps selon vos envies.</p>
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
\t\t\t\t\t\t<h2 class=\"big_title\">Ajoutez des <br class=\"visible-xs\" />propositions</h2>
\t\t\t\t\t\t<p class=\"big_text hidden-xs\">Votre sondage peut comporter le nombre de propositions que vous souhaitez, ajoutez-en ou supprimez-en dynamiquement.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>
                                
\t\t\t\t<article class=\"use_description\">
\t\t\t\t\t<div class=\"icon_article\" id=\"img_trois\">
\t\t\t\t\t\t<img class=\"img_trois img-circle\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/3_140x140.png"), "html", null, true);
        echo "\" alt=\"3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title\">Partagez-le !</h2>
\t\t\t\t\t\t<p class=\"big_text hidden-xs\">Invitez les personnes susceptibles de venir répondre à votre sondage. Après votre inscription, un mail leur sera envoyé pour qu'ils puissent venir faire leur choix.</p>
\t\t\t\t\t</div>
\t\t\t\t</article>
                               
\t\t\t\t<p id=\"asterisk\" class=\"bold\">*Créer un sondage nécessite une inscription, celle-ci peut se faire en même temps que <br class=\"visible-xs\" />la création de votre sondage</p>
                                
                                <!-- Select -->
                                <div class=\"div_choix\">
                                    <div class=\"btn-group styled_select_div\">
                                      <!-- Boutton du Select -->
                                      <span class=\"btn btn-default styled_select\" data-toggle=\"dropdown\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_autre.png"), "html", null, true);
        echo "\" class=\"img_option\">Autre</span>
                                      <button type=\"button\" class=\"btn btn-default dropdown-toggle styled_select_button\" data-toggle=\"dropdown\">
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">Toggle Dropdown</span>
                                      </button>
                                      <!-- Liste des éléments -->
                                      <ul class=\"dropdown-menu list_select\" role=\"menu\">
                                        <li class=\"list_option\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_autre.png"), "html", null, true);
        echo "\" class=\"img_option\">Autre</li>
                                        <li class=\"list_option\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_map.png"), "html", null, true);
        echo "\" class=\"img_option\">Lieux</li>
                                        <li class=\"list_option\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_calendrier.png"), "html", null, true);
        echo "\" class=\"img_option\">Date</li>
                                      </ul>
                                    </div>
                                    <a id=\"create_survey\" class=\"btn btn-default orange_button styled_a_div\" href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("bdls_projet_creation");
        echo "\">C'est parti !</a>
                                </div>
                        </div>

                        <div id=\"content-xs\" class=\"visible-xs\">
\t\t\t\t<article class=\"use_description\" >
\t\t\t\t\t<div class=\"icon_article\" id=\"img_un\">
\t\t\t\t\t\t<img class=\"img_un img-circle\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/1_140x140.png"), "html", null, true);
        echo "\" alt=\"1\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text_article\">
                                            <h2 class=\"big_title_xs\">Créez votre sondage</h2>
\t\t\t\t\t</div>
                                        <p class=\"big_text text-xs\">Un dîner entre amis à organiser ? Un avis à demander ? Créez votre sondage en un rien de temps selon vos envies.</p>
\t\t\t\t</article>
                                
                            
\t\t\t\t<article class=\"use_description\">
\t\t\t\t\t<div class=\"icon_article\" id=\"img_deux\">
\t\t\t\t\t\t<img class=\"img_deux img-circle\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/2_140x140.png"), "html", null, true);
        echo "\" alt=\"2\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title_xs\">Ajoutez des propositions</h2>
\t\t\t\t\t</div>
                                        <p class=\"big_text text-xs\">Votre sondage peut comporter le nombre de propositions que vous souhaitez, ajoutez-en ou supprimez-en dynamiquement.</p>
\t\t\t\t</article>
\t\t\t\t
                                
\t\t\t\t<article class=\"use_description\">
\t\t\t\t\t<div class=\"icon_article\" id=\"img_trois\">
\t\t\t\t\t\t<img class=\"img_trois img-circle\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/3_140x140.png"), "html", null, true);
        echo "\" alt=\"3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text_article\">
\t\t\t\t\t\t<h2 class=\"big_title_xs big_title_xss\">Partagez-le !</h2>
\t\t\t\t\t</div>
                                        <p class=\"big_text big_text-xs\">Invitez les personnes susceptibles de venir répondre à votre sondage. Après votre inscription, un mail leur sera envoyé pour qu'ils puissent venir faire leur choix.</p>
\t\t\t\t</article>
                                
                                
\t\t\t\t<p id=\"asterisk\" class=\"bold bold-xs\">*Créer un sondage nécessite une inscription, celle-ci peut se faire en même temps que la création de votre sondage</p>
                                
                                <!-- Bouton mobile -->
                                <div class=\"div_choix-xs\">
                                    <div class=\"btn-group styled_select_div_xs\">
                                      <!-- Boutton du Select -->
                                      <span class=\"btn btn-default styled_select\" data-toggle=\"dropdown\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_autre.png"), "html", null, true);
        echo "\" class=\"img_option\">Autre</span>
                                      <button type=\"button\" class=\"btn btn-default dropdown-toggle styled_select_button\" data-toggle=\"dropdown\">
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">Toggle Dropdown</span>
                                      </button>
                                      <!-- Liste des éléments -->
                                      <ul class=\"dropdown-menu list_select\" role=\"menu\">
                                        <li class=\"list_option\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_autre.png"), "html", null, true);
        echo "\" class=\"img_option\">Autre</li>
                                        <li class=\"list_option\"><img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_map.png"), "html", null, true);
        echo "\" class=\"img_option\">Lieux</li>
                                        <li class=\"list_option\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projet/images/pictures/icone_calendrier.png"), "html", null, true);
        echo "\" class=\"img_option\">Date</li>
                                      </ul>
                                    </div>
                                    <a id=\"create_survey\" class=\"btn btn-default orange_button styled_a_div\" href=\"";
        // line 110
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
        return array (  185 => 110,  179 => 107,  175 => 106,  171 => 105,  161 => 98,  143 => 83,  129 => 72,  114 => 60,  104 => 53,  98 => 50,  94 => 49,  90 => 48,  80 => 41,  63 => 27,  50 => 17,  36 => 6,  31 => 3,  28 => 2,);
    }
}

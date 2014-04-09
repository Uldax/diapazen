<?php

/* BdlsProjetBundle:Default:pollShare.html.twig */
class __TwigTemplate_fec07bde2063c1e22ae887f40f80409c580efbee0be9c061978e59e40e79f4c4 extends Twig_Template
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
            <?php \$this->getAriadneThread(); ?>
            <form onsubmit=\"return formCheck(this)\" id=\"share_form\" class=\"default_form\" method=\"post\" action=\"<?php \$this->getHomeUrl(); ?>/poll/sent\">
                <h2 class=\"title\">Votre sondage a bien été créé !</h2>
                <h3 class=\"small_title\">Lien du sondage</h3>
                <label class=\"text\" for=\"poll_link\" >Lien</label>
                <input name=\"poll_link\" type=\"text\" id=\"poll_link\" class=\"text_edit\" readonly onClick=\"this.select();\" value=\"<?php echo \$this->getHomeUrl().'/p/'.\$pollUrl; ?>\" />
                <h3 class=\"small_title\">Partagez ce lien par e-mail</h3>
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
        return array (  114 => 36,  100 => 65,  65 => 43,  58 => 35,  150 => 49,  146 => 48,  126 => 16,  113 => 9,  104 => 7,  84 => 55,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 40,  128 => 39,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 42,  102 => 32,  71 => 34,  67 => 15,  63 => 37,  59 => 36,  38 => 6,  94 => 28,  89 => 56,  85 => 25,  75 => 35,  68 => 39,  56 => 9,  87 => 45,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 36,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 46,  138 => 54,  136 => 41,  121 => 46,  117 => 10,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 46,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 1,  246 => 90,  157 => 56,  145 => 47,  139 => 45,  131 => 52,  123 => 38,  120 => 37,  115 => 43,  111 => 37,  108 => 36,  101 => 6,  98 => 67,  96 => 31,  83 => 37,  74 => 50,  66 => 35,  55 => 24,  52 => 21,  50 => 17,  43 => 15,  41 => 7,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 8,  106 => 36,  103 => 32,  99 => 31,  95 => 5,  92 => 60,  86 => 28,  82 => 42,  80 => 54,  73 => 19,  64 => 17,  60 => 24,  57 => 11,  54 => 34,  51 => 23,  48 => 13,  45 => 19,  42 => 7,  39 => 9,  36 => 12,  33 => 4,  30 => 5,);
    }
}

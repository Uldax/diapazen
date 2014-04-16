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
        return array (  53 => 17,  100 => 66,  84 => 56,  65 => 44,  58 => 15,  155 => 53,  152 => 52,  146 => 47,  118 => 10,  114 => 36,  110 => 8,  90 => 52,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 59,  140 => 42,  132 => 40,  128 => 39,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 55,  143 => 56,  135 => 53,  119 => 42,  102 => 6,  71 => 19,  67 => 31,  63 => 24,  59 => 36,  38 => 6,  94 => 28,  89 => 20,  85 => 47,  75 => 17,  68 => 14,  56 => 9,  87 => 51,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 39,  46 => 19,  27 => 4,  44 => 9,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 56,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 47,  136 => 41,  121 => 46,  117 => 44,  105 => 7,  91 => 27,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 47,  69 => 27,  47 => 10,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 40,  123 => 38,  120 => 37,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 67,  96 => 5,  83 => 25,  74 => 51,  66 => 15,  55 => 15,  52 => 21,  50 => 20,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 60,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 48,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 11,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 61,  86 => 28,  82 => 22,  80 => 55,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 13,  51 => 12,  48 => 13,  45 => 17,  42 => 9,  39 => 12,  36 => 9,  33 => 4,  30 => 5,);
    }
}

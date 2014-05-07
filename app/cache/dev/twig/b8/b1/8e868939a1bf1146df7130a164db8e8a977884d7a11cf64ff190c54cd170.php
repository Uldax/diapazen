<?php

/* BdlsProjetBundle:Default:pollConnection.html.twig */
class __TwigTemplate_b8b18e868939a1bf1146df7130a164db8e8a977884d7a11cf64ff190c54cd170 extends Twig_Template
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
        echo "\t\t<div id=\"content\">
            ";
        // line 5
        echo "                ";
        if (array_key_exists("err", $context)) {
            // line 6
            echo "\t\t\t\t\t";
            if (((isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")) == "connectionError")) {
                // line 7
                echo "\t\t\t\t\t\t<div class='error_message' >Erreur de connexion, le nom d'utilisateur ou le mot de passe est incorrect.</div><br>
\t\t\t\t\t";
            }
            // line 9
            echo "\t\t\t\t\t";
            if (((isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")) == "registrationError")) {
                // line 10
                echo "\t\t\t\t\t\t<div class='error_message' >Cette adresse e-mail est déjà utilisée.</div><br>
\t\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t\t";
            if (((isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")) == "mailError")) {
                // line 13
                echo "\t\t\t\t\t\t<div class='error_message' >L'adresse e-mail est incorrecte.</div><br>
\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t";
        }
        // line 16
        echo "            


            <form onsubmit=\"return formCheck(this)\" action=\"<?php \$this->getHomeUrl(); ?>/poll/connect\" method=\"post\" class=\"default_form\" id=\"poll_connection_form\">
                <label for=\"registered\" class=\"text label_chkbox\"><input id=\"registered\" value=\"registered\" type=\"radio\" name=\"account\" checked=\"checked\" onchange=\"manageConnectionForm(this)\">J'ai déjà un compte</label>
                <label for=\"not_registered\" class=\"text label_chkbox\"><input onchange=\"manageConnectionForm(this)\" id=\"not_registered\" value=\"not_registered\" type=\"radio\" name=\"account\">C'est rapide, je m'inscris</label>
                <label for=\"email\" class=\"text\">E-mail<span class=\"asterisc\"> *</span></label>
                <input class=\"text_edit\" id=\"email\" name=\"email\" type=\"mail\" placeholder=\"\" value=\"\">
                <label for=\"firstname_user\" class=\"text infos_user\">Prénom<span class=\"asterisc\"> *</span></label>
                <input class=\"text_edit infos_user\" id=\"firstname_user\" name=\"firstNameUser\" type=\"text\">
                <label for=\"name_user\" class=\"text infos_user\">Nom<span class=\"asterisc\"> *</span></label>
                <input class=\"text_edit infos_user\" id=\"lastname_user\" name=\"lastNameUser\" type=\"text\">
                <label for=\"pwd_user\" class=\"text\">Mot de passe<span class=\"asterisc\"> *</span></label>
                <input class=\"text_edit\" id=\"pwd_user\" type=\"password\" name=\"password\" placeholder=\"\" value=\"\">
                <p class=\"orange_text info_box infos_user\">Un mot de passe vous sera envoyé à l'adresse e-mail renseignée.</p>
                <input class=\"orange_button\" type=\"submit\" value=\"Étape suivante\"/>
            </form>
        </div>

        
        <script src=\"<?php \$this->getPath('js/script.js'); ?>\"> </script>
\t";
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
        return array (  114 => 36,  100 => 65,  65 => 43,  167 => 59,  161 => 56,  153 => 53,  150 => 52,  126 => 38,  113 => 9,  104 => 7,  84 => 42,  77 => 38,  58 => 15,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 40,  128 => 39,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 48,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 37,  59 => 36,  38 => 6,  94 => 28,  89 => 52,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 43,  78 => 21,  46 => 18,  27 => 4,  44 => 9,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 60,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 46,  138 => 47,  136 => 41,  121 => 46,  117 => 10,  105 => 40,  91 => 63,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 42,  72 => 46,  69 => 25,  47 => 10,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 55,  145 => 47,  139 => 45,  131 => 52,  123 => 38,  120 => 37,  115 => 43,  111 => 37,  108 => 36,  101 => 6,  98 => 67,  96 => 31,  83 => 25,  74 => 50,  66 => 29,  55 => 15,  52 => 21,  50 => 19,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 45,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 8,  106 => 36,  103 => 32,  99 => 31,  95 => 5,  92 => 60,  86 => 51,  82 => 22,  80 => 54,  73 => 19,  64 => 28,  60 => 6,  57 => 11,  54 => 13,  51 => 12,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 12,  33 => 4,  30 => 5,);
    }
}

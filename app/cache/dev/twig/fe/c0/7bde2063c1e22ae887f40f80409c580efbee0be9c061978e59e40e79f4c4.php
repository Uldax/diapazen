<?php

/* BdlsProjetBundle:Default:pollShare.html.twig */
class __TwigTemplate_fec07bde2063c1e22ae887f40f80409c580efbee0be9c061978e59e40e79f4c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php
/**
 * Page de partage d'un sondage
 * 
 * @package     Diapazen
 * @subpackage  View
 * @copyright   Copyright (c) 2013, ISEN-Toulon
 * @license     http://www.gnu.org/licenses/gpl.html GNU GPL v3
 * 
 * This file is part of Diapazen.
 * 
 * Diapazen is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License 3 as published by
 * the Free Software Foundation.
 * 
 * Diapazen is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Diapazen.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

    // fixe un bug de la documentation
    // namespace ns;
    // fixe un bug de la documentation
?>

<?php \$this->getHeader(); ?>

        <div id=\"content\">
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
<?php \$this->getFooter(); ?>";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:pollShare.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 65,  104 => 62,  20 => 1,  114 => 36,  100 => 65,  84 => 55,  65 => 76,  53 => 32,  70 => 33,  81 => 45,  77 => 36,  58 => 35,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 117,  132 => 40,  128 => 39,  107 => 36,  61 => 46,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 77,  63 => 37,  59 => 36,  38 => 6,  94 => 55,  89 => 20,  85 => 25,  75 => 41,  68 => 14,  56 => 33,  87 => 25,  21 => 1,  26 => 6,  93 => 69,  88 => 65,  78 => 55,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 46,  138 => 54,  136 => 41,  121 => 46,  117 => 44,  105 => 40,  91 => 68,  62 => 40,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 40,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 47,  139 => 97,  131 => 52,  123 => 38,  120 => 37,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 50,  66 => 15,  55 => 15,  52 => 31,  50 => 30,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 60,  86 => 28,  82 => 22,  80 => 54,  73 => 34,  64 => 47,  60 => 39,  57 => 11,  54 => 34,  51 => 31,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}

<?php

/* BdlsProjetBundle:Default:pollView.html.twig */
class __TwigTemplate_e264058e4f9506efbb261d0f70e46dda1d93cc8639b7aeb64587a69a06bb6acb extends Twig_Template
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
 * Page d'affichage d'un sondage
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
    namespace ns;
    // fixe un bug de la documentation
?>

<?php \$this->getHeader(); ?> 
        
        <div id=\"content\">
            <div id =\"poll\">
                <div id=\"back_button_dashboard\">
                    <a class=\"orange_button\" href=\"<?php \$this->getHomeUrl(); ?>\" >Retour</a>
                </div>
                <div id=\"poll_title_box\" >
                    <h1 class=\"title\" > <?php echo \$eventTitle; ?> </h1>
                    <p class=\"text\"><?php echo sprintf('Créé le %s | Par %s %s %s', \$creationDate, \$userFName, \$userLName, \$eventDate); ?></p>
\t\t\t\t\t";
        // line 42
        echo "                </div>
                <p class=\"text\" > <?php echo \$eventDescription; ?> </p>
                <?php if (!\$openedPoll) { ?>
                <h1 class=\"big_title\" id=\"result\"><?php echo sprintf('Le choix ayant recueilli le plus de voix est: %s', \$choiceList[0][\"choiceName\"]); ?></h1>
                <?php } ?>
                
                <form onsubmit=\"return formCheck(this)\" method=\"post\" action=\"<?php \$this->getHomeUrl(); echo '/poll/view/'.\$urlPoll;?>\">
                    <div id=\"poll_choices\">
                        <table>
                            <?php
                                \$i = 0;
                                foreach (\$choiceList as \$key => \$row) {
                            ?>

                            <tr>

                                <?php 
                                    if (\$openedPoll == true) {       
                                ?>

                                <td><input type=\"checkbox\" name=\"choiceId[]\" value=\"<?php echo \$key; ?>\"></td>

                                <?php
                                    }
                                    else {
                                ?>

                                <td class=\"text\"><?php echo \$key+1; ?></td>

                                <?php
                                    }
                                ?>

                                <td class=\"text\"><?php echo \$row['choiceName'] ?> </td> 
                                <td class=\"progression_bar\">
                                    <div class=\"container\">
                                        <div class=\"meter\" style=\"<?php echo 'width: '.\$row['percent'].'%'; ?>\"></div>
                                        <p class=\"small_text\"><?php echo \$row['percent'].'%'; ?></p>
                                    </div>
                                </td>   
                                <td class=\"text\">

                                <?php
                                    \$nbPeople = count(\$row['checkList']);
                    
                                    if (\$nbPeople == 1) {
                                        echo \$row['checkList'][0].' a voté';
                                    }
                                    elseif (\$nbPeople == 2) {
                                         echo \$row['checkList'][0].' et '.\$row['checkList'][1].' ont voté';
                                    }
                                    elseif (\$nbPeople > 2) {
                                         echo \$row['checkList'][0].' et <span id=\"link_'.\$i.'\" class=\"link\">'.(\$nbPeople-1).' autres personnes</span> ont voté'; 
                                    }
                                    else {
                                        echo 'Aucune personne n\\'a encore voté.';

                                    }
                                    /*On ajoute la fenêtre pop up pour les autres personnes ayant voté*/
                                    if (\$nbPeople > 2) {

                                ?>

                                    <div id=\"<?php echo 'vote_list_'.\$i; ?>\" class=\"vote_list\">
                                        <ul>
                                
                                            <?php
                                                /* On remplit la liste des personnes ayant voté*/
                                                for (\$j=1; \$j < \$nbPeople; \$j++) { 
                                                   
                                            ?>

                                            <li> <?php echo \$row['checkList'][\$j]; ?> </li>

                                            <?php    
                                                }
                                            ?>

                                        </ul>
                                    </div>

                                    <script type=\"text/javascript\">
                                        document.getElementById(\"<?php echo 'link_'.\$i; ?>\").addEventListener('mouseover', function(e){
    
                                            document.getElementById(\"<?php echo 'vote_list_'.\$i; ?>\").style.display = \"block\";
                                        }, false);
                                        document.getElementById(\"<?php echo 'link_'.\$i; ?>\").addEventListener('mouseout', function(e){
    
                                            document.getElementById(\"<?php echo 'vote_list_'.\$i; ?>\").style.display = \"none\";
                                        }, false);
                                    </script>

                                <?php
                                        \$i = \$i + 1;
                                    }
                                ?>
                                </td>
                            </tr>

                            <?php
                                }
                            ?>
                        </table>
                    </div>
                    <?php if (\$openedPoll) {?>
                    <input type=\"text\" class=\"small_text_edit\" placeholder=\"Prénom Nom\" name=\"value\" value=\"<?php if (\$this->isUserConnected()){ echo \$this->getUserInfo('firstname').' '.\$this->getUserInfo('lastname'); } ?>\">
                    <input type=\"submit\" class=\"orange_small_button\" value=\"Voter\" >
                    <?php } ?>
                    <?php 
                        if(isset(\$data_updated)) {
                            if(\$data_updated) { ?>
                                <div style=\"float: right;\" class=\"success_message message_personal_data\">Votre vote a bien été pris en compte.</div>
                            <?php
                            } else { ?>
                                <div style=\"float: right;\" class=\"error_message message_personal_data\">Erreur, vérifiez les données saisies.</div>
                            <?php
                            }
                            ?>
                            <script>
                                \$('.success_message').delay(4000).slideUp(300);
                            </script>
                    <?php
                         }
                    ?>
                </form>
            </div>
        </div>
        
<?php \$this->getFooter(); ?>";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:pollView.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 41,  90 => 44,  53 => 13,  146 => 47,  114 => 36,  100 => 66,  65 => 26,  153 => 52,  150 => 51,  124 => 38,  84 => 56,  77 => 37,  58 => 35,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 42,  132 => 40,  128 => 39,  107 => 8,  61 => 42,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 42,  102 => 42,  71 => 19,  67 => 15,  63 => 17,  59 => 23,  38 => 6,  94 => 40,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 14,  87 => 55,  21 => 2,  26 => 6,  93 => 5,  88 => 40,  78 => 21,  46 => 10,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 53,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 41,  121 => 37,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 11,  24 => 1,  25 => 3,  19 => 1,  79 => 39,  72 => 47,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 44,  131 => 41,  123 => 38,  120 => 37,  115 => 10,  111 => 9,  108 => 36,  101 => 32,  98 => 67,  96 => 31,  83 => 25,  74 => 51,  66 => 29,  55 => 15,  52 => 21,  50 => 19,  43 => 8,  41 => 7,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 48,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 6,  95 => 28,  92 => 61,  86 => 28,  82 => 40,  80 => 55,  73 => 19,  64 => 17,  60 => 16,  57 => 11,  54 => 34,  51 => 14,  48 => 13,  45 => 17,  42 => 8,  39 => 12,  36 => 9,  33 => 4,  30 => 5,);
    }
}

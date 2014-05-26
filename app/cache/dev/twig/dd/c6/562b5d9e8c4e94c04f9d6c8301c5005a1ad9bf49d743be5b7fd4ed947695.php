<?php

/* BdlsProjetBundle:Default:pollView.html.twig */
class __TwigTemplate_ddc6562b5d9e8c4e94c04f9d6c8301c5005a1ad9bf49d743be5b7fd4ed947695 extends Twig_Template
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
        echo "\t<div id=\"content\">
\t\t<div id =\"poll\">
\t\t\t<div id=\"back_button_dashboard\">
\t\t\t\t<a class=\"orange_button\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("bdls_projet_index");
        echo "\" >Retour</a>
\t\t\t</div>
\t\t\t<div id=\"poll_title_box\" >
\t\t\t\t";
        // line 10
        echo "\t\t\t\t<h1 class=\"title\" > nom du sondage </h1>
\t\t\t\t";
        // line 12
        echo "\t\t\t\t<p class=\"text\">Créé le 'date_creation' | Par 'user_name' 'user_last_name' 'date_event'</p>
\t\t\t\t";
        // line 14
        echo "\t\t\t</div>
\t\t\t";
        // line 16
        echo "\t\t\t<p class=\"text\" > description du sondage </p>
\t\t\t";
        // line 18
        echo "\t\t\t";
        // line 19
        echo "\t\t\t<h1 class=\"big_title\" id=\"result\">Le choix ayant recueilli le plus de voix est: ???</h1>
\t\t\t";
        // line 21
        echo "\t\t\t";
        // line 22
        echo "\t\t\t<form onsubmit=\"return formCheck(this)\" method=\"post\" action=\"view\">
\t\t\t\t<div id=\"poll_choices\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<?php
\t\t\t\t\t\t\t\$i = 0;
\t\t\t\t\t\t\tforeach (\$choiceList as \$key => \$row) {
\t\t\t\t\t\t?>

\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<?php 
\t\t\t\t\t\t\t\tif (\$openedPoll == true) {       
\t\t\t\t\t\t\t?>

\t\t\t\t\t\t\t<td><input type=\"checkbox\" name=\"choiceId[]\" value=\"<?php echo \$key; ?>\"></td>

\t\t\t\t\t\t\t<?php
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t?>

\t\t\t\t\t\t\t<td class=\"text\"><?php echo \$key+1; ?></td>

\t\t\t\t\t\t\t<?php
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t?>

\t\t\t\t\t\t\t<td class=\"text\"><?php echo \$row['choiceName'] ?> </td> 
\t\t\t\t\t\t\t<td class=\"progression_bar\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"meter\" style=\"width: 50%\"></div>
\t\t\t\t\t\t\t\t\t<p class=\"small_text\"><?php echo \$row['percent'].'%'; ?></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>   
\t\t\t\t\t\t\t<td class=\"text\">

\t\t\t\t\t\t\t<?php
\t\t\t\t\t\t\t\t\$nbPeople = count(\$row['checkList']);

\t\t\t\t\t\t\t\tif (\$nbPeople == 1) {
\t\t\t\t\t\t\t\t\techo \$row['checkList'][0].' a voté';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\telseif (\$nbPeople == 2) {
\t\t\t\t\t\t\t\t\t echo \$row['checkList'][0].' et '.\$row['checkList'][1].' ont voté';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\telseif (\$nbPeople > 2) {
\t\t\t\t\t\t\t\t\t echo \$row['checkList'][0].' et <span id=\"link_'.\$i.'\" class=\"link\">'.(\$nbPeople-1).' autres personnes</span> ont voté'; 
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\t\techo 'Aucune personne n\\'a encore voté.';

\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t/*On ajoute la fenêtre pop up pour les autres personnes ayant voté*/
\t\t\t\t\t\t\t\tif (\$nbPeople > 2) {

\t\t\t\t\t\t\t?>

\t\t\t\t\t\t\t\t<div id=\"<?php echo 'vote_list_'.\$i; ?>\" class=\"vote_list\">
\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<?php
\t\t\t\t\t\t\t\t\t\t\t/* On remplit la liste des personnes ayant voté*/
\t\t\t\t\t\t\t\t\t\t\tfor (\$j=1; \$j < \$nbPeople; \$j++) { 

\t\t\t\t\t\t\t\t\t\t?>

\t\t\t\t\t\t\t\t\t\t<li> <?php echo \$row['checkList'][\$j]; ?> </li>

\t\t\t\t\t\t\t\t\t\t<?php    
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t?>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\tdocument.getElementById(\"<?php echo 'link_'.\$i; ?>\").addEventListener('mouseover', function(e){

\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"<?php echo 'vote_list_'.\$i; ?>\").style.display = \"block\";
\t\t\t\t\t\t\t\t\t}, false);
\t\t\t\t\t\t\t\t\tdocument.getElementById(\"<?php echo 'link_'.\$i; ?>\").addEventListener('mouseout', function(e){

\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"<?php echo 'vote_list_'.\$i; ?>\").style.display = \"none\";
\t\t\t\t\t\t\t\t\t}, false);
\t\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t<?php
\t\t\t\t\t\t\t\t\t\$i = \$i + 1;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t?>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<?php
\t\t\t\t\t\t\t}
\t\t\t\t\t\t?>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<?php if (\$openedPoll) {?>
\t\t\t\t<input type=\"text\" class=\"small_text_edit\" placeholder=\"Prénom Nom\" name=\"value\" value=\"<?php if (\$this->isUserConnected()){ echo \$this->getUserInfo('firstname').' '.\$this->getUserInfo('lastname'); } ?>\">
\t\t\t\t<input type=\"submit\" class=\"orange_small_button\" value=\"Voter\" >
\t\t\t\t<?php } ?>
\t\t\t\t<?php 
\t\t\t\t\tif(isset(\$data_updated)) {
\t\t\t\t\t\tif(\$data_updated) { ?>
\t\t\t\t\t\t\t<div style=\"float: right;\" class=\"success_message message_personal_data\">Votre vote a bien été pris en compte.</div>
\t\t\t\t\t\t<?php
\t\t\t\t\t\t} else { ?>
\t\t\t\t\t\t\t<div style=\"float: right;\" class=\"error_message message_personal_data\">Erreur, vérifiez les données saisies.</div>
\t\t\t\t\t\t<?php
\t\t\t\t\t\t}
\t\t\t\t\t\t?>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$('.success_message').delay(4000).slideUp(300);
\t\t\t\t\t\t</script>
\t\t\t\t<?php
\t\t\t\t\t }
\t\t\t\t?>
\t\t\t</form>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:pollView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 77,  137 => 91,  81 => 45,  76 => 39,  70 => 39,  170 => 101,  148 => 48,  127 => 39,  113 => 36,  65 => 44,  58 => 35,  234 => 82,  228 => 79,  215 => 72,  211 => 127,  205 => 124,  197 => 122,  194 => 64,  178 => 56,  174 => 143,  161 => 50,  150 => 11,  146 => 10,  124 => 5,  104 => 50,  84 => 41,  34 => 6,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 83,  235 => 74,  230 => 82,  227 => 81,  224 => 78,  221 => 77,  219 => 76,  217 => 130,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 41,  119 => 37,  102 => 64,  71 => 19,  67 => 15,  63 => 37,  59 => 21,  38 => 8,  94 => 28,  89 => 44,  85 => 43,  75 => 34,  68 => 14,  56 => 19,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 39,  46 => 17,  27 => 4,  44 => 10,  31 => 3,  28 => 2,  201 => 123,  196 => 90,  183 => 58,  171 => 54,  166 => 71,  163 => 62,  158 => 67,  156 => 109,  151 => 63,  142 => 9,  138 => 8,  136 => 56,  121 => 46,  117 => 87,  105 => 65,  91 => 59,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 52,  72 => 43,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 47,  139 => 42,  131 => 40,  123 => 47,  120 => 40,  115 => 72,  111 => 62,  108 => 70,  101 => 65,  98 => 62,  96 => 31,  83 => 54,  74 => 50,  66 => 15,  55 => 15,  52 => 24,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 115,  182 => 66,  176 => 64,  173 => 65,  168 => 53,  164 => 51,  162 => 57,  154 => 12,  149 => 51,  147 => 58,  144 => 100,  141 => 78,  133 => 7,  130 => 6,  125 => 44,  122 => 62,  116 => 59,  112 => 58,  109 => 53,  106 => 52,  103 => 32,  99 => 64,  95 => 58,  92 => 55,  86 => 51,  82 => 55,  80 => 19,  73 => 19,  64 => 28,  60 => 6,  57 => 11,  54 => 18,  51 => 16,  48 => 14,  45 => 12,  42 => 10,  39 => 11,  36 => 6,  33 => 4,  30 => 5,);
    }
}

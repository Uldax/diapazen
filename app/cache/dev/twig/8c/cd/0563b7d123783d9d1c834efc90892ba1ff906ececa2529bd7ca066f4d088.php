<?php

/* BdlsProjetBundle:Default:dashboard.html.twig */
class __TwigTemplate_8ccd0563b7d123783d9d1c834efc90892ba1ff906ececa2529bd7ca066f4d088 extends Twig_Template
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
            
                <a href=\"<?php \$this->getHomeUrl(); ?>/poll/create\" id=\"new_poll\" class=\"orange_button\">Créer un nouvel évènement</a>
            <div id=\"float_button_dashboard\">
                <a id=\"dashboard_form\" class=\"orange_button\" href=\"user/profile\">Modifier mes données personnelles</a>
            </div>
            <h2 class=\"small_title small_title_dashboard\">Vos sondages</h2>

            <?php
                if(isset(\$data_updated)) {

                     if(\$data_updated) {
                        ?>
                        <div class=\"success_message message_dashboard\">Le sondage a été clôturé avec succés.</div>
                        <?php
                    } else {
                        ?>
                        <div class=\"error_message message_dashboard\">Erreur lors de la clôture du sondage.</div>
                        <?php  
                    }
                ?>

                <script>
                    \$('.message_dashboard').delay(4000).slideUp(300);
                </script>

            <?php
                }
            ?>
        
            <div class=\"text\" id=\"poll_list\">
                <table>
                    <tr cols=\"3\" class=\"head_dash\">
                        <td>Statut</td><td>Ouvert le</td><td>Titre</td><td>Description</td><td></td>
                    </tr>
                    <?php
                        foreach(\$pollList as \$row)
                        {

                            if (\$row['open'] == true)
                            {
                            //Sondage encore ouvert    
                    ?>

                    <tr class=\"opened_poll\">
                        
                        <td>Ouvert</td>
                        <td><?php echo date(\"d/m/Y\", strtotime(\$row['creation_date'])); ?></td>
                        <td> <?php echo \$row['title']; ?> </td>
                        <td> <?php echo \$row['description']; ?> </td>
                        <td> 
                            <a class=\"orange_small_button\" href=\"<?php \$this->getHomeUrl(); echo '/poll/view/'.\$row['url']; ?>\">Voir</a>
                            <form action=\"<?php \$this->getHomeUrl(); ?>/dashboard\" onsubmit=\"return confirm('Clôturer le sondage ?');\" method=\"post\">
                                <input type=\"hidden\" name=\"close\" value=\"<?php echo \$row['POLL_ID']; ?>\"> 
                                <input type=\"submit\" class=\"grey_small_button\" value=\"Clôturer\">
                            </form>
                        </td>
                    <?php
                            } 
                            else {
                            //Sondage fermé
                    ?>

                    <tr class=\"closed_poll\">
                        <td>Fermé</td>
                        <td><?php echo date(\"d/m/Y\", strtotime(\$row['creation_date'])); ?></td>
                        <td> <?php echo \$row['title']; ?> </td>
                        <td> <?php echo \$row['description']; ?> </td>
                        <td> 
                            <a class=\"orange_small_button\" href=\"<?php \$this->getHomeUrl(); echo '/poll/view/'.\$row['url']; ?>\">Voir</a> 
                        </td>
                    <?php
                            }

                    ?>


                    </tr> 

                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
\t";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  152 => 52,  146 => 49,  118 => 10,  114 => 9,  110 => 8,  90 => 52,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 59,  140 => 55,  132 => 51,  128 => 39,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 55,  143 => 56,  135 => 53,  119 => 42,  102 => 6,  71 => 19,  67 => 31,  63 => 15,  59 => 26,  38 => 6,  94 => 28,  89 => 20,  85 => 47,  75 => 17,  68 => 14,  56 => 9,  87 => 51,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 39,  46 => 19,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 56,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 47,  136 => 56,  121 => 46,  117 => 44,  105 => 7,  91 => 27,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 40,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 67,  96 => 5,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 20,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 60,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 11,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 63,  86 => 28,  82 => 22,  80 => 44,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}

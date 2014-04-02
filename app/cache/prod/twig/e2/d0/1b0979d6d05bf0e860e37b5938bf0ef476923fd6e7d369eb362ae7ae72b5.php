<?php

/* BdlsProjetBundle:Default:index.html.twig */
class __TwigTemplate_e2d01b0979d6d05bf0e860e37b5938bf0ef476923fd6e7d369eb362ae7ae72b5 extends Twig_Template
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
        echo "Hello ";
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "BdlsProjetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

<?php

/* public_scoreboard.twig */
class __TwigTemplate_7e1f01c1c989b52398b7327da4ff84bd670f665dcedac6ce53728c40d6d72134 extends Twig_Template
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
        echo "<div id=\"container\">
  ";
        // line 2
        $this->loadTemplate("menu.twig", "public_scoreboard.twig", 2)->display($context);
        // line 3
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "public_scoreboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"container\">
  {% include 'menu.twig' %}
</div>
";
    }
}

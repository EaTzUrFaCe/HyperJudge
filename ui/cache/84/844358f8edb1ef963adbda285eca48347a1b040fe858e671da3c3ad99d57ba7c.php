<?php

/* public/scoreboard.twig */
class __TwigTemplate_d4f8f7052637177b2db1577a2c78841bdf3ee23ba1519788e237a558fc051dcb extends Twig_Template
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
        echo "<html>
<head>
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) ? $context["headers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 4
            echo "\t\t";
            echo twig_escape_filter($this->env, $context["header"], "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</head>
<body>
\tASDFASDFASDFADFS
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "public/scoreboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<html>
<head>
\t{% for header in headers %}
\t\t{{ header }}
\t{% endfor %}
</head>
<body>
\tASDFASDFASDFADFS
</body>
</html>
";
    }
}

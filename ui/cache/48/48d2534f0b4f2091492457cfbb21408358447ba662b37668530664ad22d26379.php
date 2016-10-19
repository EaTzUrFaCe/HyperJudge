<?php

/* menu.twig */
class __TwigTemplate_60d544e794cdc4d31e213e7c8066fd0a76804d7bdf1eaecef336c0170ec0cffc extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">About</a></li>
                <li><a href=\"#\">Contact</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li class=\"dropdown-header\">Nav header</li>
                        <li><a href=\"#\">Separated link</a></li>
                        <li><a href=\"#\">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
\t\t<a class=\"navbar-brand\">Logged in as ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
        echo "</a>
                <li class=\"active\"><a href=\"./\">Default <span class=\"sr-only\">(current)</span></a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>
";
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 31,  19 => 1,);
    }

    public function getSource()
    {
        return "<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">About</a></li>
                <li><a href=\"#\">Contact</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li class=\"dropdown-header\">Nav header</li>
                        <li><a href=\"#\">Separated link</a></li>
                        <li><a href=\"#\">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
\t\t<a class=\"navbar-brand\">Logged in as {{ user.name }}</a>
                <li class=\"active\"><a href=\"./\">Default <span class=\"sr-only\">(current)</span></a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>
";
    }
}

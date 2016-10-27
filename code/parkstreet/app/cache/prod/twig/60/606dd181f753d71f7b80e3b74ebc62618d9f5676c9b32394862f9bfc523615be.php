<?php

/* ParkstreetAppBundle:Index:index.html.twig */
class __TwigTemplate_6b3730ebbe7d4c5a5e9df4052c9db67a41c0217e9b416afcba4029b03857dace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@ParkstreetApp/layout.html.twig", "ParkstreetAppBundle:Index:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@ParkstreetApp/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div ng-app=\"invoiceApp\" class=\"container\">
        <div ng-view></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ParkstreetAppBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"@ParkstreetApp/layout.html.twig\" %}

{% block body %}
    <div ng-app=\"invoiceApp\" class=\"container\">
        <div ng-view></div>
    </div>
{% endblock %}
";
    }
}

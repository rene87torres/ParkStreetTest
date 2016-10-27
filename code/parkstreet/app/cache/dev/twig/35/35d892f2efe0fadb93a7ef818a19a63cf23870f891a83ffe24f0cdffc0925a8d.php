<?php

/* ParkstreetAppBundle:Index:index.html.twig */
class __TwigTemplate_516de1564e598e155288637f18de919e25d04e310852a51633fef05ee0469f7a extends Twig_Template
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
        $__internal_de091fc491234471e0129e86d789168322db5a9bacbb4ab1b2fbb5140bf70c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de091fc491234471e0129e86d789168322db5a9bacbb4ab1b2fbb5140bf70c55->enter($__internal_de091fc491234471e0129e86d789168322db5a9bacbb4ab1b2fbb5140bf70c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkstreetAppBundle:Index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de091fc491234471e0129e86d789168322db5a9bacbb4ab1b2fbb5140bf70c55->leave($__internal_de091fc491234471e0129e86d789168322db5a9bacbb4ab1b2fbb5140bf70c55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c7481d0ea81fe01f5e9da5ed332610cd3a8c24eb164e22c8063821c87cd5765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7481d0ea81fe01f5e9da5ed332610cd3a8c24eb164e22c8063821c87cd5765->enter($__internal_3c7481d0ea81fe01f5e9da5ed332610cd3a8c24eb164e22c8063821c87cd5765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div ng-app=\"invoiceApp\" class=\"container\">
        <div ng-view></div>
    </div>
";
        
        $__internal_3c7481d0ea81fe01f5e9da5ed332610cd3a8c24eb164e22c8063821c87cd5765->leave($__internal_3c7481d0ea81fe01f5e9da5ed332610cd3a8c24eb164e22c8063821c87cd5765_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

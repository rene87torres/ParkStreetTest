<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3dfc47afa0b5a4669912ff7e1004a83d32ed9c3d26844e0db9295da89512e334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_720e73b0eb2615e328544e6ce46931d6090d14cf8fd3b6f829860437abf81001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720e73b0eb2615e328544e6ce46931d6090d14cf8fd3b6f829860437abf81001->enter($__internal_720e73b0eb2615e328544e6ce46931d6090d14cf8fd3b6f829860437abf81001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_720e73b0eb2615e328544e6ce46931d6090d14cf8fd3b6f829860437abf81001->leave($__internal_720e73b0eb2615e328544e6ce46931d6090d14cf8fd3b6f829860437abf81001_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_324c2992da583305e74c2f4d3b08220c15b41addcbe4ceea11438c997d065a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324c2992da583305e74c2f4d3b08220c15b41addcbe4ceea11438c997d065a45->enter($__internal_324c2992da583305e74c2f4d3b08220c15b41addcbe4ceea11438c997d065a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_324c2992da583305e74c2f4d3b08220c15b41addcbe4ceea11438c997d065a45->leave($__internal_324c2992da583305e74c2f4d3b08220c15b41addcbe4ceea11438c997d065a45_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a0d0b17b22accb04ec585ea2f5f0d54f99a04197fba7403ed0f7556a34dfba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0d0b17b22accb04ec585ea2f5f0d54f99a04197fba7403ed0f7556a34dfba7->enter($__internal_2a0d0b17b22accb04ec585ea2f5f0d54f99a04197fba7403ed0f7556a34dfba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2a0d0b17b22accb04ec585ea2f5f0d54f99a04197fba7403ed0f7556a34dfba7->leave($__internal_2a0d0b17b22accb04ec585ea2f5f0d54f99a04197fba7403ed0f7556a34dfba7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}

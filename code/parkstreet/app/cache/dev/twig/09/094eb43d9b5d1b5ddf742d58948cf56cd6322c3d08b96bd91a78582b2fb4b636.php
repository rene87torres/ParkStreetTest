<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fa10d1a3e9dcd7abe80fc83872d753b398bef79e85ca2432a9f7cc26d7a9843b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_aada7458f230408e2bb925e56b2d59907e0e51289cdd2dadb136c511949a6133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aada7458f230408e2bb925e56b2d59907e0e51289cdd2dadb136c511949a6133->enter($__internal_aada7458f230408e2bb925e56b2d59907e0e51289cdd2dadb136c511949a6133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aada7458f230408e2bb925e56b2d59907e0e51289cdd2dadb136c511949a6133->leave($__internal_aada7458f230408e2bb925e56b2d59907e0e51289cdd2dadb136c511949a6133_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e662b855c698b231306795486732319476dbbcd5a14751f704627b99a3700b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e662b855c698b231306795486732319476dbbcd5a14751f704627b99a3700b5a->enter($__internal_e662b855c698b231306795486732319476dbbcd5a14751f704627b99a3700b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e662b855c698b231306795486732319476dbbcd5a14751f704627b99a3700b5a->leave($__internal_e662b855c698b231306795486732319476dbbcd5a14751f704627b99a3700b5a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ec61b3feb2d751510338af3938425c32cdcc413a6e6613e7c6f23db5e6ff34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec61b3feb2d751510338af3938425c32cdcc413a6e6613e7c6f23db5e6ff34b->enter($__internal_5ec61b3feb2d751510338af3938425c32cdcc413a6e6613e7c6f23db5e6ff34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ec61b3feb2d751510338af3938425c32cdcc413a6e6613e7c6f23db5e6ff34b->leave($__internal_5ec61b3feb2d751510338af3938425c32cdcc413a6e6613e7c6f23db5e6ff34b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2af4e2924d9e3d8feba2185d5ec113600d7fb1b2afece00b8f5bad56b34af19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af4e2924d9e3d8feba2185d5ec113600d7fb1b2afece00b8f5bad56b34af19b->enter($__internal_2af4e2924d9e3d8feba2185d5ec113600d7fb1b2afece00b8f5bad56b34af19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2af4e2924d9e3d8feba2185d5ec113600d7fb1b2afece00b8f5bad56b34af19b->leave($__internal_2af4e2924d9e3d8feba2185d5ec113600d7fb1b2afece00b8f5bad56b34af19b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
";
    }
}

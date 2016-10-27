<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_934c668fefa33bb7c29e0ab5d08eb6f0bd1f70185f97a3e51e0267f0ff6e814f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8548335bef2454dc885fe64ed8d8c9b913050ffff99fecdacc9091902ff6d0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8548335bef2454dc885fe64ed8d8c9b913050ffff99fecdacc9091902ff6d0f4->enter($__internal_8548335bef2454dc885fe64ed8d8c9b913050ffff99fecdacc9091902ff6d0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8548335bef2454dc885fe64ed8d8c9b913050ffff99fecdacc9091902ff6d0f4->leave($__internal_8548335bef2454dc885fe64ed8d8c9b913050ffff99fecdacc9091902ff6d0f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bab2748e3e58a7d899a91294f89dc027ef0374b28f318a5297f5d3d1b7f1d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bab2748e3e58a7d899a91294f89dc027ef0374b28f318a5297f5d3d1b7f1d32->enter($__internal_0bab2748e3e58a7d899a91294f89dc027ef0374b28f318a5297f5d3d1b7f1d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0bab2748e3e58a7d899a91294f89dc027ef0374b28f318a5297f5d3d1b7f1d32->leave($__internal_0bab2748e3e58a7d899a91294f89dc027ef0374b28f318a5297f5d3d1b7f1d32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1c2c51e92cb6b49a3e04cfc0f899efe6d869b3d4f83ff878800c62d144f2ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c2c51e92cb6b49a3e04cfc0f899efe6d869b3d4f83ff878800c62d144f2ff5->enter($__internal_d1c2c51e92cb6b49a3e04cfc0f899efe6d869b3d4f83ff878800c62d144f2ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_d1c2c51e92cb6b49a3e04cfc0f899efe6d869b3d4f83ff878800c62d144f2ff5->leave($__internal_d1c2c51e92cb6b49a3e04cfc0f899efe6d869b3d4f83ff878800c62d144f2ff5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_99b0e35ecbb47b6f2fa1f5d0469aa10a9b811437842bb1acbe4c4555263bbb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b0e35ecbb47b6f2fa1f5d0469aa10a9b811437842bb1acbe4c4555263bbb4e->enter($__internal_99b0e35ecbb47b6f2fa1f5d0469aa10a9b811437842bb1acbe4c4555263bbb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_99b0e35ecbb47b6f2fa1f5d0469aa10a9b811437842bb1acbe4c4555263bbb4e->leave($__internal_99b0e35ecbb47b6f2fa1f5d0469aa10a9b811437842bb1acbe4c4555263bbb4e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f1b9610c0006110ad8884d693ff3494a5936df445a99ec0a979e4a04c3466b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1b9610c0006110ad8884d693ff3494a5936df445a99ec0a979e4a04c3466b2->enter($__internal_4f1b9610c0006110ad8884d693ff3494a5936df445a99ec0a979e4a04c3466b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4f1b9610c0006110ad8884d693ff3494a5936df445a99ec0a979e4a04c3466b2->leave($__internal_4f1b9610c0006110ad8884d693ff3494a5936df445a99ec0a979e4a04c3466b2_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
";
    }
}

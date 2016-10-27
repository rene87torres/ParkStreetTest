<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7ffc84065873870c2991afbfbbce682b88c23853f24ae0d7c0a1e4ffbfe3a4f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1fede6d057b1476c324a1bd977ddcfad3f897cf6e893294545ccfa5f419a020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fede6d057b1476c324a1bd977ddcfad3f897cf6e893294545ccfa5f419a020->enter($__internal_e1fede6d057b1476c324a1bd977ddcfad3f897cf6e893294545ccfa5f419a020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e1fede6d057b1476c324a1bd977ddcfad3f897cf6e893294545ccfa5f419a020->leave($__internal_e1fede6d057b1476c324a1bd977ddcfad3f897cf6e893294545ccfa5f419a020_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6156df46050813f1ce036b41519b3324e6b9d7b00f8b55d5f5be911c5611f6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6156df46050813f1ce036b41519b3324e6b9d7b00f8b55d5f5be911c5611f6a7->enter($__internal_6156df46050813f1ce036b41519b3324e6b9d7b00f8b55d5f5be911c5611f6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6156df46050813f1ce036b41519b3324e6b9d7b00f8b55d5f5be911c5611f6a7->leave($__internal_6156df46050813f1ce036b41519b3324e6b9d7b00f8b55d5f5be911c5611f6a7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}

<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0844f8e20b729fd86473f3c87273b486083576e0dccf36bd68a07dba0d536b52 extends Twig_Template
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
        $__internal_3c0873652117da7a65377059893ddccb14633d6f1b738af35f5f9c894634e5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0873652117da7a65377059893ddccb14633d6f1b738af35f5f9c894634e5d5->enter($__internal_3c0873652117da7a65377059893ddccb14633d6f1b738af35f5f9c894634e5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3c0873652117da7a65377059893ddccb14633d6f1b738af35f5f9c894634e5d5->leave($__internal_3c0873652117da7a65377059893ddccb14633d6f1b738af35f5f9c894634e5d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include 'TwigBundle:Exception:error.xml.twig' %}
";
    }
}

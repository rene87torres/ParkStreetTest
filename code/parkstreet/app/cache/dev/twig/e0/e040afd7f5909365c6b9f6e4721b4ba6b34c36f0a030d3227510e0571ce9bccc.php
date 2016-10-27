<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_87271acb19bd2a72e40e53d52f95a81ca0de970487391c1a2a7f684b00251eae extends Twig_Template
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
        $__internal_40eb62d9556283b00515596224188a61d59480225f8b86c009f5e0730cedcc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40eb62d9556283b00515596224188a61d59480225f8b86c009f5e0730cedcc6f->enter($__internal_40eb62d9556283b00515596224188a61d59480225f8b86c009f5e0730cedcc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_40eb62d9556283b00515596224188a61d59480225f8b86c009f5e0730cedcc6f->leave($__internal_40eb62d9556283b00515596224188a61d59480225f8b86c009f5e0730cedcc6f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}
";
    }
}

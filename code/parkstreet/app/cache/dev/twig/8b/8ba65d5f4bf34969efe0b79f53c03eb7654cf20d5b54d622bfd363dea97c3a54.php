<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0f5eda1cba427912d47af95fc5b8311778bdc61514fe75aaa62c2361ebada5cf extends Twig_Template
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
        $__internal_341bc1e9e7fd82b29a32b50155fb692f561633d1246320ab00f00b10db0c6f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341bc1e9e7fd82b29a32b50155fb692f561633d1246320ab00f00b10db0c6f48->enter($__internal_341bc1e9e7fd82b29a32b50155fb692f561633d1246320ab00f00b10db0c6f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_341bc1e9e7fd82b29a32b50155fb692f561633d1246320ab00f00b10db0c6f48->leave($__internal_341bc1e9e7fd82b29a32b50155fb692f561633d1246320ab00f00b10db0c6f48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}

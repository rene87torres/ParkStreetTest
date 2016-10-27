<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e8fab16dc3842e800b475bd7cd48158f7abac280033052f75f4d426cc689a1d0 extends Twig_Template
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
        $__internal_d45d26d2d74997344e07e9fc087f0042a2c955df653979be9594c47e4916747d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45d26d2d74997344e07e9fc087f0042a2c955df653979be9594c47e4916747d->enter($__internal_d45d26d2d74997344e07e9fc087f0042a2c955df653979be9594c47e4916747d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d45d26d2d74997344e07e9fc087f0042a2c955df653979be9594c47e4916747d->leave($__internal_d45d26d2d74997344e07e9fc087f0042a2c955df653979be9594c47e4916747d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d6d40df792400044998b804e1a369de0d0074c57fb5483c0abbcb32043539c32 extends Twig_Template
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
        $__internal_e7dadab14ef39ac219421af34c71a0fa90d92bcc12f3e55d44ea461d354af39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dadab14ef39ac219421af34c71a0fa90d92bcc12f3e55d44ea461d354af39a->enter($__internal_e7dadab14ef39ac219421af34c71a0fa90d92bcc12f3e55d44ea461d354af39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e7dadab14ef39ac219421af34c71a0fa90d92bcc12f3e55d44ea461d354af39a->leave($__internal_e7dadab14ef39ac219421af34c71a0fa90d92bcc12f3e55d44ea461d354af39a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

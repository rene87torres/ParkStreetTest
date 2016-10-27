<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_75e523380783039594d8fde362c1ba988a5504458b56b44c52f9a1761ca86845 extends Twig_Template
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
        $__internal_105aae75a46e25bced81835ae8ad27629a5874b62b4927f5ead8984d18be1c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105aae75a46e25bced81835ae8ad27629a5874b62b4927f5ead8984d18be1c09->enter($__internal_105aae75a46e25bced81835ae8ad27629a5874b62b4927f5ead8984d18be1c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_105aae75a46e25bced81835ae8ad27629a5874b62b4927f5ead8984d18be1c09->leave($__internal_105aae75a46e25bced81835ae8ad27629a5874b62b4927f5ead8984d18be1c09_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}

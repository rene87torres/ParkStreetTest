<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_60317aec3d915746ab9c29ca3571d2aacb77a9b675be21f1d6ab2e032de97265 extends Twig_Template
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
        $__internal_99e8e38a1eb2ad36553a3c735cf314e5cd0ffa1338c72287d445b0e3569d8dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e8e38a1eb2ad36553a3c735cf314e5cd0ffa1338c72287d445b0e3569d8dda->enter($__internal_99e8e38a1eb2ad36553a3c735cf314e5cd0ffa1338c72287d445b0e3569d8dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_99e8e38a1eb2ad36553a3c735cf314e5cd0ffa1338c72287d445b0e3569d8dda->leave($__internal_99e8e38a1eb2ad36553a3c735cf314e5cd0ffa1338c72287d445b0e3569d8dda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}

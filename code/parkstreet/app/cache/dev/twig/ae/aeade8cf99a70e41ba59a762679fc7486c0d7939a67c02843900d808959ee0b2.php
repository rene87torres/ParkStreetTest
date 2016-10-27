<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c2c391ab990da329b36fee8fc5e0ae48608e671bf397a32c8b5c141917112aa8 extends Twig_Template
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
        $__internal_649e65869f0d7903fcb049f517f00fb0a396800647cf73f528503c5f3c82150b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649e65869f0d7903fcb049f517f00fb0a396800647cf73f528503c5f3c82150b->enter($__internal_649e65869f0d7903fcb049f517f00fb0a396800647cf73f528503c5f3c82150b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_649e65869f0d7903fcb049f517f00fb0a396800647cf73f528503c5f3c82150b->leave($__internal_649e65869f0d7903fcb049f517f00fb0a396800647cf73f528503c5f3c82150b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}

<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0bdb10b1a8c3adbaf6d3621ca45b26fde6b34a850f570ff918480bf14f05ebe4 extends Twig_Template
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
        $__internal_78a22e785f6623f26f12d899593a8a7d602bc878efc0b1eb25ce47fd0bac8ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a22e785f6623f26f12d899593a8a7d602bc878efc0b1eb25ce47fd0bac8ab4->enter($__internal_78a22e785f6623f26f12d899593a8a7d602bc878efc0b1eb25ce47fd0bac8ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_78a22e785f6623f26f12d899593a8a7d602bc878efc0b1eb25ce47fd0bac8ab4->leave($__internal_78a22e785f6623f26f12d899593a8a7d602bc878efc0b1eb25ce47fd0bac8ab4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}

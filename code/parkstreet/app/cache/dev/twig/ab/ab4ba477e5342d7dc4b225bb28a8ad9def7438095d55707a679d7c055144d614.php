<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_55f0607a0ced6d896a3f3ff6e13a1926bd2b521c2d7f8c5e69900eee4c122ea2 extends Twig_Template
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
        $__internal_de81d1188d2a4fa11c91357a80d0e5b8ac0140e379eb6a41f9469b2035917367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de81d1188d2a4fa11c91357a80d0e5b8ac0140e379eb6a41f9469b2035917367->enter($__internal_de81d1188d2a4fa11c91357a80d0e5b8ac0140e379eb6a41f9469b2035917367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_de81d1188d2a4fa11c91357a80d0e5b8ac0140e379eb6a41f9469b2035917367->leave($__internal_de81d1188d2a4fa11c91357a80d0e5b8ac0140e379eb6a41f9469b2035917367_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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

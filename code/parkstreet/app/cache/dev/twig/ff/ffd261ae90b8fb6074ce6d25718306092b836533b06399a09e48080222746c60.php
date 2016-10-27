<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ea6e1f5ecd1b4381fee9729dd4dd7144b513af70c6d0d9f9d5c1d604646a8d16 extends Twig_Template
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
        $__internal_5e7c0bf4a0e66bb705db7111c0866939fca0d435eb850b961eb04da49cc0d0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7c0bf4a0e66bb705db7111c0866939fca0d435eb850b961eb04da49cc0d0bd->enter($__internal_5e7c0bf4a0e66bb705db7111c0866939fca0d435eb850b961eb04da49cc0d0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5e7c0bf4a0e66bb705db7111c0866939fca0d435eb850b961eb04da49cc0d0bd->leave($__internal_5e7c0bf4a0e66bb705db7111c0866939fca0d435eb850b961eb04da49cc0d0bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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

<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b1f45aafa261ddc505ecb7e244c5b42e9650d660d874c26ca4ad3815efcdc985 extends Twig_Template
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
        $__internal_1100c125c151a81cfc9d8f7f40e3c2ef8681256f1d5cb2c61f31f6c8ee131100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1100c125c151a81cfc9d8f7f40e3c2ef8681256f1d5cb2c61f31f6c8ee131100->enter($__internal_1100c125c151a81cfc9d8f7f40e3c2ef8681256f1d5cb2c61f31f6c8ee131100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1100c125c151a81cfc9d8f7f40e3c2ef8681256f1d5cb2c61f31f6c8ee131100->leave($__internal_1100c125c151a81cfc9d8f7f40e3c2ef8681256f1d5cb2c61f31f6c8ee131100_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}

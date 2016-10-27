<?php

/* base.html.twig */
class __TwigTemplate_789bb312fc7361569aa84c4de5c01e93ca353c94a9587af06dc2881583f7863d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_content' => array($this, 'block_meta_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a1aef46a752a243a61f971906ce14b5580ad4a6c5fa15ab1b63054dce1c77ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1aef46a752a243a61f971906ce14b5580ad4a6c5fa15ab1b63054dce1c77ba->enter($__internal_2a1aef46a752a243a61f971906ce14b5580ad4a6c5fa15ab1b63054dce1c77ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('meta_content', $context, $blocks);
        // line 7
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_2a1aef46a752a243a61f971906ce14b5580ad4a6c5fa15ab1b63054dce1c77ba->leave($__internal_2a1aef46a752a243a61f971906ce14b5580ad4a6c5fa15ab1b63054dce1c77ba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfdf4d6c0dec7a078fc9c8f16697e42f1832b2f16b29029a0d69889e13f7babb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdf4d6c0dec7a078fc9c8f16697e42f1832b2f16b29029a0d69889e13f7babb->enter($__internal_cfdf4d6c0dec7a078fc9c8f16697e42f1832b2f16b29029a0d69889e13f7babb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cfdf4d6c0dec7a078fc9c8f16697e42f1832b2f16b29029a0d69889e13f7babb->leave($__internal_cfdf4d6c0dec7a078fc9c8f16697e42f1832b2f16b29029a0d69889e13f7babb_prof);

    }

    // line 6
    public function block_meta_content($context, array $blocks = array())
    {
        $__internal_89430a73689be836d061db023033464240f271a02e1dcb922abb1738c2b5b6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89430a73689be836d061db023033464240f271a02e1dcb922abb1738c2b5b6d8->enter($__internal_89430a73689be836d061db023033464240f271a02e1dcb922abb1738c2b5b6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_content"));

        
        $__internal_89430a73689be836d061db023033464240f271a02e1dcb922abb1738c2b5b6d8->leave($__internal_89430a73689be836d061db023033464240f271a02e1dcb922abb1738c2b5b6d8_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e89035e520a357f670bd801503b8715f8096af2ece53aaae598d815c65a0a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e89035e520a357f670bd801503b8715f8096af2ece53aaae598d815c65a0a0a->enter($__internal_8e89035e520a357f670bd801503b8715f8096af2ece53aaae598d815c65a0a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8e89035e520a357f670bd801503b8715f8096af2ece53aaae598d815c65a0a0a->leave($__internal_8e89035e520a357f670bd801503b8715f8096af2ece53aaae598d815c65a0a0a_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_2a5b9e5119dbd3bb9afba57d0f2b07d35966de9d51ca515c4a3d27988bfb1394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5b9e5119dbd3bb9afba57d0f2b07d35966de9d51ca515c4a3d27988bfb1394->enter($__internal_2a5b9e5119dbd3bb9afba57d0f2b07d35966de9d51ca515c4a3d27988bfb1394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_2a5b9e5119dbd3bb9afba57d0f2b07d35966de9d51ca515c4a3d27988bfb1394->leave($__internal_2a5b9e5119dbd3bb9afba57d0f2b07d35966de9d51ca515c4a3d27988bfb1394_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf4327ce56ce5ad48e9d9d03712af620ba30be4b066b5d7e3ab9e76a9e50f086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4327ce56ce5ad48e9d9d03712af620ba30be4b066b5d7e3ab9e76a9e50f086->enter($__internal_bf4327ce56ce5ad48e9d9d03712af620ba30be4b066b5d7e3ab9e76a9e50f086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bf4327ce56ce5ad48e9d9d03712af620ba30be4b066b5d7e3ab9e76a9e50f086->leave($__internal_bf4327ce56ce5ad48e9d9d03712af620ba30be4b066b5d7e3ab9e76a9e50f086_prof);

    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d3b730ed240e1ad78783a132076cb1abcd537bba3eda2f312f1e46717f92c63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b730ed240e1ad78783a132076cb1abcd537bba3eda2f312f1e46717f92c63f->enter($__internal_d3b730ed240e1ad78783a132076cb1abcd537bba3eda2f312f1e46717f92c63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_d3b730ed240e1ad78783a132076cb1abcd537bba3eda2f312f1e46717f92c63f->leave($__internal_d3b730ed240e1ad78783a132076cb1abcd537bba3eda2f312f1e46717f92c63f_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_796851492d36a5cdd4ccf6d1c1395e680fed23b829e0dddb1dd441af33805dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796851492d36a5cdd4ccf6d1c1395e680fed23b829e0dddb1dd441af33805dff->enter($__internal_796851492d36a5cdd4ccf6d1c1395e680fed23b829e0dddb1dd441af33805dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_796851492d36a5cdd4ccf6d1c1395e680fed23b829e0dddb1dd441af33805dff->leave($__internal_796851492d36a5cdd4ccf6d1c1395e680fed23b829e0dddb1dd441af33805dff_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 14,  127 => 13,  116 => 12,  105 => 11,  94 => 7,  83 => 6,  71 => 5,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  51 => 11,  44 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block meta_content %}{% endblock %}
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block header %}{% endblock %}
        {% block body %}{% endblock %}
        {% block footer %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}

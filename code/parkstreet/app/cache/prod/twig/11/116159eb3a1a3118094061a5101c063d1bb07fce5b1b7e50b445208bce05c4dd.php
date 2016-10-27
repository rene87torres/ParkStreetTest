<?php

/* ParkstreetAppBundle::layout.html.twig */
class __TwigTemplate_86fb8557ac9b4f16921c8d990ddd2a5ea0b08593c4e420057cf53b00248d6ffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ParkstreetAppBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'meta_content' => array($this, 'block_meta_content'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/parkstreetapp/css/bootstrap-3.3.7.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/parkstreetapp/css/main.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome to invoice system test";
    }

    // line 14
    public function block_meta_content($context, array $blocks = array())
    {
        // line 15
        echo "    <meta name=\"description\" content=\"Invoice system test\" />
    <meta name=\"keywords\" content=\"Invoice, system, test\" />
    <meta name=\"abstract\" content=\"Invoice system test\" />
";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        echo twig_include($this->env, $context, "ParkstreetAppBundle:Common:header.html.twig");
        echo "
";
    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        echo twig_include($this->env, $context, "ParkstreetAppBundle:Common:footer.html.twig");
        echo "
";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/parkstreetapp/js/angular-1.2.15.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/parkstreetapp/js/angular-route-1.2.25.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/parkstreetapp/js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/parkstreetapp/js/invoice.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/parkstreetapp/js/client.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/parkstreetapp/js/product.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 42
        echo "    ";
        echo "    
";
    }

    public function getTemplateName()
    {
        return "ParkstreetAppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 42,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  86 => 32,  83 => 31,  76 => 27,  73 => 26,  66 => 22,  63 => 21,  56 => 15,  53 => 14,  47 => 11,  41 => 6,  36 => 5,  33 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.html.twig\" %}

{#include Bootstrap#}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/parkstreetapp/css/bootstrap-3.3.7.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/parkstreetapp/css/main.css') }}\" />
    {#<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" />#}
{% endblock %}

{#define the title#}
{% block title %}Welcome to invoice system test{% endblock %}

{#define meta content#}
{% block meta_content %}
    <meta name=\"description\" content=\"Invoice system test\" />
    <meta name=\"keywords\" content=\"Invoice, system, test\" />
    <meta name=\"abstract\" content=\"Invoice system test\" />
{% endblock %}

{#include header#}
{% block header %}
    {{ include(\"ParkstreetAppBundle:Common:header.html.twig\") }}
{% endblock %}

{#include footer#}
{% block footer %}
    {{ include(\"ParkstreetAppBundle:Common:footer.html.twig\") }}
{% endblock %}

{#include AngularJs#}
{% block javascripts %}
    <script src=\"{{ asset('bundles/parkstreetapp/js/angular-1.2.15.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/parkstreetapp/js/angular-route-1.2.25.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
    <script src=\"{{ asset('bundles/parkstreetapp/js/main.js') }}\"></script>
    <script src=\"{{ asset('bundles/parkstreetapp/js/invoice.js') }}\"></script>
    <script src=\"{{ asset('bundles/parkstreetapp/js/client.js') }}\"></script>
    <script src=\"{{ asset('bundles/parkstreetapp/js/product.js') }}\"></script>

    {#<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js\"></script>#}
    {#<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.min.js\"></script>#}    
{% endblock %}
";
    }
}

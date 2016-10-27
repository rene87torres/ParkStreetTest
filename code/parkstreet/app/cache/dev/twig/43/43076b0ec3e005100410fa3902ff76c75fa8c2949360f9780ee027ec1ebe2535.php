<?php

/* ParkstreetAppBundle::layout.html.twig */
class __TwigTemplate_099ae20df10fd1aa1b623ad4ce21dfce98299472b0956f90b6f322202dcf52b4 extends Twig_Template
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
        $__internal_5ba1bc27ece3132f5f43dceb5b9f4cd592592fef75a7f5f49f9975b8bdb0e85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba1bc27ece3132f5f43dceb5b9f4cd592592fef75a7f5f49f9975b8bdb0e85a->enter($__internal_5ba1bc27ece3132f5f43dceb5b9f4cd592592fef75a7f5f49f9975b8bdb0e85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkstreetAppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ba1bc27ece3132f5f43dceb5b9f4cd592592fef75a7f5f49f9975b8bdb0e85a->leave($__internal_5ba1bc27ece3132f5f43dceb5b9f4cd592592fef75a7f5f49f9975b8bdb0e85a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f64ef293f86b520fe4dbe68f43c1527541dacf95dced60187fbab1015a58999e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64ef293f86b520fe4dbe68f43c1527541dacf95dced60187fbab1015a58999e->enter($__internal_f64ef293f86b520fe4dbe68f43c1527541dacf95dced60187fbab1015a58999e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/parkstreetapp/css/bootstrap-3.3.7.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/parkstreetapp/css/main.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_f64ef293f86b520fe4dbe68f43c1527541dacf95dced60187fbab1015a58999e->leave($__internal_f64ef293f86b520fe4dbe68f43c1527541dacf95dced60187fbab1015a58999e_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d02b6edfb69a43c954696b9509b21cf9f725484d6f2e73ae108dffb8998a401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d02b6edfb69a43c954696b9509b21cf9f725484d6f2e73ae108dffb8998a401->enter($__internal_5d02b6edfb69a43c954696b9509b21cf9f725484d6f2e73ae108dffb8998a401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to invoice system test";
        
        $__internal_5d02b6edfb69a43c954696b9509b21cf9f725484d6f2e73ae108dffb8998a401->leave($__internal_5d02b6edfb69a43c954696b9509b21cf9f725484d6f2e73ae108dffb8998a401_prof);

    }

    // line 14
    public function block_meta_content($context, array $blocks = array())
    {
        $__internal_b8c47b8233b88708bded079b91d1509a8493ba6f5ca2729bdedda22d14fc595c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c47b8233b88708bded079b91d1509a8493ba6f5ca2729bdedda22d14fc595c->enter($__internal_b8c47b8233b88708bded079b91d1509a8493ba6f5ca2729bdedda22d14fc595c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_content"));

        // line 15
        echo "    <meta name=\"description\" content=\"Invoice system test\" />
    <meta name=\"keywords\" content=\"Invoice, system, test\" />
    <meta name=\"abstract\" content=\"Invoice system test\" />
";
        
        $__internal_b8c47b8233b88708bded079b91d1509a8493ba6f5ca2729bdedda22d14fc595c->leave($__internal_b8c47b8233b88708bded079b91d1509a8493ba6f5ca2729bdedda22d14fc595c_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_9d0e0cf0b44ba9502ea4799b77a2044d11deb401289716c5d35580991098eca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0e0cf0b44ba9502ea4799b77a2044d11deb401289716c5d35580991098eca2->enter($__internal_9d0e0cf0b44ba9502ea4799b77a2044d11deb401289716c5d35580991098eca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    ";
        echo twig_include($this->env, $context, "ParkstreetAppBundle:Common:header.html.twig");
        echo "
";
        
        $__internal_9d0e0cf0b44ba9502ea4799b77a2044d11deb401289716c5d35580991098eca2->leave($__internal_9d0e0cf0b44ba9502ea4799b77a2044d11deb401289716c5d35580991098eca2_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_29e5007617c433dd1c973bd1de702b72ddc53664d1f52a10bf7a2303fb541674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e5007617c433dd1c973bd1de702b72ddc53664d1f52a10bf7a2303fb541674->enter($__internal_29e5007617c433dd1c973bd1de702b72ddc53664d1f52a10bf7a2303fb541674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 27
        echo "    ";
        echo twig_include($this->env, $context, "ParkstreetAppBundle:Common:footer.html.twig");
        echo "
";
        
        $__internal_29e5007617c433dd1c973bd1de702b72ddc53664d1f52a10bf7a2303fb541674->leave($__internal_29e5007617c433dd1c973bd1de702b72ddc53664d1f52a10bf7a2303fb541674_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c076ef6cd7ec114e8dbd0ce41b29003aca1c1793bb6894cbcfcb89d0ff84a99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c076ef6cd7ec114e8dbd0ce41b29003aca1c1793bb6894cbcfcb89d0ff84a99d->enter($__internal_c076ef6cd7ec114e8dbd0ce41b29003aca1c1793bb6894cbcfcb89d0ff84a99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c076ef6cd7ec114e8dbd0ce41b29003aca1c1793bb6894cbcfcb89d0ff84a99d->leave($__internal_c076ef6cd7ec114e8dbd0ce41b29003aca1c1793bb6894cbcfcb89d0ff84a99d_prof);

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
        return array (  159 => 42,  154 => 39,  150 => 38,  146 => 37,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  125 => 32,  119 => 31,  109 => 27,  103 => 26,  93 => 22,  87 => 21,  77 => 15,  71 => 14,  59 => 11,  50 => 6,  45 => 5,  39 => 4,  11 => 1,);
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

<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8ecf4a45fd173b04786ee1965fcbc7f6f4373a7134fa6b5f1e330e1a9d9eee41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_650b786453b61bb8512e990c777a8d5937418254baa565eee3b16b6d6dc55eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650b786453b61bb8512e990c777a8d5937418254baa565eee3b16b6d6dc55eb4->enter($__internal_650b786453b61bb8512e990c777a8d5937418254baa565eee3b16b6d6dc55eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_650b786453b61bb8512e990c777a8d5937418254baa565eee3b16b6d6dc55eb4->leave($__internal_650b786453b61bb8512e990c777a8d5937418254baa565eee3b16b6d6dc55eb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9e1792394a03ff990a4b396ded84026a96fedef5154f487bb2ad1bceeca09b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e1792394a03ff990a4b396ded84026a96fedef5154f487bb2ad1bceeca09b7->enter($__internal_a9e1792394a03ff990a4b396ded84026a96fedef5154f487bb2ad1bceeca09b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->loadTemplate("@WebProfiler/Profiler/header.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 5)->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->loadTemplate("@WebProfiler/Profiler/admin.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 38)->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_a9e1792394a03ff990a4b396ded84026a96fedef5154f487bb2ad1bceeca09b7->leave($__internal_a9e1792394a03ff990a4b396ded84026a96fedef5154f487bb2ad1bceeca09b7_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_109103ffa34e7f9b54998adcad1ea9fece2cb6119f2c50104c05a51f23438ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109103ffa34e7f9b54998adcad1ea9fece2cb6119f2c50104c05a51f23438ec4->enter($__internal_109103ffa34e7f9b54998adcad1ea9fece2cb6119f2c50104c05a51f23438ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif ((        // line 17
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif ((        // line 22
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif ((        // line 27
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
        
        $__internal_109103ffa34e7f9b54998adcad1ea9fece2cb6119f2c50104c05a51f23438ec4->leave($__internal_109103ffa34e7f9b54998adcad1ea9fece2cb6119f2c50104c05a51f23438ec4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  114 => 30,  110 => 28,  108 => 27,  102 => 23,  100 => 22,  94 => 18,  92 => 17,  86 => 13,  83 => 12,  77 => 11,  66 => 39,  64 => 38,  60 => 37,  55 => 34,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    <div id=\"content\">
        {% include '@WebProfiler/Profiler/header.html.twig' only %}

        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        {% block panel %}
                            {% if about == 'purge' %}
                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            {% elseif about == 'upload_error' %}
                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            {% elseif about == 'already_exists' %}
                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            {% elseif about == 'no_token' %}
                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"{{ token }}\" was not found in the database.</em>
                                </p>
                            {% endif %}
                        {% endblock %}
                    </div>
                </div>
                <div id=\"navigation\">
                    {{ render(path('_profiler_search_bar')) }}
                    {% include '@WebProfiler/Profiler/admin.html.twig' with { 'token': '' } only %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
";
    }
}

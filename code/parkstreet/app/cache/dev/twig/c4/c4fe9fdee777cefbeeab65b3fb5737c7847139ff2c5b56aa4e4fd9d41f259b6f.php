<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_689802f52628ec89cb371e695d6cc0d3d13c0ad210bf1dc34257578187514c4a extends Twig_Template
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
        $__internal_f27ed465e0ec358f39210d28ac1a76157713b3b7648c08c90498b8a5ef8b8407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27ed465e0ec358f39210d28ac1a76157713b3b7648c08c90498b8a5ef8b8407->enter($__internal_f27ed465e0ec358f39210d28ac1a76157713b3b7648c08c90498b8a5ef8b8407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:bag.html.twig"));

        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "keys", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpValue($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "get", array(0 => $context["key"]), "method")), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_f27ed465e0ec358f39210d28ac1a76157713b3b7648c08c90498b8a5ef8b8407->leave($__internal_f27ed465e0ec358f39210d28ac1a76157713b3b7648c08c90498b8a5ef8b8407_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  49 => 12,  45 => 11,  42 => 10,  38 => 9,  22 => 1,);
    }

    public function getSource()
    {
        return "<table {% if class is defined %}class='{{ class }}'{% endif %} >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        {% for key in bag.keys|sort %}
            <tr>
                <th>{{ key }}</th>
                <td><pre>{{ profiler_dump(bag.get(key)) }}</pre></td>
            </tr>
        {% endfor %}
    </tbody>
</table>
";
    }
}

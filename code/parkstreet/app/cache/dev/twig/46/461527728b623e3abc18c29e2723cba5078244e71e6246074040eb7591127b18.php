<?php

/* ParkstreetAppBundle:Client:list.html.twig */
class __TwigTemplate_6324e083f0ff4703d276074371b123c03b00bebdfe2a91f587e7e660956ec2d1 extends Twig_Template
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
        $__internal_6b7a87aac8cc8757f1fdf00d0f9c6a1e96be9557bac05f5c5d6f8cac26341f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7a87aac8cc8757f1fdf00d0f9c6a1e96be9557bac05f5c5d6f8cac26341f3b->enter($__internal_6b7a87aac8cc8757f1fdf00d0f9c6a1e96be9557bac05f5c5d6f8cac26341f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkstreetAppBundle:Client:list.html.twig"));

        // line 1
        echo "<div ng-controller=\"ListClientController\">
    <h1>[[title]]</h1>
    
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Client Id</th>
                <th>Client</th>
            </tr>
        </thead>

        <tbody>
            <tr ng-repeat=\"client in clients\">
                <td>[[client.client_id]]</td>
                <td>[[client.client_name]]</td>
            </tr>
        </tbody>

        <tfoot>

        </tfoot>
    </table>
</div>";
        
        $__internal_6b7a87aac8cc8757f1fdf00d0f9c6a1e96be9557bac05f5c5d6f8cac26341f3b->leave($__internal_6b7a87aac8cc8757f1fdf00d0f9c6a1e96be9557bac05f5c5d6f8cac26341f3b_prof);

    }

    public function getTemplateName()
    {
        return "ParkstreetAppBundle:Client:list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div ng-controller=\"ListClientController\">
    <h1>[[title]]</h1>
    
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Client Id</th>
                <th>Client</th>
            </tr>
        </thead>

        <tbody>
            <tr ng-repeat=\"client in clients\">
                <td>[[client.client_id]]</td>
                <td>[[client.client_name]]</td>
            </tr>
        </tbody>

        <tfoot>

        </tfoot>
    </table>
</div>";
    }
}

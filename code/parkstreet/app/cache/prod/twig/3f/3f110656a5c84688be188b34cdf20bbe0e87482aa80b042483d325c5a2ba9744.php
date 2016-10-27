<?php

/* ParkstreetAppBundle:Client:list.html.twig */
class __TwigTemplate_d29e3fa719079afe8d75e54e18cca7a6853158ab23f24d6d5cabe6db3144aa05 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "ParkstreetAppBundle:Client:list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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

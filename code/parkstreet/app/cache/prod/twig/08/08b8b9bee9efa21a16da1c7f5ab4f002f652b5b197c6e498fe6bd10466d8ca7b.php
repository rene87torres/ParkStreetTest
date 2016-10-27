<?php

/* ParkstreetAppBundle:Product:list.html.twig */
class __TwigTemplate_7e1afbc79f6e96eff998c3f50bf6bb3cb7b546cbe3fdd5b5d6c9570cb316d065 extends Twig_Template
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
        echo "<div ng-controller=\"ListProductController\">
    <h1>[[title]]</h1>
    
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Product Num</th>
                <th>Product</th>
                <th>Client</th>
            </tr>
        </thead>

        <tbody>
            <tr ng-repeat=\"product in products\">
                <td>[[product.product_id]]</td>
                <td>[[product.product_description]]</td>
                <td>[[product.client_name]]</td>
            </tr>
        </tbody>

        <tfoot>

        </tfoot>
    </table>
</div>";
    }

    public function getTemplateName()
    {
        return "ParkstreetAppBundle:Product:list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<div ng-controller=\"ListProductController\">
    <h1>[[title]]</h1>
    
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Product Num</th>
                <th>Product</th>
                <th>Client</th>
            </tr>
        </thead>

        <tbody>
            <tr ng-repeat=\"product in products\">
                <td>[[product.product_id]]</td>
                <td>[[product.product_description]]</td>
                <td>[[product.client_name]]</td>
            </tr>
        </tbody>

        <tfoot>

        </tfoot>
    </table>
</div>";
    }
}

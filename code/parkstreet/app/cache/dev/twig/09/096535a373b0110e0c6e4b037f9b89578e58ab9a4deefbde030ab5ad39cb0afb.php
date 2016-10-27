<?php

/* ParkstreetAppBundle:Product:list.html.twig */
class __TwigTemplate_460a0826251a3bb050507bc436d462f0c2e83846a8c212715036792656b798af extends Twig_Template
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
        $__internal_30595ac7a8d97f7fe8df09f50e4393fb346ae3179b61154c2579e16fda232d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30595ac7a8d97f7fe8df09f50e4393fb346ae3179b61154c2579e16fda232d6b->enter($__internal_30595ac7a8d97f7fe8df09f50e4393fb346ae3179b61154c2579e16fda232d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkstreetAppBundle:Product:list.html.twig"));

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
        
        $__internal_30595ac7a8d97f7fe8df09f50e4393fb346ae3179b61154c2579e16fda232d6b->leave($__internal_30595ac7a8d97f7fe8df09f50e4393fb346ae3179b61154c2579e16fda232d6b_prof);

    }

    public function getTemplateName()
    {
        return "ParkstreetAppBundle:Product:list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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

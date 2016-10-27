<?php

/* ParkstreetAppBundle:Invoice:list.html.twig */
class __TwigTemplate_220ffc853f0553a465e69d250816a39c94f112eb3d4efc914834baac686cc38f extends Twig_Template
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
        echo "<div ng-controller=\"ListInvoiceController\">
    <h1>[[title]]</h1>
    
    ";
        // line 5
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Filter Invoices</div>
        <div class=\"panel-body\">        
            <form name=\"invoice_filter_form\" class=\"form-horizontal row\" novalidate>
                <div class=\"form-group\">        
                    <div class=\"col-lg-4\">
                        <label for=\"query_date\" class=\"col-lg-5 control-label\">Relative Date:</label>
                        
                        <div class=\"col-lg-7\">
                           <select name=\"query_date\" ng-model=\"query_date\" class=\"form-control\">
                                <option value=\"\">Select</option>
                                <option ng-repeat=\"date in dates\" value=\"[[date.value]]\">[[date.description]]</option>
                           </select> 
                        </div>                
                    </div>
            
                    <div class=\"col-lg-4\">
                        <label for=\"query_client\" class=\"col-lg-5 control-label\">Client:</label>
                        
                        <div class=\"col-lg-7\">
                           <select name=\"query_client\" ng-model=\"query_client\" class=\"form-control\" ng-change=\"invoice.loadProductsByClient()\" required>
                                <option value=\"\">Select</option>
                                <option ng-repeat=\"client in clients\" value=\"[[client.id]]\">[[client.name]]</option>
                            </select> 
                        </div>
                    </div>
                
                    <div class=\"col-lg-4\" ng-show=\"invoice_filter_form.query_client.\$dirty && !(invoice_filter_form.query_client.\$invalid)\">
                        <label for=\"query_product\" class=\"col-lg-5 control-label\">Product:</label>
                        
                        <div class=\"col-lg-7\">
                           <select name=\"query_product\" ng-model=\"query_product\" class=\"form-control\">
                                <option value=\"\">Select</option>
                                <option ng-repeat=\"product in products\" value=\"[[product.id]]\">[[product.description]]</option>
                           </select> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    ";
        // line 47
        echo "    
    ";
        // line 49
        echo "    <table class=\"table table-striped table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Invoice Num</th>
                <th>Invoice Date</th>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Total Qty</th>
            </tr>
        </thead>

        <tbody>
            <tr ng-repeat=\"invoice in invoices | filter: {client_id: query_client, product_id: query_product} | filterDate: query_date\">
                <td>[[invoice.invoice_num]]</td>
                <td>[[invoice.invoice_date]]</td>
                <td>[[invoice.product_description]]</td>
                <td>[[invoice.qty]]</td>
                <td>[[invoice.price]]</td>
                <td>[[invoice.total_price]]</td>
                <td>[[invoice.total_qty]]</td>
            </tr>
        </tbody>

        ";
        // line 75
        echo "        <tfoot>
            <tr>
                <td colspan=\"7\">
                    ";
        // line 78
        echo twig_include($this->env, $context, "ParkstreetAppBundle:Common:pagination.html.twig");
        echo "
                </td>
            </tr>
        </tfoot>
        ";
        // line 83
        echo "    </table>
    ";
        // line 84
        echo "    
</div>
";
    }

    public function getTemplateName()
    {
        return "ParkstreetAppBundle:Invoice:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 84,  109 => 83,  102 => 78,  97 => 75,  70 => 49,  67 => 47,  24 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<div ng-controller=\"ListInvoiceController\">
    <h1>[[title]]</h1>
    
    {# Filter Invoices #}
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Filter Invoices</div>
        <div class=\"panel-body\">        
            <form name=\"invoice_filter_form\" class=\"form-horizontal row\" novalidate>
                <div class=\"form-group\">        
                    <div class=\"col-lg-4\">
                        <label for=\"query_date\" class=\"col-lg-5 control-label\">Relative Date:</label>
                        
                        <div class=\"col-lg-7\">
                           <select name=\"query_date\" ng-model=\"query_date\" class=\"form-control\">
                                <option value=\"\">Select</option>
                                <option ng-repeat=\"date in dates\" value=\"[[date.value]]\">[[date.description]]</option>
                           </select> 
                        </div>                
                    </div>
            
                    <div class=\"col-lg-4\">
                        <label for=\"query_client\" class=\"col-lg-5 control-label\">Client:</label>
                        
                        <div class=\"col-lg-7\">
                           <select name=\"query_client\" ng-model=\"query_client\" class=\"form-control\" ng-change=\"invoice.loadProductsByClient()\" required>
                                <option value=\"\">Select</option>
                                <option ng-repeat=\"client in clients\" value=\"[[client.id]]\">[[client.name]]</option>
                            </select> 
                        </div>
                    </div>
                
                    <div class=\"col-lg-4\" ng-show=\"invoice_filter_form.query_client.\$dirty && !(invoice_filter_form.query_client.\$invalid)\">
                        <label for=\"query_product\" class=\"col-lg-5 control-label\">Product:</label>
                        
                        <div class=\"col-lg-7\">
                           <select name=\"query_product\" ng-model=\"query_product\" class=\"form-control\">
                                <option value=\"\">Select</option>
                                <option ng-repeat=\"product in products\" value=\"[[product.id]]\">[[product.description]]</option>
                           </select> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {# Filter invoices close #}
    
    {# Invoices table #}
    <table class=\"table table-striped table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Invoice Num</th>
                <th>Invoice Date</th>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Total Qty</th>
            </tr>
        </thead>

        <tbody>
            <tr ng-repeat=\"invoice in invoices | filter: {client_id: query_client, product_id: query_product} | filterDate: query_date\">
                <td>[[invoice.invoice_num]]</td>
                <td>[[invoice.invoice_date]]</td>
                <td>[[invoice.product_description]]</td>
                <td>[[invoice.qty]]</td>
                <td>[[invoice.price]]</td>
                <td>[[invoice.total_price]]</td>
                <td>[[invoice.total_qty]]</td>
            </tr>
        </tbody>

        {# Pagination invoices#}
        <tfoot>
            <tr>
                <td colspan=\"7\">
                    {{ include(\"ParkstreetAppBundle:Common:pagination.html.twig\") }}
                </td>
            </tr>
        </tfoot>
        {# Pagination invoices close#}
    </table>
    {# Invoices table close #}    
</div>
";
    }
}

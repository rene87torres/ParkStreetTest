<?php

/* ParkstreetAppBundle:Common:pagination.html.twig */
class __TwigTemplate_ee3f0f30faf8c49f5b465ff5ede4f87fd63b3ad2f71839c09d0d132cb8777388 extends Twig_Template
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
        // line 2
        echo "<div ng-show=\"pager.have_to_paginate\" class=\"col-lg-6\">
    <ul class=\"pagination\" ng-show=\"pager.have_to_paginate\">
        <li ng-show=\"pager.current_page > 1\">
            <a rel=\"nofollow\" class=\"first-page\" title=\"First Page\" ng-click=\"invoice.pager.firstPage()\">First</a>
        </li>
        <li ng-show=\"pager.current_page > 1\">
            <a rel=\"nofollow\" class=\"prev-page\" title=\"First Page\" ng-click=\"invoice.pager.prevPage()\">&laquo;</a>
        </li>
        <li ng-repeat=\"link in pager.links\">
            <a rel=\"nofollow\" class=\"page\" title=\"Page [[ link ]]\" ng-click=\"invoice.pager.page(link - 1)\">[[ link ]]</a>
        </li>    
        <li ng-show=\"pager.current_page <= pager.last_page - 1\">
            <a rel=\"nofollow\" class=\"next-page\" title=\"Next Page\" ng-click=\"invoice.pager.nextPage()\">&raquo;</a>
        </li>
        <li ng-show=\"pager.current_page <= pager.last_page - 1\">
            <a rel=\"nofollow\" class=\"last-page\" title=\"Last Page\" ng-click=\"invoice.pager.lastPage()\">Last</a>
        </li>
    </ul>     
</div>

<div ng-show=\"pager.have_to_paginate\" class=\"col-lg-6 pagination-info\">
   <p>Page [[pager.current_page]] - <strong>[[pager.last_page]] / </strong> [[pager.partial_total]] - <strong>[[pager.total]] Records</strong></p>      
</div>
        
<div ng-show=\"!pager.have_to_paginate\">
    <p ng-show=\"pager.total == 1\">
        <strong>[[ pager.total ]] Record</strong>
    </p>
    
    <p ng-show=\"pager.total > 1\">
        <strong>[[ pager.total ]] Records</strong>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "ParkstreetAppBundle:Common:pagination.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    public function getSource()
    {
        return "{#Pagination#}
<div ng-show=\"pager.have_to_paginate\" class=\"col-lg-6\">
    <ul class=\"pagination\" ng-show=\"pager.have_to_paginate\">
        <li ng-show=\"pager.current_page > 1\">
            <a rel=\"nofollow\" class=\"first-page\" title=\"First Page\" ng-click=\"invoice.pager.firstPage()\">First</a>
        </li>
        <li ng-show=\"pager.current_page > 1\">
            <a rel=\"nofollow\" class=\"prev-page\" title=\"First Page\" ng-click=\"invoice.pager.prevPage()\">&laquo;</a>
        </li>
        <li ng-repeat=\"link in pager.links\">
            <a rel=\"nofollow\" class=\"page\" title=\"Page [[ link ]]\" ng-click=\"invoice.pager.page(link - 1)\">[[ link ]]</a>
        </li>    
        <li ng-show=\"pager.current_page <= pager.last_page - 1\">
            <a rel=\"nofollow\" class=\"next-page\" title=\"Next Page\" ng-click=\"invoice.pager.nextPage()\">&raquo;</a>
        </li>
        <li ng-show=\"pager.current_page <= pager.last_page - 1\">
            <a rel=\"nofollow\" class=\"last-page\" title=\"Last Page\" ng-click=\"invoice.pager.lastPage()\">Last</a>
        </li>
    </ul>     
</div>

<div ng-show=\"pager.have_to_paginate\" class=\"col-lg-6 pagination-info\">
   <p>Page [[pager.current_page]] - <strong>[[pager.last_page]] / </strong> [[pager.partial_total]] - <strong>[[pager.total]] Records</strong></p>      
</div>
        
<div ng-show=\"!pager.have_to_paginate\">
    <p ng-show=\"pager.total == 1\">
        <strong>[[ pager.total ]] Record</strong>
    </p>
    
    <p ng-show=\"pager.total > 1\">
        <strong>[[ pager.total ]] Records</strong>
    </p>
</div>";
    }
}

/**
 * Author: Rene Torres
 */

invoiceApp.controller('ListProductController', function($scope, $http, $url) {    
    $scope.product = {
        init: function() {
            $scope.title = "List of Products";
    
            $http
            .get($url.generate('list_products'))
            .success(function(response) { 
                $scope.products = response.data;
                $scope.total = response.total;
            });
        }
    };
    
    $scope.product.init(); 
});

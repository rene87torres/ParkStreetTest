/**
 * Author: Rene Torres
 */

invoiceApp.controller('ListClientController', function($scope, $http, $url) {
    $scope.client = {
        init: function() {
            $scope.title = "List of Clients";
    
            $http
            .get($url.generate('list_clients'))
            .success(function(response) { 
                $scope.clients = response.data;
                $scope.total = response.total;
            }); 
        }
    };
    
    $scope.client.init();    	
});

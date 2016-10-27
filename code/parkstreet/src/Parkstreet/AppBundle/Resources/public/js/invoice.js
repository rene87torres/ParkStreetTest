/**
 * Author: Rene Torres
 */

//Invoice controller
invoiceApp.controller('ListInvoiceController', function($scope, $http, $url) {    
    //Define a invoice object
    $scope.invoice = {
        load: function (offset, limit) {
            //Set the view title
            $scope.title = "List of Invoices";
            
            //Get data from server
            $http
            .get($url.generate('list_invoices', {offset: offset, limit: limit}))
            .success(function(response) {
                //Get invoices to populate table
                $scope.invoices = response.data;
                //Get the total of all records invoice-product
                //$scope.total = response.total;
                //Get pager to build the pagination bar
                $scope.pager = response.pager;
                $scope.invoice.pager.init(response.pager);
                //Get clients to populate the dropdown
                $scope.clients = response.clients;
                //Get dates to populate dropdown
                $scope.dates = response.dates;
            });  
        },
        //Pager object to performs pagination
        pager: {
            init: function(data) {
                $scope.limit = 10;
                $scope.currentPage = data.current_page - 1;
                $scope.lastPage = data.last_page - 1;
                $scope.previousPage = Math.max($scope.currentPage - 1, 0);
                $scope.nextPage = Math.min(Number($scope.currentPage) + 1, $scope.lastPage);
            },
            page: function (page) {
                $scope.invoice.pager.paginate(page);
            },
            nextPage: function() {
                $scope.invoice.pager.paginate($scope.nextPage);
            },
            firstPage: function() {
                $scope.invoice.pager.paginate(0);
            },
            prevPage: function() {
                $scope.invoice.pager.paginate($scope.previousPage);
            },
            lastPage: function () {
                $scope.invoice.pager.paginate($scope.lastPage);
            },
            paginate: function(offset) {
                $scope.invoice.load(offset, $scope.limit);
            }
        },
        //Load products filtered by client id from the server
        loadProductsByClient: function() {
            var clientId = $scope.query_client;
            
            $scope.products = [];
            
            //If a client was selected, get from server
            if(clientId) {                
                $http
                .get($url.generate('load_products_by_client', {clientId: clientId}))
                .success(function(response) {
                    //Get products to populate dropdown
                    $scope.products = response.data;
                });
            }
        },
    };
    
    //Load the set of invoices
    $scope.invoice.load(0, 10);
});

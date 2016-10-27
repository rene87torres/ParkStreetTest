/**
 * Author: Rene Torres
 */

/**** Init invoice filter module ****/
var invoiceFilter = angular.module('invoiceFilter', []);

//Create factory to handle dates
invoiceFilter.factory('factoryDate', function () {
    var factoryDate = {
        filterDate: function(items, queryDate) {
            var results = [];
            
            if(items && queryDate) {
                items.forEach(function(item) { 
                    var invoiceDate = factoryDate.convertDate(item.invoice_date),
                        filterDate = factoryDate.convertDate(queryDate);
                        
                        if(factoryDate.compareDate(invoiceDate, filterDate)) {
                            results.push(item);
                        }
                });                
                
                return results;
            } 
            
            return items;
        },
        convertDate: function(dateString) {
            var date = Date.parse(dateString);
            
            return new Date(date);
        },
        compareDate: function(invoiceDate, queryDate) {   
            var currentDate = new Date();
            
            return (invoiceDate >= queryDate && invoiceDate <= currentDate) ? true : false;
        }
    };
    
    return factoryDate;
});

//Create services to filter dates and inject a factory method
invoiceFilter.service('serviceDate', function (factoryDate) {
    this.filterInvoiceByDate = function(items, queryDate) {        
        return factoryDate.filterDate(items, queryDate);
    };
});
/**** End invoice filter module ****/

//Init invoiceApp and inject invoiceFilter module
var invoiceApp = angular.module('invoiceApp', ['ngRoute', 'invoiceFilter'], resolveConflicts);

//Resolving conflicts between Angular and tweet
function resolveConflicts($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
}

//Create filter to handler the filter date at the view and inject serviceData to process the data
invoiceApp.filter('filterDate', function(serviceDate) {
    return function(items, queryDate) {        
        return serviceDate.filterInvoiceByDate(items, queryDate);
    };
});

//Create factory to route at the application
invoiceApp.factory('$url', function () {
    return {
        generate: function (url, params, absolute) {
            return Routing.generate(url, params, absolute);
        }
    };
});

//Init routing
invoiceApp.config(['$routeProvider', function ($routeProvider) {
    $routeProvider
        .when('/', {	
            templateUrl: Routing.generate('render_invoice'),
            controller: 'ListInvoiceController'
        }).when('/clients', {	
            templateUrl: Routing.generate('render_client'),
            controller: 'ListClientController'
        }).when('/products', {	
            templateUrl: Routing.generate('render_product'),
            controller: 'ListProductController'
        }).otherwise({
            redirectTo: '/'
        });        
}]);

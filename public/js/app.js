/* global angular */

var app = angular.module('app', ['ngRoute', 'app.controllers', 'app.services']);

angular.module('app.controllers', ['ngMessages']);
angular.module('app.services', ['ngResource']);

app.config(['$routeProvider', function($routeProvider){
    $routeProvider
        .when('/login', {
            templateUrl: 'views/login.html',
            controller: 'LoginController'
        })
        .when('/home', {
            templateUrl: 'views/home.html',
            controller: 'TaskController'
        })
}]);

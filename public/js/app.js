/* global angular */

var app = angular.module('app', ['ngRoute', 'app.controllers']);

angular.module('app.controllers', []);

app.config(['$routeProvider', function($routeProvider){
    $routeProvider
        .when('/login', {
            templateUrl: 'views/login.html',
            controller: 'LoginController'
        })
        .when('/home', {
            templateUrl: 'views/home.html',
            controller: 'HomeController'
        })
}])

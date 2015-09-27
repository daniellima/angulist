/* global angular */

var app = angular.module('app', ['ngRoute', 'app.controllers']);

angular.module('app.controllers', []);

app.config(function($routeProvider){
    $routeProvider
        .when('/login', {
            templateURL: 'views/login.html',
            controller: 'LoginController'
        })
        .when('/home', {
            templateURL: 'views/home.html',
            controller: 'HomeController'
        })
})
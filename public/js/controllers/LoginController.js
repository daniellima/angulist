/* global angular */
angular.module('app.controllers')

.controller('LoginController',
    ['$scope', '$location', '$rootScope',
    function($scope, $location, $rootScope){

    $scope.user = {
        email: '',
        password: ''
    };

    $scope.errorMessage = '';

    $scope.login = function(){
        $.post('http://angulist.dev/api/v1/login', $scope.user).then(function(){
            $rootScope.$apply(function() {
                $location.path('home');
            });
        }, function(){
            $rootScope.$apply(function() {
                $scope.errorMessage = 'Não foi possível logar. Credenciais inválidas!';
            });
        });
    }
}]);

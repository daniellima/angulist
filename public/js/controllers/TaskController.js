/* global angular */
angular.module('app.controllers')

.controller('TaskController',
    ['$scope', 'Task',
    function($scope, Task){

    $scope.tasks = Task.query();

}]);

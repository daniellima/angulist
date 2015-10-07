/* global angular */
angular.module('app.controllers')

.controller('TaskController',
    ['$scope', 'Task',
    function($scope, Task){

    $scope.tasks = Task.query();

    $scope.newTaskName = '';

    $scope.add = function(){
        if($scope.newTaskName) {
            Task.save({'name': $scope.newTaskName}, function(task){
                $scope.tasks.unshift(task);
            });

            $scope.newTaskName = '';
        }
    }

}]);

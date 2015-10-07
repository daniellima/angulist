/* global angular */
angular.module('app.services')

.service('Task', ['$resource', function($resource){
    return $resource('http://angulist.dev/api/v1/tasks/:id', {'id':'@id'});
}]);
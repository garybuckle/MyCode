var myApp = angular.module('myApp', []);

myApp.controller('mainController', function($scope, $log) {
    $log.info($scope);
});
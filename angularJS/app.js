var myApp = angular.module('myApp', []);
myApp.controller('mainController', function($scope,$log,$filter) {
    $scope.name = "Gary";
    $scope.formattedname = $filter('uppercase')($scope.name);
    $log.info($scope.name);
    $log.info($scope.formattedname);
});

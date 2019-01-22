var myApp = angular.module('myApp', []);

myApp.controller('mainController', function($scope){
    $scope.name ="Gazza";
    $scope.occupation = "Athlete";
    console.log($scope);

    $scope.getName = function() {
        return 'Gazza';
    }

    $scope.getName();
});


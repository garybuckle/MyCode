var myApp = angular.module('myApp', []);

myApp.controller('mainController', function($scope){


    $scope.getName();
});

function searchPeople(firstName,lastName,height,age)

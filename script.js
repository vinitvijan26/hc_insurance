$scope.middleName = "Al"; $scope.lastName = "Smith"; // Define utility functions 
$scope.getFullName = function () { return $scope.firstName + " " + $scope.middleName + " " + $scope.lastName; }; }; var firstControllerObj = function ($scope) { // Initialize the model object 
$scope.firstModelObj = { firstName: "John" }; }; var secondControllerObj = function ($scope) { // Initialize the model object 
$scope.secondModelObj = { lastName: "Doe" }; // Define utility functions 
$scope.getFullName = function () { return $scope.firstModelObj.firstName + " " + $scope.secondModelObj.lastName; }; }; var thirdControllerObj = function ($scope) { // Initialize the model object 
$scope.thirdModelObj = { middleName: "Al", lastName: "Smith" }; // Define utility functions 
$scope.getFullName = function () { return $scope.firstModelObj.firstName + " " + $scope.thirdModelObj.middleName + " " + $scope.thirdModelObj.lastName; }; };
Get the full source code
ExampleOpen in new window

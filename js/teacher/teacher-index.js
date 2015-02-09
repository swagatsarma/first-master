var masterJiTeacherTeacher = angular.module("masterJiTeacher",['ui.router', 'angular-datepicker']);

masterJiTeacher.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider
    .state('classes', {
        url: '/classes',
        templateUrl: './classes.html'
    })
    .state('new', {
        url: '/new',
        templateUrl: './new.html'
    })
    .state('classes.student', {
        url: '/student/:id',
        templateUrl: './teacher_student.html'
       
    })
    
  $urlRouterProvider.otherwise('/classes');
})

masterJiTeacher.controller('newController',function($scope, $http){
    $scope.newClassForm = { name: '', type: '', day: '', time: '', location: ''};

    $scope.newClassFormSubmit = function(){
        var flag = 0;
        angular.forEach($scope.newClassForm, function(i){
            if(i == '')
                flag = 1;
        })
        if(flag == 1)
          alert("Fill in the details");
        else{
          $http.post("../../ajax/newClass.php", $scope.newClassForm ).success(function(response) {
            console.log(response);
            $scope.newClassForm = { name: '', type: '', day: '', time: '', location: ''};
           });
        }
    }
})

masterJiTeacher.controller('classController', function($scope, $http){
  $scope.fetchClasses = function(){
    $http.get("../../ajax/teacher_classes.php").success(function(response){
      $scope.classes = response; 
    })
  }
})
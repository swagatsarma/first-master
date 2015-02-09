var masterJiAttendee = angular.module("masterJiAttendee",['ui.router']);

masterJiAttendee.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider
    .state('home', {
        url: '/home',
        templateUrl: './home.html'
  })
  $stateProvider
    .state('courses', {
        url: '/courses',
        templateUrl: './coursesAttended.html'
  })
  $stateProvider
    .state('courseProfile', {
        url: '/course/:id/profile',
        templateUrl: './courseProfile.html'
  })
  $stateProvider
    .state('courseProfile.description', {
        url: '/description',
        templateUrl: './courseDescription.html'
  })
  $stateProvider
    .state('courseProfile.videos', {
        url: '/videos',
        templateUrl: './courseVideos.html'
  })

  $urlRouterProvider.otherwise('/home');
})

masterJiAttendee.controller('newController',function($scope, $http){
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

masterJiAttendee.controller('allCoursesController', function($scope, $http){
  $scope.seeMore = [];
  $scope.courses = [];
  for( i = 0; i < 5; i++ ){
    $scope.courses.push({});
    $scope.seeMore.push(false);
  }
  $scope.seeMoreFunction = function(id){
    $scope.seeMore[id] = !$scope.seeMore[id];
  }
})
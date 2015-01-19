<?php
session_start();
if(!isset($_SESSION['teacher_username'])){
  header('Location: ../../index.php');
}
else{
  // echo $_SESSION['teacher_username'];
}

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../dependencies/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../../bower_components/angular-native-picker/build/themes/default.css">
    <script type="text/javascript" src="../../dependencies/angular/angular.min.js"></script>
  <script type="text/javascript" src="../../dependencies/angular/angular-ui-router.min.js"></script>
  <script type="text/javascript" src="../../bower_components/angular-native-picker/build/angular-datepicker.js"></script>
  <script type="text/javascript" src="../../js/teacher/teacher-index.js"></script>
</head>
<body ng-app="masterJi">
  <a ui-sref="new"><button class="btn btn-success">New Class</button></a>
  <a ui-sref="classes"><button class="btn btn-success">View Classes</button></a>
  <div ui-view></div>
</body>
</html>
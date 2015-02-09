<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../dependencies/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../../dependencies/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../../css/index.css">
  <link rel="stylesheet" type="text/css" href="../../css/student.css">
  <script type="text/javascript" src="../../dependencies/angular/angular.min.js"></script>
  <script type="text/javascript" src="../../dependencies/angular/angular-ui-router.min.js"></script>
  <script type="text/javascript" src="../../js/attendee/attendee-index.js"></script>
</head>
<body ng-app="masterJiAttendee">
  <nav class="navbar-wrapper navbar-default navbar-fixed-top navmenu" role="navigation">
    <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span style="color:#eee;"><i class="fa fa-google-wallet"></i> Masterji</span></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a ui-sref="home">Home</a></li>
          <li><a ui-sref="courses">View Courses</a></li>
          <li><a href="php/themes.php">Search Courses</b></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a onclick="showModal('loginModal')"><i class="fa fa-flash"></i> Login</a></li>
          <li>
            <a  onclick="showModal('signUpModal')"><i class="fa fa-edit"></i> Sign Up</b></a>
          </li>
                  </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
  
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./dependencies/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./dependencies/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="./css/index.css">
  <script type="text/javascript" src="./dependencies/js/jquery.js"></script>
  <script type="text/javascript" src="./dependencies/js/bootstrap.js"></script>
  <script type="text/javascript" src="./js/index.js"></script>
</head>
<body>
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
       <!--  <ul class="nav navbar-nav">
          <li><a href="php/about.php">About Us</a></li>
          <li><a href="php/themes.php">Themes</b></a></li>
          <li><a href="php/rules.php">Rules</b></a></li>
        </ul> -->
        <ul class="nav navbar-nav navbar-right">
          <li><a onclick="showModal('loginModal')"><i class="fa fa-flash"></i> Login</a></li>
          <li>
            <a  onclick="showModal('signUpModal')"><i class="fa fa-edit"></i> Sign Up</b></a>
          </li>
                  </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
  <div class="jumbotron">
    <div class="col-md-2"></div>
    <div class="jum col-md-7">
      <input class="form-control" placeholder="Search for classes...">
    </div>

  </div>
  <div class="container three" style="padding-bottom:40px">
    <div class="text-center"><h3>Join classes from experienced professionals...</h3></div>
    <a><div class="col-md-4">
      <div class="box text-center">
        <h5><i class="fa fa-paper-plane"></i> Introduction to R</h5>
        <h6><i class="fa fa-location-arrow"></i> Bangalore <i class="fa fa-institution"></i> Swagat Sarma</h6>
        <h6><i class="fa fa-inr"></i> 540/-</h6>
      </div>
    </div></a>
    <a><div class="col-md-4">
      <div class="box text-center">
        <h5><i class="fa fa-paper-plane"></i> Introduction to R</h5>
        <h6><i class="fa fa-location-arrow"></i> Bangalore <i class="fa fa-institution"></i> Swagat Sarma</h6>
        <h6><i class="fa fa-inr"></i> 540/-</h6>
      </div>
    </div></a>
    <a><div class="col-md-4">
      <div class="box text-center">
        <h5><i class="fa fa-paper-plane"></i> Introduction to R</h5>
        <h6><i class="fa fa-location-arrow"></i> Bangalore <i class="fa fa-institution"></i> Swagat Sarma</h6>
        <h6><i class="fa fa-inr"></i> 540/-</h6>
      </div>
    </div></a>
    <a><div class="col-md-4">
      <div class="box text-center">
        <h5><i class="fa fa-paper-plane"></i> Introduction to R</h5>
        <h6><i class="fa fa-location-arrow"></i> Bangalore <i class="fa fa-institution"></i> Swagat Sarma</h6>
        <h6><i class="fa fa-inr"></i> 540/-</h6>
      </div>
    </div></a>
    <a><div class="col-md-4">
      <div class="box text-center">
        <h5><i class="fa fa-paper-plane"></i> Introduction to R</h5>
        <h6><i class="fa fa-location-arrow"></i> Bangalore <i class="fa fa-institution"></i> Swagat Sarma</h6>
        <h6><i class="fa fa-inr"></i> 540/-</h6>
      </div>
    </div></a>
    <a><div class="col-md-4">
      <div class="box text-center">
        <h5><i class="fa fa-paper-plane"></i> Introduction to R</h5>
        <h6><i class="fa fa-location-arrow"></i> Bangalore <i class="fa fa-institution"></i> Swagat Sarma</h6>
        <h6><i class="fa fa-inr"></i> 540/-</h6>
      </div>
    </div></a>  
  </div>
  <div class="container tab two">
    <div class="text-center"><h3>Choose from all kinds of courses... </h3></div>
    <div class="col-md-4 boxes"><div class="img-cover"></div><img src="./images/python.jpg" width="100%" height="120px"><</div>
    <div class="col-md-3 boxes"><div class="img-cover"></div><img src="./images/maths.jpg" width="100%" height="150px"></div>
    <div class="col-md-4 boxes"><div class="img-cover"></div><img src="./images/gmat.jpg" width="100%" height="150px"></div>
  </div>
  <div class="container-fluid tab one">
  <div class="text-center"><h3>Know about us... </h3></div>
We are a bunch of enthusiastic professionals who want enable others to learn to use and apply business analytics either as a professional career choice or as a tool to increase business value. We want to create a platform where cheap and easy instruction can be shared between trainers and students for substantial knowledge gain for all invovled. We hope that in doing so, we create the best analytics professionals who are not only well versed with verious analytical techniques and technologies, but are also ahead in the aspect of applying analytics to business problems, whether they be muddy in nature or straightforward solutions. As we know that all of us are time strapped, we offer on demand classes where anybody can take up classes as per their convenience
  </div>
  <footer class="container-fluid">
  <i class="fa fa-twitter"></i>
  <i class="fa fa-facebook"></i>
  <i class="fa fa-google-plus"></i>
  </footer>



<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <div class="teacher-login">
          <input type="text" id="teacher_username" class="form-control" placeholder="Teacher Login"><br>
          <input type="password" id="teacher_login_password" class="form-control" placeholder="Teacher Password"><br>
          <button class="btn btn-primary btn-block" onclick="teacherLogin()">Login</button>
          <br><div class="teacher-show"  onclick="showStudentLogin();">Are you a student? </div>
        </div>
        <div class="student-login">
          <input type="text" id="student_username" class="form-control" placeholder="Student Login"><br>
          <input type="password" id="student_login_password" class="form-control" placeholder="Student Password"><br>
          <button class="btn btn-primary btn-block" onclick="studentLogin()">Login</button>
          <br><div class="teacher-show" onclick="showTeacherLogin();">Are you a teacher? </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
      </div>
      <div class="modal-body">
        <div class="teacher-signup">
          <h4>Teacher</h4>
          <input type="text" id="teacher_firstname" class="form-control" placeholder="First Name"><br>
          <input type="text" id="teacher_lastname" class="form-control" placeholder="Last Name"><br>
          <input type="text" id="teacher_email" class="form-control" placeholder="Email"><br>
          <input type="password" id="teacher_password" class="form-control" placeholder="Password"><br>
          <input type="text" id="teacher_mobile" class="form-control" placeholder="Mobile"><br>
          <input type="text" id="teacher_addressline1" class="form-control" placeholder="Address Line 1"><br>
          <input type="text" id="teacher_addressline2" class="form-control" placeholder="Address Line 2"><br>
          <input type="text" id="teacher_gender" class="form-control" placeholder="Gender"><br>
          <input type="text" id="teacher_education" class="form-control" placeholder="Education"><br>
          <input type="text" id="teacher_college" class="form-control" placeholder="College"><br>
          <input type="text" id="teacher_working" class="form-control" placeholder="Working"><br>
          <input type="text" id="teacher_organization" class="form-control" placeholder="Organization"><br>
          <input type="text" id="teacher_experience" class="form-control" placeholder="Experience"><br>
          <input type="text" id="teacher_designation" class="form-control" placeholder="Designation"><br>
          <input type="text" id="teacher_description" class="form-control" placeholder="Description"><br>
          <button class="btn btn-primary btn-block" onclick="teacherSignUp()">Sign Up</button>
          <br><div class="teacher-show" onclick="showStudentSignUp();">Are you a student? </div>
         </div>  
        <div class="student-signup">
          <h4>Student</h4>
          <input type="text" id="student_firstname" class="form-control" placeholder="First Name"><br>
          <input type="text" id="student_lastname" class="form-control" placeholder="Last Name"><br>
          <input type="text" id="student_email" class="form-control" placeholder="Email"><br>
          <input type="password" id="student_password" class="form-control" placeholder="Password"><br>
          <input type="text" id="teacher_mobile" class="form-control" placeholder="Mobile"><br>
          <button class="btn btn-primary btn-block" onclick="studentSignUp()">Sign Up</button>
          <br><div class="teacher-show" onclick="showTeacherSignUp();">Are you a teacher? </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



<!-- <div class="col-md-6">
  <h3>Classes</h3>
  <?php include('./ajax/index_classes.php'); ?>
</div>
<div class="teacher-login col-md-3">
  <h3>Teacher Login</h3>
  <input type="text" id="teacher_username" class="form-control" placeholder="Teacher Login"><br>
  <input type="password" id="teacher_login_password" class="form-control" placeholder="Teacher Password"><br>
  <button class="btn btn-primary btn-block" onclick="teacherLogin()">Login</button>
</div>
<div class="teacher-signup col-md-4">
  <h3>Teacher Login</h3>
  <input type="text" id="teacher_firstname" class="form-control" placeholder="First Name"><br>
  <input type="text" id="teacher_lastname" class="form-control" placeholder="Last Name"><br>
  <input type="text" id="teacher_email" class="form-control" placeholder="Email"><br>
  <input type="password" id="teacher_password" class="form-control" placeholder="Password"><br>
  <input type="text" id="teacher_mobile" class="form-control" placeholder="Mobile"><br>
  <input type="text" id="teacher_addressline1" class="form-control" placeholder="Address Line 1"><br>
  <input type="text" id="teacher_addressline2" class="form-control" placeholder="Address Line 2"><br>
  <input type="text" id="teacher_gender" class="form-control" placeholder="Gender"><br>
  <input type="text" id="teacher_education" class="form-control" placeholder="Education"><br>
  <input type="text" id="teacher_college" class="form-control" placeholder="College"><br>
  <input type="text" id="teacher_working" class="form-control" placeholder="Working"><br>
  <input type="text" id="teacher_organization" class="form-control" placeholder="Organization"><br>
  <input type="text" id="teacher_experience" class="form-control" placeholder="Experience"><br>
  <input type="text" id="teacher_designation" class="form-control" placeholder="Designation"><br>
  <input type="text" id="teacher_description" class="form-control" placeholder="Description"><br>
  <button class="btn btn-primary btn-block" onclick="teacherSignUp()">Login</button>
 --></div>  
</body>
</html>
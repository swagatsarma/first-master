
$(document).ready(function(){
  $(".teacher-login").hide();
  $(".teacher-signup").hide();
})
function showModal(x){
  $('#'+x).modal();
}
function showTeacherLogin(){
  $(".student-login").hide();
  $(".teacher-login").show();
}
function showStudentLogin(){
  $(".teacher-login").hide();
  $(".student-login").show();
}
function showTeacherSignUp(){
  $(".student-signup").hide();
  $(".teacher-signup").show();
}
function showStudentSignUp(){
  $(".teacher-signup").hide();
  $(".student-signup").show();
}
function studentLogin(){
  window.location.href = "./pages/attendee/index.php";
}
function teacherSignUp(){
  teacherSignupForm = ["teacher_firstname", "teacher_lastname", "teacher_email", "teacher_password", "teacher_mobile", "teacher_addressline1", "teacher_addressline2", "teacher_gender", "teacher_education", "teacher_college", "teacher_working", "teacher_organization", "teacher_experience", "teacher_designation", "teacher_description"];
  var flag = 0;
  for(i in teacherSignupForm){
    if($("#"+teacherSignupForm[i]).val() == ''){
      // console.log(teacherSignupForm[i]);
      flag = 1;
    }
  }
  if(flag == 1)
    alert("Fill in all the details");
  else{
    $.post("./ajax/teacherSignup.php", { firstname: $("#"+teacherSignupForm[0]).val(), lastname: $("#"+teacherSignupForm[1]).val(), email: $("#"+teacherSignupForm[2]).val(), password: $("#"+teacherSignupForm[3]).val(), mobile: $("#"+teacherSignupForm[4]).val(), addressline1: $("#"+teacherSignupForm[5]).val(), addressline2: $("#"+teacherSignupForm[6]).val(), gender: $("#"+teacherSignupForm[7]).val(), education: $("#"+teacherSignupForm[8]).val(), college: $("#"+teacherSignupForm[9]).val(), working: $("#"+teacherSignupForm[10]).val(), organization: $("#"+teacherSignupForm[11]).val(), experience: $("#"+teacherSignupForm[12]).val(), designation: $("#"+teacherSignupForm[13]).val(), description: $("#"+teacherSignupForm[14]).val() }, function(data,status){
      $('.form-control').val('');
    })
  }
}

function teacherLogin(){
  teacherLoginForm = ["teacher_username", "teacher_login_password"];
  var flag = 0;
  for(i in teacherLoginForm){
    if($("#"+teacherLoginForm[i]).val() == ''){
      flag = 1;
    }
  }
  if(flag == 1)
    alert("Fill in all the details");
  else{
    $.post("./ajax/teacherLogin.php", { username: $("#"+teacherLoginForm[0]).val(), password: $("#"+teacherLoginForm[1]).val() },function( data, status){
      if(data == 'success')
        window.location.href = "./pages/teacher/index.php";
      else
        alert("Wrong password");
    })
  }
}
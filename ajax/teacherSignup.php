<?php
include('db.php');

$sql = "INSERT INTO `teacher_login` (username, password) VALUES ('".$_POST['email']."', '".$_POST['password']."')";
mysql_query($sql) or die(mysql_error());

$sql1 = "INSERT INTO `teacher_data` (firstname, lastname, email, mobile, addressline1, addressline2, gender, education, college, working, organization, experience, designation, description) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['mobile']."', '".$_POST['addressline1']."', '".$_POST['addressline2']."', '".$_POST['gender']."', '".$_POST['education']."', '".$_POST['college']."', '".$_POST['working']."', '".$_POST['organization']."', '".$_POST['experience']."', '".$_POST['designation']."', '".$_POST['description']."')"; 
mysql_query($sql1) or die(mysql_error());
echo "success";

?>
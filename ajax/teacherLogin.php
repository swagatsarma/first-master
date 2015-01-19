<?php
session_start();

include('db.php');

$sql = "SELECT * FROM `teacher_login` WHERE username='".$_POST['username']."'";
$query = mysql_query($sql) or die(mysql_error());

$result = mysql_fetch_array($query);

if($result['password'] == $_POST['password']){
  $_SESSION['teacher_username'] = $_POST['username'];
  echo "success";
}
else{
  echo "failed";
}
?>
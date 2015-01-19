<?php
session_start();

include('db.php');

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$email = $request->name;

$sql = "INSERT INTO `classes` (teacher, name, type, day, time, location) VALUES ('".$_SESSION['teacher_username']."','".$request->name."','".$request->type."','".$request->day."','".$request->time."','".$request->location."')";

$query = mysql_query($sql) or die(mysql_error());
if(mysql_affected_rows() == 1)
  echo "success";
else 
  echo "failed";
?>
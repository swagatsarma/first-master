<?php
session_start();

include('db.php');

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$email = $request->name;

$sql = "SELECT * FROM `classes` WHERE `teacher`='".$_SESSION['teacher_username']."'";
$query = mysql_query($sql);
$ar = '[';

while($result = mysql_fetch_array($query)){
  $ar .= '{ "name": "'.$result['name'].'",';
  $ar .= '"id": "'.$result['id'].'",';
  $ar .= '"type": "'.$result['type'].'",';
  $ar .= '"day": "'.$result['day'].'",';
  $ar .= '"time": "'.$result['time'].'",';
  $ar .= '"location": "'.$result['location'].'"},';
}

$ar .= ']';

$ar = str_replace(',]', ']', $ar);

echo ($ar);
?>
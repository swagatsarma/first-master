<?php
session_start();

include('db.php');

$sql = "SELECT * FROM `classes` ORDER BY `timestamp`";
$query = mysql_query($sql) or die(mysql_error());
while($result = mysql_fetch_array($query)){
  echo "Name: ".$result['name'].", Type: ".$result['type'].", Day: ".$result['day'].", Time: ".$result['time'].", Location:".$result['location'].' <button class="btn btn-primary">Book</button><br>';
}
?>
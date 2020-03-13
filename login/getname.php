<?php
 session_start();


require 'dbconn.inc.php';
$email = $_SESSION['email'];


$query1 = "SELECT name FROM usr WHERE email=";
$query2 = '"'.$email.'";';
$query = $query1.$query2;
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_row($result);
$_SESSION['name'] = $row[0];

?>
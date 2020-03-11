<?php

$servername = "localhost";
$dbUsername = "";
$dbPassword = "Ohiggins2062";
$dbName = "project_usrs";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if (!conn){
    die("connection failed: ".mysqli_connect_error());
}
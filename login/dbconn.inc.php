<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "Ohiggins2062";
$dbName = "project_usrs";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if (!conn){
    die("connection failed: ".mysqli_connect_error());
}
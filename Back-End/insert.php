<?php
$host = "localhost";
$Username = "root";
$Email = "";
$Password = "";
$database = "AgriTrack";
$connect = mysqli_connect($host, $Username, $Email, $Password, $database,);
if(!$connect){
  echo("Connection Failed!");
}
?>
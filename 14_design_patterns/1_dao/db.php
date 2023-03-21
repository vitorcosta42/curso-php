<?php 
$db = "daotest";
$host = "localhost";
$user = "root";
$pass = "password";

$conn = new PDO("mysql:dbname=$db;host=$host",$user,$pass);

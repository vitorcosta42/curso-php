<?php
include_once("dao/CarDAO.php");
include_once("db.php");

$car = new CarDAO($conn);
$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST["color"];

$newCar = new Car();

$newCar->setBrand($brand);
$newCar->setKm($km);
$newCar->setColor($color);

$car->create($newCar);
header("Location: index.php");
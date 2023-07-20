<?php

if (empty($_POST)) {
    $buttonValue ="";
  } else {
    $buttonValue = $_POST["buttonValue"];
  }
 
$db = new PDO("mysql:host=localhost;dbname=smartmethods", "root", "");

$statement = $db->prepare("INSERT INTO controller (directions) VALUES (:buttonValue)");

$statement->bindParam(":buttonValue", $buttonValue);

$statement->execute();

$db = null;
?>

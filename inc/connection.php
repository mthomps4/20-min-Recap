<?php
$dbname = "crudytest";
$dbuser = "root";
$dbpw = "";

try{
  // $db = new PDO("sqlite:" . __DIR__ . "/database.db");
  $db = new PDO("mysql:host=localhost;dbname=$dbname",$dbuser,$dbpw);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected to Database";
}catch(Exception $e){
  echo $e->getMessage();
  exit;
}

?>

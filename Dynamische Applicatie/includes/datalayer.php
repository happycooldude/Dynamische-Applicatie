<?php
function createDatabase(){
  $servername = "localhost";
  $username = "root";
  $password = "mysql";
  $dbname = "dynamische applicatie";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $conn;
  echo "Connected successfully";
}
  catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
  }
}

function readCharacters(){
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("SELECT * FROM characters");
  $stmt->execute();
  $result=$stmt->fetchAll();
  $dbConn=null;
  return $result;
}

function readsubject($id){
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("SELECT * FROM characters WHERE id=:id");
  $stmt->bindParam(":id",$id);
  $stmt->execute();
  $result=$stmt->fetch();
  $dbConn=null;
  return $result;
}
?>
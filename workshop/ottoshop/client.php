<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=ottoshop", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit();
}

$brand = $_GET["brand"];
$color = $_GET["color"];
$year = $_GET["year"];
$plate = $_GET["plate"];

$stmt = $conn->prepare("INSERT INTO `ottos` (`id`, `brand`, `color`, `construction year`, `license plate`) VALUES (NULL, '$brand', '$color', '$year', '$plate');");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$clients = $stmt->fetchAll();

// $response = json_encode($clients);
// header("Content-type:application/json");
header("Location: client.html");
// $response = "Saul Roadman";
// echo $response;

?>
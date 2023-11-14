<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $csvFile = 'csv/colors.csv';

    $file = fopen($csvFile, 'r');

    while (($row = fgetcsv($file, 0, ';')) !== false) {
        $stmt = $conn->prepare("INSERT INTO color (id, name, code) VALUES (?, ?, ?)");
        
        $stmt->bindParam(1, $row[0]);
        $stmt->bindParam(2, $row[1]);
        $stmt->bindParam(3, $row[2]);
        
        $stmt->execute();
    }

    fclose($file);

    echo "Data imported successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

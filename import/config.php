<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $csvFile = 'csv/xiaomi.csv';

    $file = fopen($csvFile, 'r');

    // Use fgetcsv to read and discard the header row
    $junk = fgetcsv($file, 0, ';');

    while (($row = fgetcsv($file, 0, ';')) !== false) {
        $stmt = $conn->prepare("INSERT INTO model (name, image, code, colors, brand_id, repair_category_id, status, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->bindParam(1, $row[1]);
        $stmt->bindParam(2, $row[2]);
        $stmt->bindParam(3, $row[3]);
        $stmt->bindParam(4, $row[4]);
        $stmt->bindParam(5, $row[5]);
        $stmt->bindParam(6, $row[6]);
        $stmt->bindParam(7, $row[7]);
        $stmt->bindParam(8, $row[8]);
        
        $stmt->execute();
    }

    fclose($file);

    echo "Data imported successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

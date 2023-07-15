<?php
$host = "localhost";
$dbName = "proje";
$username = "root";
$password = "";

try {
    $dbconn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}
?>

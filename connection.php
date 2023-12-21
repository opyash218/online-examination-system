<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "exam_system";

try {
    $dbh = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }
?>
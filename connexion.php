<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=clients", 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'error: ' . $e->getMessage(); 
}
?>
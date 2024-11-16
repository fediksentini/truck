<?php
require("connexion.php");

if (isset($_GET['idd'])) {
    $id = $_GET['idd'];
    $stmt = $con->prepare('DELETE FROM truck WHERE idt = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
    header("location:Myt.php");

    }
}
?>
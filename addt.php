<?php

include('truck.php');
include('truckmanager.php');
require_once('login.php');
require ("connexion.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['idt']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['km']) && isset($_POST['stock']) && isset($_POST['photo']) &&
        !empty($_POST['idt']) && !empty($_POST['type']) && !empty($_POST['price']) && !empty($_POST['km']) && !empty($_POST['stock']) && !empty($_POST['photo'])) {

        if(isset($_SESSION['user_email'])) {
            $user_email = $_SESSION['user_email'];
        } else {
            header("Location: login.html");
            exit(); 
        }

        $truck = new Truck($_POST['idt'], $_POST['type'], $_POST['price'], $_POST['km'], $_POST['stock'], $user_email, $_POST['photo']);
        $clientManager = new TruckManager($con);
        $clientManager->addTruck($truck);

    } else {
        echo "Please fill out all form fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add A Truck</title>
    <link rel="stylesheet" href="form.css">
    <link rel="icon" href="icon.jpg" type="image/x-icon">
</head>
<body>
    <h1>Add a Truck</h1>
    <form action="addt.php" method="post">
        <table>
        <tr>
            <td><label for="idt">Truck's ID: </label></td>
            <td><input type="text" placeholder="Truck's ID" name="idt" required></td>
        </tr>
        <tr>
            <td><label for="type">Truck's Type:</label></td>
            <td><input type="text" placeholder="Truck's Type" required name="type"></td>
        </tr>
        <tr>
            <td><label for="price">Your Price:</label></td>
            <td><input type="text" placeholder="Price" required name="price"></td>
        </tr>
        <tr>
            <td><label for="km">Kilometers:</label></td>
            <td><input type="text" placeholder="Kilometers" required name="km"></td>
        </tr>
        <tr>
            <td><label for="stock">Stock:</label></td>
            <td><input type="text" placeholder="Stock" required name="stock"></td>
        </tr>
        <tr>
            <td><label for="photo">Your Photo:</label></td>
            <td><input type="text" placeholder="A link to the truck image" required name="photo"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Add</button></td>
        </tr>
    </table>
    
   </form>
</body>
</html>
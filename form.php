<?php
include('client.php');
include('clientmanager.php');
require ("connexion.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password']) &&
        !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        $client = new Client($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['password']);


        

        $clientManager = new ClientManager($con);
        $r=$clientManager->addClient($client);
        if($r==='Created with success'){
            header("Location: login.html");
            exit;
        }

    } else {
        echo "Please fill out all form fields.";
    }
}
?>

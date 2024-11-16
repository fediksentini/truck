<?php
session_start(); 

include ('clientmanager.php');
require ("connexion.php");




if (isset($_POST['sub'])) {
    if (isset($_POST['mail']) && isset($_POST['pass']) && !empty($_POST['mail']) && !empty($_POST['pass'])) {

        $email = $_POST["mail"];
        $password = $_POST["pass"];
        $clientMa = new ClientManager($con);
        $_SESSION['user_email'] = $email;
        if ($clientMa->login($email, $password)){} 
            
         else {
            echo "<script>alert('Invalid email or password.');</script>";
        }
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}
?>



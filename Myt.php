<?php
include('truck.php');
include('truckmanager.php');
require_once('login.php');
require ("connexion.php");


    $stmt = $con->prepare('SELECT * FROM truck WHERE email = :emai');
    $stmt->bindParam(':emai', $_SESSION['user_email']);
    $stmt->execute();
        
    if ($stmt->rowCount()) {
        echo'<table border="2"><tr>
        <th>id</th>
        <th>type</th>
        <th>price</th>
        <th>km</th>
        <th>stock</th>
        <th>contact</th>
        <th>operations</th>
        </tr>';
    
    while($donnees = $stmt->fetch(PDO::FETCH_ASSOC)){
     echo'  
    <tr><td><a href="restruck.php?id='.$donnees["idt"].'">'.$donnees["idt"].'</a> </td>
    <td>'.$donnees["type"].'</td>
    <td>'.$donnees["price"].'</td>
    <td>'.$donnees["km"].'</td>
    <td>'.$donnees["stock"].'</td>
    <td>'.$donnees["email"].'</td>
    <td><button><a href="delete.php?idd='.$donnees["idt"].'">delete</a><button>
    <button><a href="modify.php?idm='.$donnees["idt"].'">modify</a><button></td></tr>';}
            } else {
                echo 'no truck for sell';
            }
        
                


        



?>
<?php
require ("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truck Supermarket Login</title>
    <link rel="icon" href="icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="form.css">

</head>
<body>
    <h1>main</h1>
    <form method="post">
        <table>
        <tr>
        <td><label for="search">search to buy:</label></td>
        <td><input type="text" placeholder="search" name="search"></td>
        </tr>
        <tr>
        <td><button name="st">search</button></td>
        <td><button name="aa">all</button></td>
        <td><a href="addt.php">add a truck</a></td>
        
        </tr>
        </table>
</form>
<a href="login.html"> logout </a><br>
<a href="Myt.php"> My trucks </a>
    <?php

        if(isset($_POST['aa'])){
            $stmt = $con->prepare('SELECT * FROM truck');
            $stmt->execute();
                
            if ($stmt->rowCount()) {
                echo'<table border="2"><tr>
                <th>id</th>
                <th>type</th>
                <th>price</th>
                <th>km</th>
                <th>stock</th>
                <th>contact</th>
                </tr>';
            
            while($donnees = $stmt->fetch(PDO::FETCH_ASSOC)){
             echo'  
            <tr><td><a href="restruck.php?id='.$donnees["idt"].'">'.$donnees["idt"].'</a></td>
            <td>'.$donnees["type"].'</td>
            <td>'.$donnees["price"].'</td>
            <td>'.$donnees["km"].'</td>
            <td>'.$donnees["stock"].'</td>
            <td>'.$donnees["email"].'</td></tr>';}
                    } else {
                        echo 'truck is not found';
                    }
                }
        





        if(isset($_POST['st'])){
        $search=$_POST['search'];
        $stmt = $con->prepare('SELECT * FROM truck WHERE idt = :id or type = :tpe or price = :pri or km = :k or stock = :stoc or email = :emai');
        
        $stmt->bindParam(':id', $search);
        $stmt->bindParam(':tpe', $search);
        $stmt->bindParam(':pri', $search);
        $stmt->bindParam(':k', $search);
        $stmt->bindParam(':stoc', $search);
        $stmt->bindParam(':emai', $search);
        
        $stmt->execute();
            
        if ($stmt->rowCount()) {
            echo'<table border="2"><tr>
            <th>id</th>
            <th>type</th>
            <th>price</th>
            <th>km</th>
            <th>stock</th>
            <th>contact</th>
            </tr>';
        
        while($donnees = $stmt->fetch(PDO::FETCH_ASSOC)){
         echo'  
        <tr><td><a href="restruck.php?id='.$donnees["idt"].'">'.$donnees["idt"].'</a></td>
        <td>'.$donnees["type"].'</td>
        <td>'.$donnees["price"].'</td>
        <td>'.$donnees["km"].'</td>
        <td>'.$donnees["stock"].'</td>
        <td>'.$donnees["email"].'</td></tr>';}
                } else {
                    echo 'truck is not found';
                }
            }
    
    ?>
   </table> 

</body>
</html>
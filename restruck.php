
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truck details</title>
    <link rel="icon" href="icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="form.css">

</head>
<body>
    <?php
require ("connexion.php");

    
        $stmt = $con->prepare('SELECT * FROM truck WHERE idt = :id');
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if($result) {
            echo '<figure>
                <img src="' . $result['photo'] . '" width="250" height="300">
                </figure>
                <figcaption>type :' . $result['type'] . '<br>price : '
                . $result['price'] . '<br> km : '
                . $result['km'] . '<br>stock : '
                . $result['stock'] . '<br>email : '
                . $result['email'] . '<br>
                </figcaption>';
        } else {
            echo "No truck found with that ID.";
        }

    ?>

</body>
</html>

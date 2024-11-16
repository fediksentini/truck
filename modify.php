<?php
require("connexion.php");


if (isset($_POST['sumi'])) {
    var_dump($_GET);
    $id=$_POST['id'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $km = $_POST['km'];
    $stock = $_POST['stock'];
    $photo = $_POST['photo'];

    $stmt = $con->prepare('UPDATE truck SET type = :type, price = :price, km = :km, stock = :stock, photo = :photo WHERE idt = :id');
    $stmt->bindParam(':id', $id );
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':km', $km);
    $stmt->bindParam(':stock', $stock);
    $stmt->bindParam(':photo', $photo);

    $stmt->execute();
    header("location:Myt.php");
}

?>
<form action="modify.php" method="post">
    <table>
    <tr>
            <td><label for="id">id:</label></td>
            <td><input type="text" value=<?php echo $_GET['idm'];?> readonly name="id"></td>
        </tr>
        <tr>
            <td><label for="type">Type:</label></td>
            <td><input type="text" placeholder='type' required name="type"></td>
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
            <td><button type='submit' name='sumi'>Modify</button></td>
        </tr>
    </table>
</form>
 
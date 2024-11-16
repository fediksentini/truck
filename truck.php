<?php 
class Truck{
private int $id;
private string $type;
private int $price;
private int $km;
private int $stock;
private string $email;
private string $photo;




public function setId(int $id){
$this->id=$id;}

public function setType(string $type){
$this->type=$type;}

public function setPrice(int $price){
$this->price=$price;}

public function setKm(int $km){
$this->km=$km;}

public function setStock(int $stock){
$this->stock=$stock;}

public function __set($att,$val){
$tabatt=get_class_vars(get_class($this));
if(array_key_exists($att,$tabatt)){
    $this->$att=$val;
}
else
echo 'this attribut is not existed';
}

public function getId():int{
return $this->id;}
    
public function getType():string{
return $this->type;}
    
public function getPrice():int{
return $this->price;}
    
public function getKm():int{
return $this->km;}
    
public function getStock():int{
return $this->stock;}
public function getEmail():string{
    return $this->email;}
    public function getPhoto():string{
        return $this->photo;}
public function __get($att){
    if(isset($this->$att)){
    return $this->$att;}
    else
    echo 'this attribut is not existed';
}

public function __construct($id, $type, $price, $km, $stock, $email, $photo) {
    $this->id = $id;               // Assigning ID
    $this->type = $type;           // Assigning type
    $this->price = $price;         // Assigning price
    $this->km = $km;               // Assigning kilometers traveled
    $this->stock = $stock;         // Assigning stock
    $this->photo = $photo;         // Assigning photo
    $this->email = $email; // Assigning email of the associated client
}


}?>
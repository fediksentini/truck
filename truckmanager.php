<?php
class Truckmanager{
    public PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function setDb(PDO $db) {
        $this->db = $db;
    }
    public function addTruck(Truck $tr) {
        try {
            $duplicate = $this->db->prepare("SELECT * FROM truck WHERE idt = :idt");
            $duplicate->bindValue(':idt', $tr->getId());
            $duplicate->execute();
    
            if ($duplicate->rowCount() > 0) {
                echo "<script>alert('This truck is already on sell');</script>";
            } else {
                $q = $this->db->prepare('INSERT INTO truck (idt, type, price, km , stock , email, photo) VALUES (:id, :ty, :pr, :km, :sto, :ema, :ph)');
                $q->bindValue(':id', $tr->getId());
                $q->bindValue(':ty', $tr->getType());
                $q->bindValue(':pr', $tr->getPrice());
                $q->bindValue(':km', $tr->getKm());
                $q->bindValue(':sto', $tr->getStock());
                $q->bindValue(':ema', $tr->getEmail());
                $q->bindValue(':ph', $tr->getPhoto());
                $result = $q->execute();
    
                if ($result) {
                    echo "<script>alert('the truck is added');</script>";
                } else {
                    echo "<script>alert('Failed to add the truck');</script>";
                }
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }



}


?>
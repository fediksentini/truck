<?php

class ClientManager {
    public PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function setDb(PDO $db) {
        $this->db = $db;
    }

    public function addClient(Client $cl) {
        try {
            $duplicate = $this->db->prepare("SELECT * FROM clients WHERE email = :email");
            $duplicate->bindValue(':email', $cl->getEmail());
            $duplicate->execute();
    
            if ($duplicate->rowCount() > 0) {
                echo "<script>alert('The email is already taken');</script>";
            } else {
                $q = $this->db->prepare('INSERT INTO clients (fname, lname, email, pass) VALUES (:fn, :ln, :email, :pass)');
                $q->bindValue(':fn', $cl->getFname());
                $q->bindValue(':ln', $cl->getLname());
                $q->bindValue(':email', $cl->getEmail());
                $q->bindValue(':pass', $cl->getPassword());
                $result = $q->execute();
    
                if ($result) {
                    return 'Created with success';
                } else {
                    echo "<script>alert('Failed to add client');</script>";
                }
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function login($email, $password)
{
    $stmt = $this->db->prepare('SELECT * FROM clients WHERE email = :email');
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    
    if ($stmt->rowCount()) {
        $donnees = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($password == $donnees["pass"]) {
            header("location: main.php");
                       
        } else {
            echo 'Password is incorrect';
        }
    } else {
        echo 'You need to register first';
    }
}
    }
?>
<?php
require 'vendor/autoload.php';

class Connect
{
    protected PDO $db;

    public function __construct($dbname = "yavtuh", $username = 'yavtuh', $password = 'yavtuh')
    {
        try {
            $this->db = new PDO("mysql:host=localhost;port=3305; dbname=$dbname", "$username", "$password");


        } catch (PDOException $e) {
            echo $e->getMessage();

        }
    }
    public function createTable(string $nametable)
    {

        $query = $this->db->prepare("CREATE TABLE {$nametable} (id int unsigned auto_increment primary key ,name varchar(50) not null ,surname varchar(100) not null, age int not null, email varchar(256) not null unique);");
        $query->execute();

    }
    public function getnameTable(){
            $sql = 'SHOW TABLES';
            $query = $this->db->query($sql);
            return $query->fetchAll(PDO::FETCH_COLUMN);
    }

    public function addUser(string $nametable,string $name, string $surname, int $age, string $email){
        $query = $this->db->prepare("INSERT INTO {$nametable} (name, surname, age, email) VALUES(:name, :surname, :age, :email)");
        $user_data = ['name'=>$name, 'surname'=>$surname, 'age'=>$age, 'email'=>$email];
        $query->execute($user_data);
    }
    public function getAllid(string $nametable)
    {
        $query = $this->db->prepare("SELECT * FROM {$nametable}");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getUserInfo($nametable, $id){
        $query = $this->db->prepare("SELECT * FROM {$nametable} WHERE id = {$id}");
        $values = ['id' => $id];
        $query->execute($values);

        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public function deleteUser(string $nametable, $id)
    {
        $sql = "DELETE FROM {$nametable} WHERE id IN (" . implode(',', array_map('intval', $id)) . ")";
        $query = $this->db->prepare($sql);
        $query->execute();
    }

}


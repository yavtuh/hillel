<?php
class User{
    private $name = 'Name';
    private $age = "Age";
    private $email = "Email";
    public function __call($name, $arguments)
    {
        echo "Вызов метода '$name' "
        . implode(', ', $arguments). "\n";
    }
    private function setName(){
        return $this->name;
    }
    private function setAge(){
        return $this->age;
    }
    public function getAll(){
       echo $this->setAge().'<br>';
       echo $this->setName().'<br>';
       echo $this->setEmail().'<br>';
    }
}
$user = new User;
$user->getAll();

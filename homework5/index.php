<?php
class User{
    

    
    public function __construct( $id,  $password, $email)
    {
        $this->id = $id;
        $this->password = $password;
        $this->email=$email;
    }
    
    public function getUserData(){
        
        if (!is_numeric($this->id)) {
            throw new Exception('id содержит не число');
        }
        if (strlen($this->password) > 8){
            throw new Exception('password содержит более 8 символов');
        }   
        
        return new User($this->id, $this->password, $this->email );  

        }

}

try {
    $users = new User(100, "password1234568", 'test@gmail.com');
    var_dump($users->getUserData());
}catch (Exception $e){
    die('Строка: '.__LINE__." -> Ошибка в файле: ".$e->getFile());
}


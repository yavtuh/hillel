<?php
class User{
    private  $id;
    private  $password;
    private  $email;

    private function set_id($id)
    {
        if (!is_numeric($this->id)) {
            throw new Exception('id содержит не число');
        }
        else{
            $this->id = $id;
        }
    }
    private function set_password($password)
    {
        if (strlen($this->password) > 8){
            throw new Exception('password содержит более 8 символов');
        }  else{
        $this->password = $password;
        }
    }
    private function set_email($email)
    {
        $this->email=$email;
    }
    public function __construct( $id,  $password, $email)
    {
        $this->set_id($id);
        $this->set_password($password);
        $this->set_email($email);
    }
    
    public function getUserData(){
        
        return new User($this->id, $this->password, $this->email );  

        }

}

try {
    $users = new User(100, "password1234568", 'test@gmail.com');
    var_dump($users->getUserData());
}catch (Exception $e){
    die('Строка: '.__LINE__." -> Ошибка в файле: ".$e->getFile());
}


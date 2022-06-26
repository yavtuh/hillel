<?php
require 'vendor/autoload.php';
require 'db.php';


$dbs = new Connect();
$dbs->addUser($_POST['nametable'], $_POST['name'],$_POST['surname'],$_POST['age'],$_POST['email']);
echo "Успешно добавлен!";



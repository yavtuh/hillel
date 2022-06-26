<?php
require 'vendor/autoload.php';
require 'db.php';


$dbs = new Connect();
$usersToDelete = array();

foreach($_POST['isChecked'] as $selected){
    $usersToDelete[] = $selected;
}
$dbs->deleteUser($_POST['nametable'], $usersToDelete);



<?php
require 'vendor/autoload.php';
require 'db.php';


$dbs = new Connect();
$get_user = $dbs->getUserInfo($_POST['nametable'], $_POST['id']);
echo json_encode($get_user);


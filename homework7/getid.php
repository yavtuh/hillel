<?php
require 'vendor/autoload.php';
require 'db.php';


$dbs = new Connect();
$get_id = $dbs->getAllid($_POST['nametable']);
echo json_encode($get_id);


<?php
require 'vendor/autoload.php';
require 'db.php';


$dbs = new Connect();
$dbs->createTable($_POST['nametable']);
$nameTables = $dbs->getnameTable();
foreach ($nameTables as $nameTable) {
    $name = $nameTable;
}
if ($_POST['nametable'] === $name) {
    echo "Не делай так больше!:)";
    exit();
}else{
    echo "Таблица ".$_POST['nametable']." создана!";
}


<?php 
require 'vendor/autoload.php';
use Models\User;
use Models\Order;
use Models\Product;
use Http\Controllers\Admin\OrdersController;
use Http\Controllers\MainController;
use Http\Helpers\ImageHelper;
use Http\Controllers\Admin\DashboardController;

new User;
echo "<br>";

new Order;
echo "<br>";
new Product;
echo "<br>";
new ImageHelper;
echo "<br>";
new DashboardController;
echo "<br>";
new OrdersController;
echo "<br>";
new MainController;
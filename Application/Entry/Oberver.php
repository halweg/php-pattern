<?php
require __DIR__ . "/../../Boot/Boot.php";

$login = new \Observer\Login();

$login->attach(new \Observer\LoginObserver2($login));
$login->attach(new \Observer\LoginObserver1($login));

$login->handleLogin('halweg', '1234546', '127.0.0.1');
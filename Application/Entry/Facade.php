<?php
require __DIR__ . "/../../Boot/Boot.php";

$p = new \Facade\ProductReader\v2\ProductFacade("goods.txt");

$p->getProductById(0);

$p->getProduct();

//隔离了复杂的细节操作，对外只保留出少数接口
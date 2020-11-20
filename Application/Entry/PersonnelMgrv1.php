<?php
require __DIR__ . "/../../Boot/Boot.php";

use PersonnelMgr\v1\CommMgr;

$mgr = new CommMgr(CommMgr::MEGA);

$e1 = $mgr->getApptEncoder();
$e2 = $mgr->getApptEncoder();

var_dump($e1);
var_dump($e2);
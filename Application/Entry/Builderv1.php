<?php
require __DIR__ . "/../../Boot/Boot.php";


$b = new \Builder\Company\NastyBoss();

$b->add(new \Builder\Company\CluedUp("halweg"));
$b->add(new \Builder\Company\Minion("Mr Mao"));
$b->add(new \Builder\Company\CluedUp("halweg"));
$b->add(\Builder\Company\Employee::recruit("Chinese"));
$b->add(\Builder\Company\Employee::recruit("Japanese"));
$b->add(\Builder\Company\Employee::recruit("The X"));


$b->projectFail();


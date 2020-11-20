<?php
require __DIR__ . "/../../Boot/Boot.php";

use Builder\Singleton\Preference;

$s = Preference::getInstance();

$s->setProp("instance", true);

unset($s);

$s2 = Preference::getInstance();

var_dump($s2->getProp("instance"));
<?php
require __DIR__ . "/../../Boot/Boot.php";

use Civilization\Decorator\Request\AuthProcessDecorator;
use Civilization\Decorator\Request\MainProcess;
use Civilization\Decorator\Request\LogProcessDecorator;
use Civilization\Decorator\Request\RequestHelper;

$ad= new AuthProcessDecorator(new LogProcessDecorator(new MainProcess()));

$ad->process(new RequestHelper());



<?php
require __DIR__ . "/../../Boot/Boot.php";

use Civilization\Decorator\DiamondDecorator;
use Civilization\Decorator\Plains;
use Civilization\Decorator\PollutedDecorator;
use Civilization\Decorator\Tile;
use Civilization\Decorator\TileDecorator;

$tile = new Plains();
print_r($tile->getWealthFactor());
echo ",";

$d = new DiamondDecorator($tile);

print_r($d->getWealthFactor());
echo ",";

$p = new PollutedDecorator($d);
print_r($p->getWealthFactor());
echo ",";

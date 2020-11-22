<?php
require __DIR__ . "/../../Boot/Boot.php";

use Civilization\Unit\Archer;
use Civilization\Unit\Cavalry;
use Civilization\Unit\LaserCanon;
use Civilization\Unit\Army;

$army_up = new Army();
$army_down = new Army();

$army_down->addUnit(new Archer());
$army_down->addUnit(new Archer());
$army_down->addUnit(new LaserCanon());

$army_up->addUnit(new Cavalry());
$army_up->addUnit(new Cavalry());


print_r($army_down->bombardStrength());
echo "\n";
print_r($army_up->bombardStrength());

$army_all = new Army();

$army_all->addUnit($army_up);
$army_all->addUnit($army_down);

echo "\n";
print_r($army_all->bombardStrength());
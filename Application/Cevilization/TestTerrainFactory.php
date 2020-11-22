<?php
require __DIR__ . "/../../Boot/Boot.php";

use Civilization\Terrain\Earth\EarthForest;
use Civilization\Terrain\Earth\EarthPlains;
use Civilization\Terrain\Earth\EarthSea;

$mapFactory = new \Civilization\TerrainFactory(new EarthSea(), new EarthPlains(), new EarthForest());

var_dump($mapFactory->getForest());
var_dump($mapFactory->getSea());
var_dump($mapFactory->getPlains());

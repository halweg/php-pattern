<?php


namespace Civilization;


use Civilization\Terrain\Forest;
use Civilization\Terrain\Plains;
use Civilization\Terrain\Sea;

class TerrainFactory
{
    
    private $sea;
    
    private $plains;
    
    private $forest;
    
    public function __construct(Sea $sea, Plains $plains, Forest $forest)
    {
        $this->forest = $forest;
        $this->plains = $plains;
        $this->sea = $sea;
    }
    
    public function getSea()
    {
        return clone $this->sea;
    }
    
    public function getPlains()
    {
        return clone $this->plains;
    }
    
    public function getForest()
    {
        return clone $this->forest;
    }
    
}
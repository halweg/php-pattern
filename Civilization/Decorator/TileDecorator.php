<?php


namespace Civilization\Decorator;


abstract class TileDecorator extends Tile
{
    protected $title;
    
    public function __construct(Tile $tile)
    {
        $this->title = $tile;
    }
}
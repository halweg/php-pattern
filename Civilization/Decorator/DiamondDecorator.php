<?php


namespace Civilization\Decorator;


class DiamondDecorator extends TileDecorator
{
    
    public function getWealthFactor()
    {
        return  $this->title->getWealthFactor() + 2;
    }
    
}
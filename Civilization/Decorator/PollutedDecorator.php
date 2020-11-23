<?php


namespace Civilization\Decorator;


class PollutedDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->title->getWealthFactor() -4;
    }
}
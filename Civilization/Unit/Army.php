<?php


namespace Civilization\Unit;


class Army extends Unit
{
    private $units = [];
    
    public function addUnit(Unit $unit)
    {
        $this->units[] = $unit;
    }
    
    public function removeUnit(Unit $unit)
    {
        $this->units = array_udiff($this->units, array($unit), function ($a, $b) {
            return $a == $b ? 0 : 1;
        });
    }
    
    public function bombardStrength()
    {
        $ret = 0;
        foreach ($this->units as $u) {
            $ret += $u->bombardStrength();
        }
        return $ret;
    }
}
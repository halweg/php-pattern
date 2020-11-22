<?php


namespace Civilization\Unit;

//“文明” 游戏基本战斗单元
use Civilization\Unit\Exceptions\UnitExceptions;

abstract class Unit
{
    function addUnit(Unit $unit)
    {
        throw new UnitExceptions("can`t add unit");
    }
    
    function removeUnit(Unit $unit)
    {
        throw new UnitExceptions("can`t remove unit");
    }
    
    //伤害范围
    abstract function bombardStrength();
}
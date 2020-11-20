<?php

namespace Builder\Company;

use Builder\Company\CluedUp;

abstract class Employee
{

    public $name;

    protected static $employees = ['\Builder\Company\CluedUp', '\Builder\Company\Developer', '\Builder\Company\Minion'];

    public function __construct($name) {
        $this->name = $name;
    }

    public static function recruit($name)
    {
        $index = mt_rand(0, count(self::$employees)  - 1 );
        $className = self::$employees[$index];
        return new $className($name);

    }

    abstract public function fire();

}
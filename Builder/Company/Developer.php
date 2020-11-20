<?php


namespace Builder\Company;


class Developer extends Employee
{

    public function fire()
    {
        echo "{$this->name}： I will call my 100 brothers! \n";
    }

}
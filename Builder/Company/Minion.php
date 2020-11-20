<?php


namespace Builder\Company;


class Minion extends Employee
{

    public function fire()
    {
        echo "{$this->name}: I will call my layer\n";
    }

}
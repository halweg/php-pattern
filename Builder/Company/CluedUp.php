<?php


namespace Builder\Company;


class CluedUp extends Employee
{

    public function fire()
    {
        echo "{$this->name}: I am clean my desk\n";
    }

}
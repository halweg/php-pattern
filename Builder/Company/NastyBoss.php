<?php


namespace Builder\Company;


class NastyBoss
{
    private $employees = [];

    public function add(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function projectFail()
    {
        foreach ($this->employees as $e) {
            $e->fire();
        }
    }

}
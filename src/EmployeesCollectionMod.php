<?php

namespace App;

class EmployeesCollectionMod
{
    private $employees = [];

    public function add($newEmployee)
    {
        if (!in_array($newEmployee, $this->employees, false))
        {
            $this->employees[] = $newEmployee;
        }
    }

    public function get()
    {
        return $this->employees;
    }

}
<?php

namespace App;

class EmployeesCollection
{
    private $employees = [];

    public function add($newEmployee)
    {

        if (!$this->exists($newEmployee))
        {
            $this->employees[] = $newEmployee;
        }
    }

    public function get()
    {
        return $this->employees;
    }

    private function exists($newEmployee)
    {
        foreach ($this->employees as $employee)
        {
            if ($employee == $newEmployee)
            {
                return true;
            }
        }
        return false;
    }

}
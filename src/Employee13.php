<?php

namespace App;

class Employee13 extends User12
{
    public function __construct($name, $surname, $salary)
    {
        parent::__construct($name,$surname);
        $this->salary = $salary;
    }
}
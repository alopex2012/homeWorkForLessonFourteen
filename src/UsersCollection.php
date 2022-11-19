<?php

namespace App;

class UsersCollection
{
    private $employees = [];
    private $students = [];

    public function add($user)
    {
        if ($user instanceof Employee19) {
            $this->employees[] = $user;
        }
        if ($user instanceof Student19) {
            $this->students[] = $user;
        }
    }

    public function getTotalSalary()
    {
        $sum = 0;
        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }
        return $sum;
    }

    public function getTotalScholarship()
    {
        $sum = 0;
        foreach ($this->students as $student) {
            $sum += $student->getScholarship();
        }
        return $sum;
    }

    public function getTotalPayment()
    {
        return $this->getTotalScholarship() + $this->getTotalSalary();
    }

}
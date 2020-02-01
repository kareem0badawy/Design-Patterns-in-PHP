<?php

namespace DesignPatternsInPHP\Structural\Composite;

class Organization 
{
    protected $employees;

    public function addEmployee(Employeenterface $employee)
    {
        $this->employees[] = $employee;
    }

    public function getNetSalaries(): float
    {
        $netSalary = 0;

        foreach ($this->employees as $employee) {
            $netSalary += $employee->getSalary();
        }

        return $netSalary;
    }
}
<?php
/**
 * Abstract Classes
 */

// Abstract class can be inherited but not instantiated
/**
 * Class Employee
 */
abstract class Employee{
    public $firstName;
    public $lastName;
    public $age;
    public $address;

    public $salary;
    public $tax;
    public $overtime;
    public $overtimeRate;
    public $absent;
    public $absentRate;


    public function getOvertime()
    {
        return $this->overtime * $this->overtimeRate;
    }

    public function getAbsent()
    {
        return $this->absent * $this->absentRate;
    }

    public function getSalary()
    {
        return $this->salary - ($this->salary * $this->tax);
    }

    /**
     * abstract function don't have body in the abstract class
     * the body will be written in the sub classes
     * @return mixed
     */
    abstract public function getTotalSalary();
}


/**
 * Class Manager
 */
class Manager extends Employee{

    public $numberOfAudits;

    public function getTotalSalary()
    {
        return ($this->getSalary() + $this->getOvertime() -$this->getAbsent()) + ($this->numberOfAudits * 100);
    }
}


/**
 * Class Seller
 */
class Seller extends Employee{

    public $projects;

    public function getTotalSalary()
    {
        return ($this->getSalary() + $this->getOvertime() -$this->getAbsent()) + ($this->projects * 500);
    }
}


/**
 * Class Editor
 */
class Editor extends Employee{

    public $bonus = 100;

    public function getTotalSalary()
    {
        return ($this->getSalary() + $this->getOvertime() -$this->getAbsent()) + ($this->bonus);
    }
}
$fares = new Manager();
$fares->firstName = 'Fares';
$fares->lastName = 'Kato';
$fares->salary = 5000;
$fares->absent = 2;
$fares->tax = 0.03;
$fares->numberOfAudits = 2;
echo $fares->getTotalSalary() .' rub';



<?php
/**
 * Interface Classes are pure prototypes
 * 01 - multi implements (solved multi inheritance problem)
 * 02- all methods are public with no body
 * 03- all methods body have to define in the sub classes
 */


/**
 * Interface EmployeeInterface
 */
interface EmployeeInterface
{
    public function sayHello();
}

interface User
{
    public function showAddress();
}

class Supervisore implements EmployeeInterface , User
{
    public $address = 'Moscow';
    public function sayHello()
    {
        return 'Hello from ' . $this->address;
    }

    public function showAddress()
    {
        return $this->address;
    }
}
$ali = new Supervisore();
echo $ali->showAddress() . '<br />';
echo $ali->sayHello();

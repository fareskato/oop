<?php
/**
 * Interface Classes are pure prototypes
 * 01- Interfaces can only have constants and methods stubs(methoda without body) and all methods
 *     should be public
 * 02 - Multi implements (solved multi inheritance problem)

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

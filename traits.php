<?php
/**
 * Traits php 5.4 +
 * 01- can not inherit trait and can not create object from trait
 * 02- to use trait type use in the class
 * 03- each class can use more than one trait
 * 04- so we can say that traits solved the multi inheritance problem
 */

trait TestTraitOne
{
    public function sayHello()
    {
        echo 'hello there from trait one' . '<br />';
    }
}

trait TestTraitTow
{
    public function sayHi()
    {
        echo 'Hi from another trait' . '<br />';
    }
}

class TestClass
{
    // invoke the trait
    use TestTraitOne , TestTraitTow;

}

$ob = new TestClass();
$ob->sayHello() ;
$ob->sayHi();

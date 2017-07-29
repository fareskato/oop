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

    public function hello()
    {
        echo 'Hello fro first trait!';
    }
}

trait TestTraitTow
{
    public function sayHi()
    {
        echo 'Hi from another trait' . '<br />';
    }
    public function hello()
    {
        echo 'Hello fro second trait!';
    }

}

class TestClass
{
    // invoke the trait
    /**
     * in case we have the same method name in many traits
     * we can define which trait method we can user like so:
     */
    use TestTraitOne , TestTraitTow{
        TestTraitOne::hello insteadof TestTraitTow;
    }


}

$ob = new TestClass();
$ob->sayHello() ;
$ob->sayHi();
echo "<br />";
$ob->hello();

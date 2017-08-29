<?php

/**
 * Access modifiers
 * public : can access it inside and outside the class.
 * private : can access it JUST inside class.
 * private : can access it inside class and inside subclasses(classes inherit the class).
 */
/**
 * Constants:
 * 01- call them inside the class using self::Constant
 * 02- call them outside the class using  ClassName::Constant or $object::Constant
 * 03- sub classes inherit constants so they can access them inside the class context
 *     and outside the class as well.
 */

/**
 * self keyword:
 *  self refers to the class which call the method osr the property.
 */
/**
 * static
 */

class Car
{
    public $name = 'BMW';
    private $price = 1200;
    protected $weight = 3000;

    // static

    const CREATED_AT = 1978;

    public function getModel(){
        echo $this->name;
    }

    public function getDate()
    {
        echo self::CREATED_AT;
    }

}

$bmw = new Car();
$bmw->getModel() . '<br />';
echo Car::CREATED_AT . '<br />';
echo $bmw::CREATED_AT . '<br />';

echo "<hr />";

class AnotherCar extends Car
{
    public $anotherCarName = 'another BMW';


    public function getWeight()
    {
        echo $this->weight;
    }


}


$anotherCar = new AnotherCar();
$anotherCar->getWeight() . '<br />';
echo AnotherCar::CREATED_AT . '<br />';
echo $anotherCar::CREATED_AT . '<br />';

echo "<hr />";


/**
 * static
 */

class MyClassA {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who() ; // =>  MyClassA :: the class who called me
        static::who(); // =>  MyClassB :: the last class called me
    }
}

class MyClassB extends MyClassA {
    public static function who() {
        echo __CLASS__;
    }
}

MyClassB::test();

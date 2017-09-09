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
 *  self refers to the class it self
 */

/**
 * static
 * 01- inside the class
  *     01- call static property self::$prperty_name
  *     02- call static method self::method_name
  *     03- For objects : call static property $object_name::property_name
  * 02- outside the class
  *     01- call static property ClassName::$prperty_name
  *     02- call static method ClassName::method_name
  *     03- For objects : call static method $object_name::method_name
  * 03- A property declared as static can't be accessed with an instance of class(object)
        BUT static methods can be accessed 
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
 * Late Static Binding
 * 01 - Uses to reference the called class
 * 02 - This feature was named "late static bindings" with an internal perspective in mind. 
 * 03 -"Latebinding" comes from the fact that static:: will not be resolved using the class where the 
 *     method is defined but it will rather be computed using runtime information. It was also 
 *     called a "static binding" as it can be used for (but is not limited to) static method calls.

 * Limitations of self:: 
 * Static references to the current class like self:: or __CLASS__ are resolved using the class in 
 * which the function belongs, as in where it was defined:
 */

// Example 01
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

// Example 02
    class Car
    {
        public static function run()
        {
            return static::getName();
        }

        private static function getName()
        {
            return 'Car';
        }
    }

    class Toyota extends Car
    {
        public static function getName()
        {
            return 'Toyota';
        }
    }

    echo Car::run(); // Output: Car
    echo Toyota::run(); // Output: Toyota



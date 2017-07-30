<?php
// NAMESPACE PART 2
/**
 * 01- namespaces and dynamic language features
 * 02- namespace keyword and __NAMESPACE__ constant
 * 03- Aliasing/Importing
 * 04- Global space
 * 05- Autoloading
 */
namespace Main\Controllers;
class TestController
{
    public static function hello()
    {
        echo 'hello there!';
    }
}
// dynamic name
//$a = 'TestController';
//var_dump(new $a());

// Using __NAMESPACE__
$b = __NAMESPACE__ .'\TestController';
$b::hello();
echo "<br />";
var_dump(new $b()); // object(Main\Controllers\TestController)#1 (0) { }
echo "<br />";
// Using namespace
namespace\TestController::hello(); // hello there!
echo "<br />";
// built-in class static method
$e = namespace\TestController::class;
var_dump(new $e()); // object(Main\Controllers\TestController)#1 (0) { }



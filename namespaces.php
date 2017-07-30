<?php
/**
 * 01- Affected types by namespaces are traits, classes, interfaces, functions and constants.
 * 02- classes and traits have no fall back
 *   if u call class with the same name as (built-in in php) inside the namespace if the class doesn't exists
 *   will not search in the global space BUT for functions and constants it will
 * 03 - so To call php built in class in Ur namespace use \ for example $t = new \DateTime();
 */
namespace Main\Utilities;

include 'exsits.php';

class A
{
    public function __construct()
    {
        echo 'From class A in Main\Utilities namespace';
    }
}

function sayHello()
{
    echo 'Hello from Main\Utilities namespace ';
}

new A(); // <=> \Main\Utilities\A()
echo '<br />';
sayHello(); // <=> \Main\Utilities\sayHello()
echo '<br />';
\Actions\sayHello();
echo '<br />';
//Actions\sayHello(); // <=> \Main\Utilities\Actions\A()


/**
 * call built in class in our namespace context
 */

$t = new \DateTime();
var_dump($t);

// Remember:: no fall back for classes
$pdo = new PDO();  // => error not defined class PDO in our namespace:  Class 'Main\Utilities\PDO' not found

// functions has fall back to the global scope
substr(); // => will look in the global scope (substr built-in function)
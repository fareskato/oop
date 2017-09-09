<?php
/**
 * Use this for namespaces part
 */

namespace Actions;
class A
{
    public function __construct()
    {
        echo "From class A in Actions namespace";
    }

}
function sayHello()
{
    echo 'Hello from Actions namespace ';
}

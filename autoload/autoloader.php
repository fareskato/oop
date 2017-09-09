<?php
define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);
define('APP_PATH', dirname(realpath(__FILE__)));
define('MODELS_PATH', APP_PATH. DS. 'models');

// default paths where php look for classes
$paths = get_include_path(). PS. MODELS_PATH;
// register models in the default php classes path
set_include_path($paths);

function myAutoLoader($className){
    require strtolower($className) . '.class.php';
}
// register Ur loader
spl_autoload_register('myAutoLoader');

$a = new A();
$b = new B();

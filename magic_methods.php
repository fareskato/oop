<?php
/**
 * use only inside class
 * all magic methods starts with __
 * __set
 *      runs when writing date to inaccessible(exists but not visible(private or protected) or not exists at all) property.
 *      that means __set can't access an exists public property.
 * __get
 *
 * __isset
 *
 * __unset
 *
 * __call
 *
 * __callStatic
 */

/**
 * Class Student
 */
class Student
{
    // not accessible via __set
    public $age;

    // real example of __set use
    private $email;
    protected $data = array();
    public function __set($key, $value)
    {
        echo 'this function has been called for ' .$key . '<br />';
        $this->data[$key] = $value;
    }

    public function __get($indx)
    {
        return$this->data[$indx];
    }
}

$st = new Student();
// public will not be effected by __set
$st->age = 17;
// not existed will be effected by __set
$st->f_name = 'foo';
// private will be effected by __set
$st->email = 'test@test.com';
echo "<pre>";
print_r($st);
echo "<pre>";
echo '<hr />';
// __get
$st->salary = 2600;
echo $st->salary;



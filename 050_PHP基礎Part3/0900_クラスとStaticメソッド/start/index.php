<?php

use animal\Person as AnimalPerson;
use Person as GlobalPerson;

/**
 * クラス内のthis
 */
class Person
{
    private $name;
    public $age;
    public static $whereToLive = 'earth'; //静的プロパティと呼ばれる

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        static::bye();  //クラス内で使用する場合はstaticを使用する
        return $this;
    }

    static function bye() {
        echo 'bye' ;
    }
}

$bob = new Person('Bob', 18);
// Person::bye();
$bob->hello();
echo Person::$whereToLive;

// $tim = new Person('Tim', 32);
// $tim->hello();
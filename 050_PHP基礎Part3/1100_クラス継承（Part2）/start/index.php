<?php
/**
 * クラス継承
 * final
 * abstract
 * static　静的メソッドを呼び出す
 * self
 * parent 継承元の静的プロパティをとってくる
 */
class Person
{
    private $name;
    public $age;
    public const WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        return $this;
    }

    static function bye() {
        echo 'bye';
    }
}

$bob = new Person('Bob', 18);
$bob->hello();
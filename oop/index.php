<?php

class Person
{
    public string $name;
    public int $age;
    public ?float $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$p = new Person('John Doe', '18', null);

echo '<pre>';
var_dump($p);
echo '</pre>';
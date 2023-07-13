<?php
// Bài 2
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow! Meow!";
    }
}

$dog = new Dog();
echo $dog->makeSound();
echo "<br>";
$cat = new Cat();
echo $cat->makeSound();
echo "<br>";

// Bài 3 
abstract class Employee {
    protected $name;
    protected $salary;

    abstract public function getInformation();
}

class Manager extends Employee {
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getInformation() {
        return "Manager: " . $this->name . ", Salary: $" . $this->salary;
    }
}

class Staff extends Employee {
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getInformation() {
        return "Staff: " . $this->name . ", Salary: $" . $this->salary;
    }
}

$manager = new Manager("John Doe", 5000);
echo $manager->getInformation();
echo "<br>";

$staff = new Staff("Jane Smith", 3000);
echo $staff->getInformation(); 
echo "<br>";

// Bài 4
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        return "Car started!";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        return "Motorcycle started!";
    }
}

$car = new Car();
echo $car->start();
echo "<br>";

$motorcycle = new Motorcycle();
echo $motorcycle->start();
echo "<br>";

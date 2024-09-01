<?php
// Person Class
class Person {
    public $firstName;
    public $lastName;
    private $age;

    // Constructor to initialize properties
    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    // Method to return the full name
    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    // Method to set the age
    public function setAge($age) {
        $this->age = $age;
    }

    // Method to return the age
    public function getAge() {
        return $this->age;
    }
}

// Car Class
class Car {
    public $make;
    public $model;
    protected $year;

    // Constructor to initialize properties
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to return car info (without the make)
    public function getCarInfo() {
        return "Model: " . $this->model . ", Year: " . $this->year;
    }
}

// Create an instance of Person
$person = new Person("Warren Jonathan", "Cabanlig", 19);
echo "Full Name: " . $person->getFullName() . "\n";
echo "Age: " . $person->getAge() . "\n";

// Update the age of the person
$person->setAge(19);
echo "Updated Age: " . $person->getAge() . "\n";

// Create an instance of Car
$car = new Car("", "Honda Civic", 2000);
echo "Car Info " . $car->getCarInfo() . "\n";
?>

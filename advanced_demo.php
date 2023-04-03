<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming PHP</title>
</head>
<body>
    <h1>Object Oriented Programming PHP</h1>

    <h2>Abstraction</h2>
    <p>Abstraction is the process of hiding unnecessary details and showing only the essential features of an object. It allows you to simplify complex systems by breaking them down into smaller, more manageable parts. In OOP, abstraction is implemented using abstract classes and interfaces.</p>

    <?php

    
    // Defining a class that represents animal
    // at least an abstraction of the real thing

    
    class Animal {
        
        // declaration of all properties of the object of the class Animal
        protected string $name;
        protected string $scream;


        // Magic methods used to initialize the Animal object with the given name and scream values
        // Magic methods are annonced by the __ 
        // You can protect the input required by the constructor by annoncing the type
        public function __construct(string $name, string $scream){
            // $this refers to the object we are in
            // Here in the constructor we are accessing the property of the object and setting the value accrding to the argument pasted in the constructor
            $this->name = $name;
            $this->scream = $scream;
        }

        // Setters and Getters functions
        // are usual functions that are put in classes so that we can access and modify the properties of the object

        // Getter functions
        // return the property of the object
        public function getName() : string {
            return $this->name;
        }

        public function getScream() : string {
            return $this->scream;
        }

        // Setter functions
        // modify the properties of the object according to the specified argument
        public function setName(string $name){
            $this->name = $name;
        }

        public function setScream(string $scream){
            $this->scream = $scream;
        }


        // Methods
        // methods are specific function for the class

        public function makeSound() {
            echo $this->name . " says " . $this->scream;
        }
        
        // Magic Method toString
        // the magic method toString allows you to return a string representation of the object
        public function __toString()
        {
            return "i'm ".$this->name;
        }
    }

    // intentiation of objects of the class Animal
    // the object is a variable 
    // we intantiate the object by filling the required fields for the constructor (order is important)
    
    $animal1 = new Animal("Elephant", "Thrumph");
    $animal2 = new Animal("Chouette", "WoWOooWOOO");

    $animal1->makeSound();
    echo "<br>";
    $animal2->makeSound();
    echo "<br>";

    echo $animal1;

    ?>

    <h2>Inheritance</h2>
    <p>Inheritance is a mechanism that allows you to create a new class from an existing class. The new class inherits all the properties and methods of the existing class and can also add its own unique properties and methods. Inheritance is implemented using the <code>extends</code> keyword in PHP.</p>

    <?php
            // Define the Cat class that extends the Animal class
        class Cat extends Animal {
            public function __construct($name) {
            parent::__construct($name, "meow");
            }
        
            public function purr() {
            echo "{$this->name} is purring\n";
            }
        }
        
        // Define the Dog class that extends the Animal class
        class Dog extends Animal {
            public function __construct($name) {
            parent::__construct($name, "woof");
            }
        
            public function fetch() {
            echo "{$this->name} is fetching";
            }
        }

        $cat1 = new Cat("GrosMinet");
        $cat2 = new Cat("Tigrou");

        $cat1->makeSound();
        echo "<br>";

        $cat1->purr();

        echo "<br>";


        $cat2->makeSound();
        echo "<br>";

        $cat2->purr();
        echo "<br>";

        $dog1 = new Dog("Rex");
        $dog2 = new Dog("Snoop");
        echo "<br>";

        $dog1->makeSound();
        echo "<br>";

        $dog1->fetch();
        // $dog1->purr();

        $dog2->makeSound();
        echo "<br>";

        $dog2->fetch();
    ?>

    <h2>Polymorphism</h2>
    <p>Polymorphism is the ability of an object to take on many forms. In OOP, polymorphism is implemented using interfaces and method overriding.</p>
    <?php
        // Define an interface for flying animals
        interface Flyable {
            public function fly();
        }
        
        // Define the Bird class that extends the Animal class and implements the Flyable interface
        class Bird extends Animal implements Flyable {
            public function __construct($name) {
            parent::__construct($name, "tweet");
            }
        
            public function fly() {
            echo "{$this->name} is flying\n";
            }
        }
        
        
// Define the Weapon class
class Weapon {
    protected $name;
    protected $damage;
  
    public function __construct($name, $damage) {
      $this->name = $name;
      $this->damage = $damage;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getDamage() {
      return $this->damage;
    }
  }
  
  // Define the Hunter class that uses a Weapon to hunt animals
  class Hunter {
    protected $name;
    protected $weapon;
  
    public function __construct($name, Weapon $weapon) {
      $this->name = $name;
      $this->weapon = $weapon;
    }
  
    public function hunt(Animal $animal) {
      echo "{$this->name} is hunting {$animal->getName()} with a {$this->weapon->getName()}\n";
      $animal->makeSound();
      $damage = $this->weapon->getDamage();
      echo "{$this->weapon->getName()} deals {$damage} damage to {$animal->getName()}\n";
    }
  }
  
    // Create some animals
    $cat = new Cat("Fluffy");
    $dog = new Dog("Fido");
    $bird = new Bird("Tweety");
    
    // Create a Weapon
    $weapon = new Weapon("Shotgun", 50);
    
    // Create a Hunter with a Weapon
    $hunter = new Hunter("John", $weapon);
    
    // Hunt some animals
    $hunter->hunt($cat);

    echo "<br>";
    $hunter->hunt($dog);
    echo "<br>";

    $hunter->hunt($bird);
    echo "<br>";


    ?>
    <?php
        // loading all the classes 

        // using spl_autoloader 
        spl_autoload_register(function ($class_name) {
            require $class_name . '.php';
        });

        // using require_once
        // require_once $class_name . '.php';

        // using require 
        // require $class_name . '.php';


    ?>






</body>
</html>
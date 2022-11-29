<!DOCTYPE html>
<html>
<body>

<?php
// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string; 
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Hello Friends I m $this->name!"; 
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "I m a Software Trainee Worked in a $this->name!"; 
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "I m from $this->name!"; 
  }
}

// Create objects from the child classes
$audi = new audi("Kiran");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Php");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Godhra Panchmahal");
echo $citroen->intro();
?>
 
</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
trait message1 {
  public function msg1() {
    echo "My name is kiran..."; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
 
</body>
</html>
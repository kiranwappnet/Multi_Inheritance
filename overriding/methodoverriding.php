<?php
   class Base {
      function display() {
         echo "
Base class function declared final!";
      }
      function demo() {
         echo "
Base class function!";
      }
   }
   class Derived extends Base {
      function demo() {
         echo "
Derived class function!";
      }
   }
   $ob = new Base;
   $ob->demo();
   $ob->display();
   $ob2 = new Derived;
   $ob2->demo();
   $ob2->display();
?>
<?php

  #FUNCTION

  /*
  Camel Case -myFunction()
  Lower Case - my_function()
  Pascal Case - MyFunction()
  */

  // function f(){
  //   echo 'Hello World';
  // }

  // f();
  // function sum($a = 3, $b = 4) {
  //   echo '  ' . $a + $b;
  // }
  // sum();

  function sum($a, $b) {
    return $a + $b;
  }

  echo sum(2, 3);

  // by reference
   $myN = 10;
    
   function addFive($num) {
     $num += 5;
   }

   function addTen(&$num) {
    $num += 10;
   }

   addFive($myN);

   echo "<h1>Value: $myN</h1>";

   addTen($myN);

   echo "<h1>Value: $myN</h1>";


?>
<?php

// By: Kai Parsons

// Import some usefull functions to use
include '+functions.php';

// Initial Start  

$v1 = $_GET['a'];
$v2 = $_GET['b'];
$v3 = $_GET['c'];
$v4 = $_GET['d'];
$s1 = $_GET['x1'];
$s2 = $_GET['x2'];
$otype = $_GET['otype'];

function compute ($numbers, $e) {

// Set variables for easy viewing...  
// Also apply inverse operation to them
  
 $ai = $numbers[3];
 $bi = $numbers[1] * -1;
 $ci = $numbers[2] * -1;
 $di = $numbers[0];
   
 // Calculate the Determinent of the inverse
  
  $de = $ai * $di - $bi * $ci;
  
 // Calculate the final answer, for easy eye viewing 
  
  $xo = $ai * $numbers[4];
  $xoo = $bi * $numbers[5];
  $ans1 = $xo + $xoo;
  
  $xo = $ci * $numbers[4];
  $xoo = $di * $numbers[5];
  $ans2 = $xo + $xoo;
  
  // Finish Equation
  $ans1 = $ans1 / $de;
  $ans2 = $ans2 / $de;
  
  // Echo type
  
  if ($e == "html") {
    fhtml("<!-- SLE Calculator With Matrices -->", "<h2>Your answer is: </h2> <h3> x = " . $ans1 . " y = " . $ans2 . "</h3><br><br><br><a href='form.php'><h4>Go to form ></h4></a>");
  } 
  else {
    panswer ($ans1, $ans2);
  }
  
}




$matrix = array($v1,$v2,$v3,$v4,$s1,$s2);




compute($matrix, $otype);





?>

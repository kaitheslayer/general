<?php

// By: Kai Parsons

include '+functions.php';

hstart();
hhead();

hbody('
<h1> Enter SLE matrix number to calculate </h1> 

<form action="calculate.php" method="get">
  Matrix:<br>
  <input type="number" name="a" value="a"><input type="number" name="b" value="b"> - <input type="number" name="x1" value="ans1">
  <br>
   <input type="number" name="c" value="c"><input type="number" name="d" value="d"> - <input type="number" name="x2" value="ans2">
  <br><br> Type of output: <br>
  <input type="radio" name="otype" value="html" checked> HTML<br>
  <input type="radio" name="otype" value="text"> Text<br>
  <br>
  <input type="submit" value="Submit">
</form> 
<br><br><br>
<a href="download.zip"><h4>Git Hub >></h4></a>
<a href="download.zip"><h4>Download Code> ></h4></a>

');
  
  hend();


?>

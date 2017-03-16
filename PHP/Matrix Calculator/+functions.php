<?php
// Functions here can be accessed from all default modules
// By: Kai Parsons
// You can add if you wish


// HTML Echo Fucntions

function fhtml ($head, $body) {
  echo "<!DOCTYPE html> <html><head>" . $head . "</head> <body>" . $body . "</body></html>";
  
}

function necho ($input) { 
  echo "<!-- " . $input . "-->";
}

function hstart () {
  echo "<!DOCTYPE html><html>";
}

function hhead ($input) {
  echo "<head>" . $input . "</head>";
}

function hend () {
  echo "</html>";
}

function hbody ($input) {
  echo "<body>" . $input . "</body>";
}

function hanswer ($input) { 
  echo "<div class='answer'><p>" . $input . "</p></div>";
  $_GLOBALS['prevans'] = $input;
}

function panswer ($input1 , $input2) {
  echo $input1 . " & " . $input2;
  $_GLOBALS['prevans'] = $input;
}

// Error Reporting

function eerror ($errormsg, $rtype) {
  if ($rtype == "html") { echo "<div class='errormsg'><h3>The following error occured: <u>" . $errormsg ."</u></h3></div>"; } else { echo $errormsg; }
}





?>

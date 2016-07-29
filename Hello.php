<?php

echo 'Hello World' . PHP_EOL; // Basic Echo with Cross Platform line ending formatting
print('Hello World') . PHP_EOL; // Basic Echo with Cross Platform line ending formatting

$var = 'Hello World'; // Set a Varible

function Greetings($val="Hello World"){ // Function will default if $val is not specified.
  return $val;
}

Greetings(); // Outputs "Hello World" from $val

Greetings($var); // Outputs "Hello World" from $var since it was passed to $val


?>

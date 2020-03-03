<?php
  //While loop
  /*
  $counter = 1;
  while ($counter < 101) {
    if (($counter % 3 === 0) && ($counter % 5 === 0)) {
      echo "FizzBuzz\n";
    } elseif ($counter % 5 === 0) {
      echo "Buzz\n";
    } elseif ($counter % 3 === 0) {
      echo "Fizz\n";
    } else {
      echo "$counter\n";
    }
    $counter++;
  }
  */
  
  
  //For loop
  $output = [];
  
  for ($i=1; $i <101; $i++ ) {
    if (($i % 3 === 0) && ($i % 5 === 0))  {
      array_push($output, "FizzBuzz");
    } elseif ($i % 5 === 0) {
      array_push($output, "Buzz");
    } elseif ($i % 3 === 0) {
      array_push($output, "Fizz");
    } else {
      array_push($output, $i);
    }
  }
  
//print_r($output);
  
  //Foreach loop which terminates on first "FizzBuzz"
foreach ($output as $value) {
  if($value === "FizzBuzz") {
    break;
  } else {
    echo "$value\n";
  }
}
  

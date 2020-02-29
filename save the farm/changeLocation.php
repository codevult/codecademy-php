<?php
  // Change player location
function changeLocation(){	
  global $location;
  echo "Where do you want to go?\n";
  $answer = strtolower(readline(">>"));
    if (($answer === "bathroom") && ($location === "kitchen")) {
      echo "You go to: bathroom.\n";
      return $location = "bathroom";
      //Woods to kitchen
    } elseif (($answer === "woods") && ($location === "kitchen")) {
      echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.";
      return $location = "woods";
      //Kitchen to bathroom
    } elseif (($answer === "kitchen") && ($location === "bathroom")) {
      echo "You go to kitchen.\n";
      return $location = "kitchen";
      //Kitchen to Woods
    } elseif (($answer === "kitchen") && ($location === "woods")) {
      echo "You go to kitchen.\n";
      return $location = "kitchen";
      //Woods to Bathroom OR Bathroom to Woods
    } elseif ((($answer === "woods") xor ($answer ==="bathroom")) && (($location === "bathroom") xor ($location === "woods"))) {
      echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
      //Answer same as current location
    } elseif ($answer === $location) {
      echo "You are already here.\n";
      //Any other answer
    } else {
      echo "That doesn't make sense. Are you confused? Try 'look around'.\n.";
    }
  
}

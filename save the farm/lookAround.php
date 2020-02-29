<?php
  // Describe current location
  function lookAround(){
    global $location, $wearing_glasses, $wearing_contacts, $moved_cupboard;
      if ($wearing_glasses xor $wearing_contacts) {
        switch ($location) {
        // Kitchen descript
        case "kitchen" :
        echo "This kitchen comes with all the tools and ingredients needed to cook mushroom soup--- except the mushrooms!\n\nFrom here, you see the door to the *bathroom* and the backdoor, which leads to the *woods*.\n\n";
            //If in kitchen, cupboard descript
            if (!$moved_cupboard) {
              echo "Also, there's a conspicuously large cupboard against a peculiarly worn piece of the wall.\n";
            } else {
              echo "The cupboard has been moved aside, and reveals a safe built in to the wall.\n";
            }
        // Bathroom descript
        break;
        case "bathroom" :
        echo "Normal bathroom. There's a mirror here. You can get back out to the *kitchen*. You sense a magic presence in the toilet, but you decide to ignore it.\n";
        break;
        // Woods descript
        case "woods" :
        echo "These woods aren't actually that terrifying. Unless you're afraid of mushrooms. There's millions of them here!\nYou see the path leading back to your cabin's *kitchen*.\n";
        break;
      }

      } else {
        echo "It's really hard to make out any details...\n";
      }
  
  
  
  
  
  
  
  
  
  
}

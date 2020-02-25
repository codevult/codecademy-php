<?php

function generateStory($singular_noun, $verb, $color, $distance_unit) {
  $story="The $singular_noun is lovely, $color, and deep.\n
  But I have promises to keep,\n
  And $distance_unit to go before I $verb,\n
  And $distance_unit to go before I $verb.\n\n";
  return $story;
}

echo generateStory("dog", "eat", "purple", "kilometers");
echo generateStory("car", "cook", "vermilion", "five steps");
echo generateStory("empty void", "speak", "beige", "miles");


//String replace
$some_story="A alien message has been received and we think, this news is more important than romantic songs.\nScientists are claiming that we are very close to talking to aliens and that they have found and contacted us first.\nThey claim that aliens engraved their message on a large stone that’s found in the Grand Canyon by some hikers.";

echo $some_story."\n\n";

$original = array("alien", "aliens", "Scientists", "Grand Canyon", "hikers");
$new = array("Martian", "Martians", "Cheetahs", "dumpster", "clowns");
$new_story = str_replace($original,$new,$some_story);

echo $new_story;

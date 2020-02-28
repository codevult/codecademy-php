<?php

  $play_count = 0;
  $correct_guesses = 0;
  $guess_high = 0;
  $guess_low = 0;
  $play_loop = 0;

  echo "Number Guessing Game\nInstructions:\nGuess a number between 1 to 10 correctly as many times as you can!\nDo you think you can do it?\n";
  start:
  echo "Yes/No";
  $answer = readline(">>");
  if ($answer === "y" ||$answer === "Y" || $answer === "yes" || $answer === "Yes" || $answer === "YES") {
    echo guessNumber();
  } elseif ($answer === "n" || $answer === "N" || $answer === "no" ||             $answer === "No" || $answer === "NO") {
    echo "Well, have a good life then!\n";
  } else {
    goto start;
}

  function guessNumber() {
  global $play_count, $correct_guesses, $guess_high, $guess_low, $play_loop;
  $play_count++;
  $randno = rand(1,10);
  echo "\nWhat is your guess? Remember it has to be between numbers 1 to 10!\n";
  $guess = intval(readline(">>"));
    if ($guess > 10 || $guess <1) {
      echo "Please enter numbers between 1 to 10\n";
        $guess = intval(readline(">>"));
    }
  echo "\nRound :${play_count}\nYour guess is ${guess}.\nThe correct answer is...${randno}.\n";
    if ($guess === $randno) {
      $correct_guesses++;
    } elseif ($guess > $randno) {
      $guess_high++;
    } elseif ($guess <$randno) {
      $guess_low++;
    }
    $play_loop++;
    if ($play_loop <10) {
      echo guessNumber();
    } else {
    echo "Well done player! You've guessed ".$percentage = ($correct_guesses/$play_count)*100 ."% correctly of the time.\n";
      if($guess_high > $guess_low) {
        echo "When you guessed wrong, you tended to guess high.\n";
      } elseif ($guess_high < $guess_low) {
        echo "When you guessed wrong, you tended to guess low.\n";
      };
    };
  };

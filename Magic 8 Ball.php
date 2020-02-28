<?php

function magic8Ball() {
  //Question Prompt
  echo "Hello, I am the magic 8 ball, feel free to\nuse me for your life changing YES/NO questions.\n";
  $question = readline(">>");
  
  //Receive question
  echo "Ahhh yes... I receive this question from time to time.\n${question}?
  \nHere is your answer..";
  
  
  $int = rand (0,19);
  //Answer generator (SWITCH);
   switch($int) {
      case 0:
      echo "It is certain.";
      break;
      case 1:
      echo "It is decidedly so.";
      break;
      case 2:
      echo "Without a doubt.";
      break;
      case 3:
      echo "Yes - definitely.";
      break;
      case 4:
      echo "You may rely on it.";
      break;
      case 5:
      echo "As I see it, yes.";
      break;
      case 6:
      echo "Most likely.";
      break;
      case 7:
      echo "Outlook good.";
      break;
      case 8:
      echo "Yes.";
      break;
      case 9:
      echo "Signs point to yes.";
      break;
      case 10:
      echo "Reply hazy, try again.";
      break;
      case 11:
      echo "Ask again later.";
      break;
      case 12:
      echo "Better not tell you now.";
      break;
      case 13:
      echo "Cannot predict now.";
      break;
      case 14:
      echo "Concentrate and ask again.";
      break;
      case 15:
      echo "Don't count on it.";
      break;
      case 16:
      echo "My reply is no.";
      break;
      case 17:
      echo "My sources say no.";
      break;
      case 18:
      echo "Outlook not so good.";
      break;
      case 19:
      echo "Very doubtful.";
      break;
  }

  //Answer generator (if/elseif);
  /*
  if($int === 0) {
    echo "It is certain.";
  } else if ($int === 1) {
    echo "It is decidedly so.";
  } else if ($int === 2) {
    echo "Without a doubt.";
  } else if ($int === 3) {
    echo "Yes - definitely.";
  } else if ($int === 4) {
    echo "You may rely on it.";
  } else if ($int === 5) {
    echo "As I see it, yes.";
  } else if ($int === 6) {
    echo "Most likely.";
  } else if ($int === 7) {
    echo "Outlook good.";
  } else if ($int === 8) {
    echo "Yes.";
  } else if ($int === 9) {
    echo "Signs point to yes.";
  } else if ($int === 10) {
    echo "Reply hazy, try again.";
  } else if ($int === 11) {
    echo "Ask again later.";
  } else if ($int === 12) {
    echo "Better not tell you now.";
  } else if ($int === 13) {
    echo "Cannot predict now.";
  } else if ($int === 14) {
    echo "Concentrate and ask again.";
  } else if ($int === 15) {
    echo "Don't count on it.";
  } else if ($int === 16) {
    echo "My reply is no.";
  } else if ($int === 17) {
    echo "My sources say no.";
  } else if ($int === 18) {
    echo "Outlook not so good.";
  } else if ($int === 19) {
    echo "Very doubtful.";
  };
  */
  echo "\n";
};

echo magic8Ball();

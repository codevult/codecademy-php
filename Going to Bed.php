<?php

class StringUtils {
  public static function secondCase($str) {
    if (strlen($str) > 1) {
      $str = strtolower($str);
      $str[1] = strtoupper($str[1]);
      return $str;
    } else {
      $str = strtolower($str);
      return $str;
    }
  }
}
class Pajamas {
  private $owner, $fit, $color;
  
  function __construct($owner, $fit, $color) {
    $this->owner = StringUtils::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }
  public function describe() {
    return "$this->owner's pajamas, has a $this->fit fit, and is in $this->color color.";
  }
  public function setFit($fit) {
    if ($fit === "tight" || $fit === "fine" || $fit === "loose") {
      $this->fit = $fit;
    } else {
      return "Fit can only be tight, fine or loose, try again.";
    }
  }
  //Setter and Getter for $owner
  public function setOwner($owner) {
    if (gettype($owner) === "string") {
      $this->owner = $owner;
    }
  }
  public function getOwner() {
    return $this->owner;
  }
  //Setter and getter for $color
  public function setColor($color) {
    if (gettype($owner) === "string") {
      $this->color = $color;
    }
  }
  public function getColor() {
    return $this->color;
  }
  
}

class ButtonablePajamas extends Pajamas {
  private $button_state = "unbuttoned";
  
  public function describe() {
    return parent::describe() . " Currently $this->button_state.";
  }
  
  public function toggleButtons() {
    if ($this->button_state === "unbuttoned") {
      $this->button_state = "buttoned";
    } else {
      $this->button_state = "unbuttoned";
    }
  }
}

class HoodedPajamas extends Pajamas{
  private $hood_state = "unhooded";
  
  public function describe() {
  return parent::describe() . " Currently $this->hood_state.";
}
  public function toggleHood() {
    if ($this->hood_state === "unhooded") {
      $this->hood_state = "hooded";
    } else {
      $this->hood_state = "unhooded";
    }
  }
}

//Testing StringUtils
/*
echo StringUtils::secondCase("MCDONALD"); 
echo StringUtils::secondCase("baldwin"); 
echo StringUtils::secondCase("Q");
echo StringUtils::secondCase("");
echo "\n";

//Testing classes, methods
$dog = new Pajamas("dog", "tight", "red");
echo $dog->describe();
echo "\n";
$dog->setFit("too tight");
echo $dog->describe();
echo "\n";
$moose = new ButtonablePajamas("moose", "loose", "green");
echo $moose->describe();
echo "\n";
$moose->toggleButtons();
echo $moose->describe();
echo "\n";
$mouse = new HoodedPajamas("mouse", "fine", "pink");
echo $mouse->describe();
echo "\n";
$mouse->setOwner("Rat");
echo $mouse->describe();
echo "\n";
$mouse->toggleHood();
echo $mouse->describe();
echo "\n";
echo $mouse->setFit("crap");
echo "\n";
echo $mouse->describe();
echo "\n";
*/

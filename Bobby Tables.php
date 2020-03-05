<?php
$name = "";
$character = "";
$email = "";
$birth_year = 1969;
$validation_error = "";
$existing_users = ["admin", "guest"];

//Calculate leap year
function isLeapYear($year) {
	return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = "";
  $character = "";
  $email = "";
  $birth_year = "";
  $raw_name = trim(htmlspecialchars($_POST["name"]));
  $raw_character = ($_POST["character"]);
  $raw_email = $_POST["email"];
  $raw_birth_year = $_POST["birth_year"];
  $birth_options = [options => [
    "min_range" => 1903, 
    "max_range" => date("Y")
    ]
  ];
  
//Name filter + lowercase only filter
  if (ctype_lower($raw_name)) {
    if (in_array($raw_name, $existing_users)) {
    $validation_eror .= "This name is taken. <br>";
  } else {
    $name = $raw_name;
    }
  } else {
    $validation_error .= "Names must all start with lowercase characters. <br>";
  }
  
// Character filter
  if (in_array($raw_character, ["Wizard", "Mage", "Orc"])) {
    $character = $raw_character;
  } else {
    $validation_error = "You must pick a wizard, mage or orc. <br>";
  }
  
//Email filter + .com filter
  if (filter_var($raw_email, FILTER_VALIDATE_EMAIL)) {
    if (!strpos($raw_email, ".com")) {
      $validation_error .= "E-mail must end with .com <br>";
    } else {
      $email = $raw_email;
    }
  } else {
    $validation_error .= "Invalid email. <br>";
  }
  
//Birth year filter + leap year/mage filter
  $leap_year = isLeapYear($raw_birth_year);
  
  if (filter_var($raw_birth_year, FILTER_VALIDATE_INT, $birth_options)) {
    if ($character === "Mage" && !$leap_year) {
      $validation_error .= "We all know that Mages are only born on leap years! <br>";
    } else {
    $birth_year = $raw_birth_year;
    }
  } else {
    $validation_error .= "That can't be your birth year. <br>";
  }
}

?>
<h1>Create your profile</h1>
<form method="post" action="">
<p>
Select a name: <input type="text" name="name" value="<?php echo $name;?>" >
</p>
<p>
Select a character:
  <input type="radio" name="character" value="Wizard" <?php echo ($character=='wizard')?'checked':'' ?>> Wizard
  <input type="radio" name="character" value="Mage" <?php echo ($character=='mage')?'checked':'' ?>> Mage
  <input type="radio" name="character" value="Orc" <?php echo ($character=='orc')?'checked':'' ?>> Orc
</p>
<p>
Enter an email:
<input type="text" name="email" value="<?php echo $email;?>" >
</p>
<p>
Enter your birth year:
<input type="text" name="birth_year" value="<?php echo $birth_year;?>">
</p>
<p>
  <span style="color:red;"><?= $validation_error;?></span>
</p>
<input type="submit" value="Submit">
</form>
  
<h2>Preview:</h2>
<p>
  Name: <?=$name;?>
</p>
<p>
  Character Type: <?=$character;?>
</p>
<p>
  Email: <?=$email;?>
</p>
<p>
  Age: <?=date("Y")-$birth_year;?>
    <?= isLeapYear($_POST["birth_year"])?>
    <?= $leap_year;?>
</p>

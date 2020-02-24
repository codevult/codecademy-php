<?php
  
//Variables to hold each type of foreign currency
  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;
  $lek = 9094;

//Print all amount of each currency started out with
echo "Starting Amount\nRiel:$riel\nKyat:$kyat \nKrones:$krones\nLek:$lek"; 

//Variables for exchange rate - foreign currency to USD

  $riel_to_usd = 0.00025;
  $kyat_to_usd = 0.00069;
  $krones_to_usd = 0.11;
  $lek_to_usd = 0.0089;

//Calculating how much USD will be exchanged

echo "\n\nAfter Exchanging\nRiel to USD:". $riel_to_usd * $riel . "\nKyat to USD:" . $kyat_to_usd * $kyat . "\nKrones to USD:" . $krones_to_usd * $krones . "\nLek to USD:" . $lek_to_usd * $lek;

$final_amount = ($riel_to_usd*$riel) + ($kyat_to_usd*$kyat) + ($krones_to_usd*$krones) + ($lek_to_usd*$lek) - 4;
echo "\n\nAfter deducting the transactions fees:\nYou'll be receiving $final_amount USD.";

echo "\n\nRounded Up\nUSD";
echo round($final_amount,2);

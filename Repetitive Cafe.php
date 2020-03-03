<h1>Welcome to the Repetitive Cafe</h1>

<?php
  $drinks= [
    "Coke" => 2.40,
    "Pepsi" => 2.30,
    "Bandung" => 2.00,
    "Milo" => 1.50,
    "Kopi" => 1.50,
    "Teh" => 1.00
];
  $pastries= [
    "Crossaint",
    "Apple Pie",
    "Cinnamon Rolls",
    "Chocolate Pie",
    "Egg Tart"
  ];
  $food= [
    "Wings platter",
    "Hot Dog Combo",
    "Chicken Chop",
    "Sirloin Steak",
    "Chicken Rice Set"
  ]
?>
  
<h3>Drinks!</h3>

<ul>
  <?php
    foreach ($drinks as $drink => $price):
  ?>
    <li><?="$drink: $$price"?></li>
  <?php
  endforeach;
  ?>
</ul>

<h3>Pastries! ($2 each)</h3>
<ul>
  <?php 
    for($i=0; $i<count($pastries); $i++):
  ?>
    <li><?=$pastries[$i]?></li>
  <?php 
    endfor;
  ?>
</ul>

<h3>Food Menu! ($10 each)</h3>
<ul>
  <?php
    $i=0;
    while ($i < count($food)):
  ?>
    <li><?=$food[$i]?></li>
  <?php
    $i++;
    endwhile;
  ?>
</ul>
  

<html>
<body>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <h1>Shaun&apos;s Awesome Calculator</h1>
  </head>
<div>
  <h2>Addition</h2>
<form class="forms" method="get" action="addition.php">
  First: <input type="number" name="addone"><br>
  Second: <input type="number" name="addtwo"><br>
  <button type="submit">Add</button><br>
</form>
</div>

<div>
  <h2>Division</h2>
<form class="forms" method="get" action="division.php">
  Numerator: <input type="number" name="num"><br>
  Denominator: <input type="number" name="den"><br>
  <button type="submit">Divide</button><br>
</form>
</div>

<div>
  <h2>Pythagorean Theorem</h2>
<form class="forms" method="get" action="pythagorean.php">
  Side a: <input type="number" name="a"><br>
  Side b: <input type="number" name="b"><br>
  Hypotenuse: To be calculated (Value will be rounded to 2 decimals)<br>
  <button type="submit">Calculate c</button><br>
</form>
</div>
  
<a href="index.php">Reset</a>
</body>
</html>

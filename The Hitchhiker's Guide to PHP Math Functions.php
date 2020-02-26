<?php
$initial = '555';

//Octal to Decimal
$a = octdec($initial);
echo $a."\n";

//Degree to radian
$b = deg2rad($a);
echo $b."\n";

//Cosine
$c = cos($b);
echo $c."\n";

//Round to 3 decimal point
$d = round($c,3);
echo $d."\n";

//Log value
$e = log($d);
echo $e."\n";

//Absolute Value
$f = abs($e);
echo $f."\n";

//Arc cosine
$g = acos($f);
echo $g."\n";

//Radian to degree
$h = rad2deg($g);
echo $h."\n";

//Round down
$i = floor($h);
echo $i."\n";

//Subtract
$j = $i - 47;
echo $j."\n";

<?php
echo "<h1>Hello world!</h1>";
//svar på frågan 1
function myfunc($var1)
{
    for ($i = 1; $i < $var1 + 1; $i++) {
        echo "<h1>$i Hello world!</h1>";
    }
}
myfunc(5);

//svar på frågan 2
function minsta($var1, $var2)
{
    if ($var2 < $var1) {
        echo "<h1>$var2 is less!</h1>";
    } else {
        echo "<h1>$var1 is less!</h1>";
    }
}
minsta(5, 8); //testing functionen

//svar på frågan 3
function myCoolLoop($start, $stop, $array)
{
    $x = array_slice($array, $start - 1, $stop - $start + 1);
    foreach ($x as $val) {
        echo "$val <br>";
    }
}
$y = ['sa', 'ba', 'fs', 'jh', 'uiyh', 'kuy', 'ut', 'jy', 're'];
myCoolLoop(3, minsta(12, 8), $y); //testing functionen

//svar på frågan 4
$thisIsMe = array(
    "firstName" => "Saeed", "lastName" => "Askarian",
    "age" => "48", "eyeColor" => "Brown", "homeCity" => "Stockholm"
);

extract($thisIsMe);
echo "<div><h1>$firstName $lastName</h1><p>Ålder: $age</p>
 <p>Ögonfärg: $eyeColor </p><p>Hemstad: $homeCity</p></div>";

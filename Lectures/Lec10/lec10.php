<?php

$d = 4; 
 
switch ($d) { 
  case 6: 
    echo "Today is Saturday"; 
    break; 
  case 0: 
    echo "Today is Sunday"; 
    break; 
  default: 
    echo "Looking forward to the Weekend"; 
} 

echo '<br>';

for ($x = 0; $x <= 100; $x+=10) { 
  echo "The number is: $x <br>"; 
} 

echo '<br>';

$i = 0; 
 
while ($i < 100) { 
  $i+=10; 
  echo "$i<br>"; 
} 

echo '<br>';

$i = 0; 
 
do { 
  $i++; 
  if ($i == 3) continue; 
  echo $i; 
} while ($i < 6); 

echo '<br>';

function setHeight($minheight = 50) { 
  echo "The height is : $minheight <br>"; 
  } 
  setHeight(350); 
  setHeight(); 
  setHeight(135); 
  setHeight(80); 

echo '<br>';
$cars = array("Volvo", "BMW", "Toyota"); 
echo count($cars);

echo '<br>';
echo $cars[0]; 
echo '<br>';

include 'lec10.html';

  echo $_POST["name"]; 
 echo $_POST["email"]; 

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>
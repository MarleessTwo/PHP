<?php

$arr = array(1, 2, 3, 4, 5);
$cnt_arr = count($arr);

// Looping for
for ($i = 0; $i < $cnt_arr; $i++) {
  var_dump($arr[$i]) . PHP_EOL;
}


$data = array(
  "username" => "admin",
  "password" => "admin123",
  "role" => 1
);
echo "Foreach" . PHP_EOL;
// Looping foreach
foreach ($data as $key => $value) :
  echo "{$key} : {$value}" . PHP_EOL;
endforeach;



// Looping While
echo "While" . PHP_EOL;
$n = 0;
while ($n < $cnt_arr) {
  var_dump($arr[$n]) . PHP_EOL;
  $n++;
}

// Looping do-while
echo "Do While" . PHP_EOL;
$x = 0;
do {
  var_dump($arr[$x]) . PHP_EOL;
  $x++;
} while ($x < $cnt_arr);

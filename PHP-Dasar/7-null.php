<?php

// Data Null
$name = "PHP";
$name = null;
$age = null;
echo "name : $name \n";
echo "age : $age \n";

// Cek Data Null
echo "Name Null? ", var_dump(is_null($name)) . "\n";

// unset Data Null
$contoh = "PHP";
unset($contoh);
var_dump(isset($contoh));

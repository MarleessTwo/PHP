<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Marleess";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 90, 12);
echo "Result : $result" . PHP_EOL;

$inierror = new MathHelper();
$inierror->name = "name";

echo MathHelper::$name = "Ini Bisa" . PHP_EOL;

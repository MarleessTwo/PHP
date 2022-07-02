
<?php

// https://www.php.net/manual/en/pcre.pattern.php 
// https://www.php.net/manual/en/ref.pcre.php

// (//i) gapapa hurup gede dan kecil

$matches = [];
$result = preg_match_all("/mar|lay|less/i", "Marleess Marley Marli", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Marleess full-stack programmer,Fullstack,DevOps");

var_dump($result);

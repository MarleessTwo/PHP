<?php

echo 'Lorem', "\n";
echo "\t\tIpsum", "\n";

// Heredoc
// Bisa parsing
echo <<<BISA_APA_AJA
\t ini bisa
Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut "labore" et dolore magna aliqua.
\n
BISA_APA_AJA;

// Nowdoc
// Tidak bisa parsing string yang mengandung karakter \n
echo <<<'BISA_APA_AJA2'
\t ini ga bisa
Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut "labore" et dolore magna aliqua. baru
BISA_APA_AJA2;

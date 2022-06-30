<?php


require_once 'Data/Programmer.php';

$company = new Company();
$company->programmer = new Programmer("Marleess");
var_dump($company);

$company->programmer = new BackendProgrammer("Marleess");
var_dump($company);

$company->programmer = new FrontendProgrammer("Marleess");
var_dump($company);

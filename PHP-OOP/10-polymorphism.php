<?php

require_once "data/Programmer.php";

$carrier = new Carrier();
$carrier->programmer = new Programmer("Marleess");
$carrier->programmer = new BackendProgrammer("Roma");
$carrier->programmer = new FrontendProgrammer("Dunhill");

sayHelloProgrammer(new Programmer("Marleess"));
sayHelloProgrammer(new BackendProgrammer("Roma"));
sayHelloProgrammer(new FrontendProgrammer("Dunhill"));

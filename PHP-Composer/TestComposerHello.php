<?php

// Hanya require saja tidak dengan file People.php
require_once __DIR__ . '/vendor/autoload.php';

// TestComposer adalah Folder src
use TestComposer\Data\People;

$Data = new People("Banget");

echo $Data->sayHello("Anjay");

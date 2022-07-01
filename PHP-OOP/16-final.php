<?php


require_once 'Data/SocialMedia.php';

$login = new Facebook();
$login->login("User", "User");

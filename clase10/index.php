<?php

include "./abstract/Base.php";
include "./class/Guest.php";
include "./class/User.php";
include "./class/Admin.php";

$guest = new Guest();
echo $guest->login();

$user = new User('Juan');
echo $user->login();

$admin = new Admin('Pedro');
echo $admin->login();
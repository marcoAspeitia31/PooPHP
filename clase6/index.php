<?php

include './Models/User.php';
include './Models/Admin.php';

$user = new User;

$user->type = new Admin;

echo $user->type->greet();
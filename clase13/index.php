<?php

include './Models/Admin.php';

$admin = new Admin('Julio');

echo $admin->getName();
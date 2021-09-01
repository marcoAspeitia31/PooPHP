<?php

include "./Models/Admin.php";

$admin = new Admin('Pepe');

echo $admin->getName();
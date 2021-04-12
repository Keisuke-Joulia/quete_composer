<?php

use App\Wcs\Hello;
use HelloWorld\SayHello;

require_once '../vendor/autoload.php';

$hello = new Hello;
echo $hello->talk();

$sayHello = new SayHello;
echo $sayHello->world();
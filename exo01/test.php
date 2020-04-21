<?php

require_once("autoload.php");

use exo\AdvancedString;

$test = new AdvancedString("Gripi la chatonne grise");
$test->bold();
$test->italic();
$test->underline();
$test->upperCase();

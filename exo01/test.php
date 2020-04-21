<?php

require_once("autoload.php");

use exo\AdvancedString;

$test = new AdvancedString("Gripi la chatonne grise");
echo $test->bold();
echo $test->italic();
echo $test->underline();
echo $test->upperCase();

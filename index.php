<?php
// Test PHP New Functions
include_once '../hidden/php/global/new_line.php';
include_once '../hidden/php/global/big_base_convert.php';

$k = '';
for($i=0;$i<32;$i++)
    $k .= '11110000';
$k = str_shuffle($k);
echo "<textarea name=\"bin\" id=\"bin\" cols=\"70\" rows=\"10\">$k</textarea><br />\nHEX: "
. big_base_convert($k,2,16);

?>
<?php
// Test PHP New Functions

$k = '';
for($i=0;$i<32;$i++)
    $k .= '11110000';
$k = str_shuffle($k);
echo "<textarea name=\"bin\" id=\"bin\" cols=\"70\" rows=\"10\">$k</textarea><br />\n";

?>

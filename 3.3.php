<?php
$str = "The autumn park was filled with golden leaves that were quietly falling to the ground, creating a magical atmosphere of peace and harmony.";
$wrapped_str = wordwrap($str, 20, "<br/>\n");
$lines = explode("<br/>\n", $wrapped_str);
foreach ($lines as &$line) {
    $line = ">  " . $line;
}
$wrapped_str = implode("<br/>\n", $lines);
echo $wrapped_str;

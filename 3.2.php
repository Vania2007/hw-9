<?php
$str = "School \"Green garden\" (2024)";
$count_of_one_inverted_commas = substr_count($str, "\"");
if ($count_of_one_inverted_commas % 2 == 0) {
    echo "OK!";
} else {
    echo "Warning. You're missing some inverted commas!";
}
echo "\n";
$count_of_opening_brackets = substr_count($str, "(");
$count_of_closing_brackets = substr_count($str, ")");
if ($count_of_opening_brackets != $count_of_closing_brackets) {
    if ($count_of_opening_brackets > $count_of_closing_brackets) {
        echo "Warning. Lost a closing bracket!";
    } else {
        echo "Warning. Lost a opening bracket!";
    }

} else {
    echo "OK!";
}

<?php
function cleanText($text)
{
    $text = strip_tags($text);
    $text = htmlspecialchars($text);
    $text = trim($text);
    htmlentities($text);
    return $text;
}
$str = "<p>\"The autumn park\" was filled with golden leaves that were quietly falling to the ground, creating a magical atmosphere of peace & harmony.</p>";
$cleanedText = cleanText($str);
echo $cleanedText;

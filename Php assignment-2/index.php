<?php

$original_line = "find the hidden treasure at the golden island";
echo "Original line: $original_line";


$upperCase=strtoupper("mystic");
$replaced_line = str_replace("golden", $upperCase, $original_line);
echo "<br>"."Replaced line: $replaced_line";
?>

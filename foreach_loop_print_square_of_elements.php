<?php
$elements = [2, 5, '7', 4, 'hello', 9];
while (FALSE !== ($line = fgets(STDIN))) {
  $elements[] = trim($line);
}

foreach ($elements as $element) {
    if (is_int($element)) {
        $square = $element * $element;
        echo "<p>{$element} squared is {$square}</p>";
    }
}
?>
<?php
if (isset($_GET['input'])) {
    $input = intval($_GET['input']);
    $numbers = array();

    for ($i = 0; $i < $input; $i++) {
        $numbers[] = rand(1, 100); // Generate random numbers for demonstration
    }

    sort($numbers);
    echo "Sorted Numbers: " . implode(', ', $numbers);
} else {
    echo "Please provide a valid input.";
}
?>
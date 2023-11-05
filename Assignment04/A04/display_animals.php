<?php
if (isset($_GET['input'])) {
    $input = intval($_GET['input']);
    $animalNames = array("Lion", "Tiger", "Elephant", "Giraffe", "Zebra", "Kangaroo", "Koala", "Panda", "Monkey", "Gorilla");
    $selectedAnimals = array();

    for ($i = 0; $i < $input; $i++) {
        $selectedAnimals[] = $animalNames[$i];
    }

    echo "Animal Names: " . implode(', ', $selectedAnimals);
} else {
    echo "Please provide a valid input.";
}
?>
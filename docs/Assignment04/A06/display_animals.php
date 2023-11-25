<!DOCTYPE html>
<html>
<head>
    <title>Animal Images</title>
</head>
<body>
    <h2>Animal Images</h2>
    <?php
    include 'animals.php'; // Include the array of animal images

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numberOfImages'])) {
        $numberOfImages = intval($_POST['numberOfImages']);

        if ($numberOfImages > 0) {
            for ($i = 0; $i < $numberOfImages; $i++) {
                $randomImageIndex = array_rand($animalImages);
                $imageURL = $animalImages[$randomImageIndex];
                echo '<img src="' . $imageURL . '" alt="Animal Image"><br>';
            }
        } else {
            echo 'Please enter a positive number.';
        }
    } else {
        echo 'Invalid input.';
    }
    ?>
</body>
</html>

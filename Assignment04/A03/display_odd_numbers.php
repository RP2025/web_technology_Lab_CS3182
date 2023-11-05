<!DOCTYPE html>
<html>
<head>
    <title>Odd Numbers Result</title>
</head>
<style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: url('BackgroundLogin.jpg') no-repeat;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
  </style>
<body>
    <h1>Odd Numbers:
    <?php
    if (isset($_POST['n'])) {
        $n = intval($_POST['n']);
        
        if ($n > 0) {
            $oddNumbers = [];

            for ($i = 1; $i <= $n; $i++) {
                if ($i % 2 != 0) {
                    $oddNumbers[] = $i;
                }
            }

            echo implode(", ", $oddNumbers);
        } else {
            echo "Please enter a positive number.";
        }
    } else {
        echo "Invalid input.";
    }
    ?>
    </h1>
</body>
</html>

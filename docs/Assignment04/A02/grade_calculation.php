<!DOCTYPE html>
<html>
<head>
    <title>Grade Result</title>
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
    <h1>Grade: <?php
    if (isset($_POST['marks'])) {
        $marks = floatval($_POST['marks']);
        
        // Your grading logic here
        $grade = "";
        
        if ($marks >= 90) {
            $grade = "A+";
        } elseif ($marks >= 80) {
            $grade = "A";
        } elseif ($marks >= 70) {
            $grade = "B";
        } elseif ($marks >= 60) {
            $grade = "C";
        } elseif ($marks >= 50) {
            $grade = "D";
        } else {
            $grade = "F";
        }
        
        echo $grade;
    } else {
        echo "Invalid input.";
    }
    ?>
    </h1>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Server Page</title>
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
    <h2>Server Page - Form Feedback</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Textbox: " . $_POST["textbox"] . "</p>";
        echo "<p>Password: " . $_POST["password"] . "</p>";
        echo "<p>Option: " . $_POST["option"] . "</p>";
        echo "<p>List Box: " . $_POST["listbox"] . "</p>";

        $uploadedFile = $_FILES["file"];
        $hiddenValue = $_POST["hidden_element"];

        echo "<p>File Upload: " . $uploadedFile["name"] . "</p>";
        echo "<p>Hidden Element: " . $hiddenValue . "</p>";
    } else {
        echo "<p>No form data submitted.</p>";
    }
    ?>
</body>
</html>

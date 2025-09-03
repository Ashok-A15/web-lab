<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    <h2>Enter Your Information</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username']);  // sanitize input

        // Display entered data
        echo "<h3>You entered:</h3>";
        echo "<p>$name</p>";

        // Save into file
        $file = "data.txt";
        $handle = fopen($file, "a");   // append mode
        fwrite($handle, $name . PHP_EOL);
        fclose($handle);

        echo "<p>✅ Data saved to $file successfully.</p><hr>";
    }
    ?>

    <!-- Form -->
    <form method="post" action="">
        <label for="username">Enter text:</label>
        <input type="text" name="username" id="username" required>
        <br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

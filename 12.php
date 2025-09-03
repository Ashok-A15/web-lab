<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body style="font-family: Arial; background-color: #f0f0f0;">
    <h2 style="text-align:center;">Login</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $file = fopen("users.txt", "r");
        $authenticated = false;

        while (($line = fgets($file)) !== false) {
            list($stored_user, $stored_pass) = explode(":", trim($line));
            if ($username === $stored_user && $password === $stored_pass) {
                $authenticated = true;
                break;
            }
        }

        fclose($file);

        if ($authenticated) {
            echo "<h3 style='text-align:center; color:green;'>Login successful. Welcome, $username!</h3>";
        } else {
            echo "<h3 style='text-align:center; color:red;'>Invalid username or password!</h3>";
        }
    }
    ?>

    <form action="" method="post" style="width:300px; margin:auto; background:white; padding:20px; border-radius:10px;">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

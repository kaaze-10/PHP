<?php
require "./includes/header.php";
require "./db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <form method="POST">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username" required><br><br>

                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" required><br><br>

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required><br><br>

                <button type="submit" name="signup">Create</button><br><br>

                <p>
                    If you already have an account, please <a href="index.php">Login</a>
                </p>
            </form>
        </div>
    </div>
</body>
<?php
if (isset($_POST['signup'])) {

    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $userlevel = "user";

    $check = "SELECT * FROM login WHERE username = '$username'";
    $result = $conn->query($check);

    if ($result && $result->num_rows > 0) {
        echo "<p><b><i>Username already exists</i></b></p>";
    } else {
        $sql = "INSERT INTO login (username, password, userlevel)
                VALUES ('$username', '$password', '$userlevel')";

        if ($conn->query($sql) === TRUE) {
            echo "<p><b><i>Signup successful</i></b></p>";
        } else {
            echo "<p><b><i>Error signing up</i></b></p>";
        }
    }
}
?>
<?php require "./includes/footer.php"; ?>
</html>

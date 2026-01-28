<?php
require "./includes/header.php";
require "./db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login-box">

            <form method="POST">
                <label>Username:</label>
                <input type="text" name="username" placeholder="Username" required><br><br>

                <label>Password:</label>
                <input type="password" name="password" placeholder="Password" required><br><br>

                <button type="submit" name="login">Login</button><br><br>

                <p>
                    If you don't have an account,
                    <a href="signup.php">Sign Up</a>
                </p>
            </form>

        </div>
    </div>

<?php
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if ($password === $row['password']) {

            $_SESSION['userid']   = $row['userid'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['userlevel'] = $row['userlevel'];

            echo "<p><b><i>Login successful<i><b></p>";
        } else {
            echo "<p><b><i>Wrong password<i><b></p>";
        }
    } else {
        echo "<p><b><i>User not found </b></i></p>";
    }
}
?>

</body>

<?php require "./includes/footer.php"; ?>
</html>

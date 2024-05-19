<!DOCTYPE html>
<html>

<head>
    <title>Kantin FILKOM | Sign Up</title>
</head>

<body>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <?php
        session_start();

        if (isset($_POST['username']) || isset($_POST['password'])) {
            if ($_POST['username'] === 'menteri' && $_POST['password'] === 'menteri') {
                $_SESSION['username'] = $_POST['username'];
                header("Location: Homepage.php");
            } else if ($_POST['username'] === 'kepaladepartemen' && $_POST['password'] === 'kepaladepartemen') {
                $_SESSION['username'] = $_POST['username'];
                header("Location: Homepage.php");
            } else {
                echo "username atau password salah";
            }
        }
        if (isset($_SESSION['username'])) {
            header("Location: Homepage.php");
        }
        ?>
        <br><br><input type="submit" value="Login">
    </form>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Kantin FILKOM | Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        body {
            background-image: url("img/Background.png");
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        body::after {
            content: "";
            background: url("img/Background.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(2px);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }


        .cont-login {

            width: fit-content;
            width: 900px;
            height: 700px;
            background-image: url("img/Background.png");
            background-size: cover;
            background-position: center;
            border: 0.1px solid grey;
            margin: auto;
            margin-top: 100px;
        }

        .login-content {
            background-color: white;
            /* height: 10px; */
        }

        .btn-signup {
            background-color: color-mix(in hsl shorter hue, grey 40%, white 60%);
            border-radius: 25px;
            justify-self: center;
            display: flex;
            margin: auto;
        }
    </style>
</head>

<body>
    <form action="" method="post">

        <?php
        // session_start();

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

    </form>

    <div class="login-wrapper">
        <div class="row cont-login">
            <div class="col-md-6  login-content">
                <div style="display: flex; justify-content: center;">
                    <h5>Buat Akun Baru</h5>
                </div>
                <div class="mb-3">
                    <label for="firstName" class="form-label">Nama Depan</label>
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Nama Depan">
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Nama Belakang</label>
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Nama Belakang">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="example@email.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <label for="repeatPassword" class="form-label">Ulangi Password</label>
                    <input type="password" class="form-control" name="repeatPassword" id="repeatPassword" placeholder="Ulangi Password">
                </div>
                <br><input type="submit" value="Sign Up" button type="button" class="btn btn-light btn-signup"><br>
            </div>
            <div class="col-md-6 blank-content"></div>
        </div>
    </div>
</body>

</html>
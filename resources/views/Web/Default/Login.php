<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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

        .login-wrapper {}

        .cont-login {
            text-align: center;
            width: fit-content;
            width: 900px;
            height: 600px;
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

        .btn-login {
            background-color: color-mix(in hsl shorter hue, grey 40%, white 60%);
            border-radius: 25px;
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="login-wrapper text-center">
        <div class="row cont-login">
            <div class="col-md-6 justify-content-center login-content">
                <h1>Pengen Pesen Makan Tapi Males Ngantri? Kantin FILKOM Aja</h1>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <br>
                <a href="homepage.php"><button type="button" class="btn btn-light btn-login">Login</button></a>
                <br>
                <a href="signup.php">Tidak punya akun? buat sekarang</a>
            </div>
            <div class="col-md-6 blank-content"></div>
        </div>
    </div>
</body>


</html>
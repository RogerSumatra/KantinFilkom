<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Kantin FILKOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f8f9fa;
        }
        .register-container {
            display: flex;
            width: 70%;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .register-form {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .register-image {
            flex: 1;
            background: url('/path/to/your/image.jpg') no-repeat center center;
            background-size: cover;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn-register {
            background-color: #4CAF50;
            color: white;
        }
        .btn-register:hover {
            background-color: #45a049;
        }
        .register-form a {
            text-decoration: none;
            color: #007bff;
        }
        .register-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-form">
            <h2>Buat Akun Baru</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">Nama Depan</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Nama Belakang</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Ulangi Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit" class="btn btn-register btn-block">Sign Up</button>
                <p class="mt-3">Sudah punya akun? <a href="{{ route('login') }}">login sekarang</a></p>
            </form>
        </div>
        <div class="register-image"></div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <title>Kantin FILKOM | Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

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

    <div class="login-wrapper">
        <div class="row cont-login">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="col-md-6  login-content">
                    <div style="display: flex; justify-content: center;">
                        <h5>Buat Akun Baru</h5>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="first_name" id="first_name"
                            placeholder="Nama Depan">
                        <label for="first_name" class="form-label">Nama Depan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="last_name" id="last_name"
                            placeholder="Nama Belakang">
                        <label for="last_name" class="form-label">Nama Belakang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="email" id="email" placeholder="example@email.com">
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Password">
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password_confirmation"
                            id="password_confirmation" placeholder="Ulangi Password">
                        <label for="password_confirmation" class="form-label">Ulangi Password</label>
                    </div>
                    <button type="submit" class="btn btn-light btn-signup">Sign Up</button>
                </div>
                <div class="col-md-6 blank-content"></div>
        </div>
        </form>
    </div>
</body>

</html>
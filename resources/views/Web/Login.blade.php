<!DOCTYPE html>
<html>

<head>
    <title>Kantin FILKOM | Login</title>
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

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="login-wrapper text-center">
            <div class="row cont-login">
                <div class="col-md-6 justify-content-center login-content">
                    <h1>Pengen Pesen Makan Tapi Males Ngantri? Kantin FILKOM Aja</h1>
                    <!-- Pesan Kesalahan -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Form Input -->
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <br>
                        <button type="submit" class="btn btn-light btn-login">Login</button>
                    <br>
                    <a href="{{ route('register')}}">Tidak punya akun? buat sekarang</a>
                </div>
                <div class="col-md-6 blank-content"></div>
            </div>
        </div>
    </form>
</body>


</html>
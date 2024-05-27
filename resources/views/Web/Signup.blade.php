<!DOCTYPE html>
<html>

<head>
    <title>Kantin FILKOM | Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

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

        .cont-register {
            width: fit-content;
            width: 900px;
            height: fit-content;
            background-image: url("img/Background.png");
            background-size: cover;
            background-position: center;
            border: 0.1px solid grey;
            margin: auto;
            margin-top: 100px;
        }

        .register-content {
            background-color: white;
            height: fit-content;    
            padding: 20px;
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

    <div class="register-wrapper">
        <div class="row cont-register">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="col-md-6 register-content">
                    <div style="display: flex; justify-content: center;">
                        <h5>Buat Akun Baru</h5>
                    </div>
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
                        <input type="text" class="form-control" name="first_name" id="first_name"
                            placeholder="Nama Depan" value="{{ old('first_name') }}" required>
                        <label for="first_name" class="form-label">Nama Depan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="last_name" id="last_name"
                            placeholder="Nama Belakang" value="{{ old('last_name') }}" required>
                        <label for="last_name" class="form-label">Nama Belakang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="example@email.com" value="{{ old('email') }}" required>
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Password" required>
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password_confirmation"
                            id="password_confirmation" placeholder="Ulangi Password" required>
                        <label for="password_confirmation" class="form-label">Ulangi Password</label>
                    </div>
                    <button type="submit" class="btn btn-light btn-signup">Sign Up</button>
                </div>
                <div class="col-md-6 blank-content"></div>
            </form>
        </div>
    </div>

</body>

</html>

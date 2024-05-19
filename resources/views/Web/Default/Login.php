<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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



        .container {
            text-align: center;
            border: 2px solid black;    
            margin: 20px auto;
            width: fit-content;
            background-image: url("img/Background.png");
            background-size: cover;
            background-position: center;
            height: 95vh;
        }

        .white-background {
            background-color: white;

        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col white-background justify-content-center">
                <h1>Pengen Pesen Makan Tapi Males Ngantri? Kantin FILKOM Aja</h1>
                <input type="text"><br>
                <input type="text"><br>
                <button>Login</button><br>
                <a href="">Tidak punya akun? buat sekarang</a>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>


</html>
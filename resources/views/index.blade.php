<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sensor | Suhu</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Goblin+One&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Sensor Suhu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Logo and Title -->
    <div class="logo">
        <img src="{{ asset('images/cloud.gif') }}" alt="Logo">
        <h2>Sensor Suhu</h2>
    </div>

    <div class="notif">
        <p>Data terakhir diperbarui pada: <span id="last-update"></span></p>
        <p>Status: <span id="status"></span></p>
    </div>

    <!-- Cards -->
    <div class="container card-container">
        <div class="card">
            <div class="card-hd"><span id="temp">0</span><span>°C</span></div>
            <div class="card-body">Temperature</div>
        </div>
        <div class="card">
            <div class="card-hd"><span id="humi">0</span><span>%</span></div>
            <div class="card-body">Humidity</div>
        </div>
    </div>

    {{--  JQUERY  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{--  my Script  --}}
    <script>
        function getDataFromDht() {
            $.getJSON("{{ route('getdata') }}",
            function (data) {
                $("#temp").html(data.temperature);
                $("#humi").html(data.humidity);
            });
        }

        setInterval(() => {
            var dt = new Date();
            $("#last-update").html(dt.toLocaleString());

            var temp = parseFloat($("#temp").html());
            var humi = parseFloat($("#humi").html());

            if (temp > 35) {
                $("#status").html("Terlalu Panas");
                $("#temp").css("color", "red");
            } else if (temp < 30) {
                $("#status").html("Terlalu Dingin");
                $("#temp").css("color", "blue");
            } else {
                $("#status").html("Normal");
                $("#temp").css("color", "black");
            }
        }, 1000);

        $(document).ready(function () {
            setInterval(() => {
                getDataFromDht()
            }, 1000);
        });
    </script>
</body>

</html>

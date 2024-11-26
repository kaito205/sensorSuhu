<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Timeline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{--  google font  --}}
    <link href="https://fonts.googleapis.com/css2?family=Goblin+One&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">
</head>

<style>
    :root {

        --bg: #0a0a0a;
        --shadow: 0 2px 2px rgb(0 0 0 / 0.5);
    }

    body {
        font-size: 1.2rem;
        font-family: 'Poppins', sans-serif;
    
    }

    .about h2 {
        color: var(--bg);
        font-family: 'Poppins';
        font-size: 5rem;
        font-weight: bold;
    }

    .timeline-panel h3 {
        color: var(--bg);
    }


    .about {
        padding-top: 5rem;
        padding-bottom: 8rem;
    }

    .about span {
        text-transform: uppercase;
        color: #666;
        font-size: 0.9rem;
        letter-spacing: 1px;
        display: block;
        margin-bottom: 1rem;
    }

    .about p {
        font-size: 1rem;
        font-weight: 300;
    }


    .timeline {
        list-style: none;
        padding: 1.4rem 0;
        margin-top: 1rem;
        position: relative;
    }

    .timeline-heading h3 {
        color: red;
        font-weight: bold;
    }


    .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        width: 1px;
        background-color: #ccc;
        left: 50%;
    }

    .timeline li {
        margin-bottom: 1.5rem;
        position: relative;
    }

    .timeline li::before,
    .timeline li::after {
        content: '';
        display: table;
    }

    .timeline li::after {
        clear: both;
    }

    .timeline li .timeline-image {
        width: 160px;
        height: 160px;
        background-color: #ccc;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 50%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .timeline li .timeline-image figcaption {
        position: absolute;
        opacity: 0;
        transition: opacity 0.3s ease;
        color: #fff;
        font-size: 2rem;
        background-color: rgba(0, 0, 0, 0.751);
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .timeline li .timeline-image:hover figcaption {
        opacity: 1;
    }

    .timeline li .timeline-panel {
        width: 40%;
        float: left;
        border: 1px solid #ccc;
        padding: 2rem;
        position: relative;
        border-radius: 8px;
        background-color: #fff;
    }

    .timeline li .timeline-panel::before {
        content: '';
        position: absolute;
        border-top: 15px solid transparent;
        border-left: 15px solid #ccc;
        border-right: 0 solid #ccc;
        border-bottom: 15px solid transparent;
        top: 80px;
        right: -15px;
    }

    .timeline li .timeline-panel::after {
        content: '';
        position: absolute;
        border-top: 14px solid transparent;
        border-left: 14px solid #fff;
        border-right: 0 solid #fff;
        border-bottom: 14px solid transparent;
        top: 81px;
        right: -13px;
    }

    .timeline li.timeline-inverted .timeline-panel {
        float: right;
    }

    .timeline li.timeline-inverted .timeline-panel::before {
        border-left-width: 0;
        border-right-width: 15px;
        left: -15px;
        right: auto;
    }

    .timeline li.timeline-inverted .timeline-panel::after {
        border-left-width: 0;
        border-right-width: 14px;
        left: -13px;
        right: auto;
    }


    .about {
        background-color: #fff;
    }

    @keyframes rotating {
        from {
            transform: rotate(0);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* Media Query */
    /* Extra large */
    @media (max-width: 1200px) {
        .home .heart {
            transform: translateX(-50%) translateY(45px);
        }
    }

    /* laptop */
    @media (max-width: 992px) {
        html {
            font-size: 75%;
        }

        .timeline::before {
            left: 60px;
        }

        .timeline li .timeline-image {
            left: 15px;
            margin-left: 45px;
            top: 16px;
        }

        .timeline li .timeline-panel {
            width: calc((100% - 200px));
            float: right;
        }

        .timeline li .timeline-panel::before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
        }

        .timeline li .timeline-panel::after {
            border-left-width: 0;
            border-right-width: 14px;
            left: -13px;
            right: auto;
        }
    }

    /* tablet */
    @media (max-width: 768px) {
        html {
            font-size: 65%;
        }

        .timeline li .timeline-image {
            width: 140px;
            height: 140px;
        }
    }

    /* mobile phone */
    @media (max-width: 576px) {
        html {
            font-size: 60%;
        }


        .timeline li .timeline-image {
            width: 80px;
            height: 80px;
        }

        .timeline li .timeline-panel {
            width: 65%;
            transform: translateX(-20px);
        }

        .timeline li .timeline-panel::before {
            top: 30px;
        }

        .timeline li .timeline-panel::after {
            top: 31px;
        }
    }
</style>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Sensor Suhu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('about') }}">About</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- about Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Kelompok-6</h2>
                    <h4>Pengembangan Aplikasi IOT</h4>
                    <span>Dosen Pengampu Bpk Ahfi Fauka Pranata S. Kom., M.M.</span>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul class="timeline">
                    <li class="timeline-inverted">
                            <a href="https://www.instagram.com/majmu25/" target="_blank">
                                <figure class="timeline-image"
                                    style="background-image: url('{{ asset('assets/img/m.jpg') }}');">
                                    <figcaption><i class="bi bi-instagram"></i></figcaption>
                                </figure>
                            </a>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>23110302</h3>
                                    <h4>M Jaja Maulana</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>"Hiduplah dengan tujuan, berjalanlah dengan keyakinan, dan tinggalkan jejak
                                        kebaikan di setiap perjalanan."</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/iisiti27/" target="_blank">
                                <figure class="timeline-image"
                                    style="background-image: url('{{ asset('assets/img/iis.jpg') }}');">
                                    <figcaption><i class="bi bi-instagram"></i></figcaption>
                                </figure>
                            </a>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>23110292</h3>
                                    <h4>Iis Siti Maesarah</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>"Hidup ini bukan tentang seberapa kuat pukulan yang bisa kamu berikan, tetapi
                                        tentang seberapa banyak pukulan yang bisa kamu terima dan tetap terus maju."</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/mira.rae.03/" target="_blank">
                                <figure class="timeline-image"
                                    style="background-image: url('{{ asset('assets/img/mira.jpg') }}');">
                                    <figcaption><i class="bi bi-instagram"></i></figcaption>
                                </figure>
                            </a>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>23110299 </h3>
                                    <h4>Mira Miratul Munawarah</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>"Hiduplah dengan tujuan, berjalanlah dengan keyakinan, dan tinggalkan jejak
                                        kebaikan di setiap perjalanan."</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <a href="https://www.instagram.com/me.adik_/" target="_blank">
                                <figure class="timeline-image"
                                    style="background-image: url('{{ asset('assets/img/anisa.jpg') }}');">
                                    <figcaption><i class="bi bi-instagram"></i></figcaption>
                                </figure>
                            </a>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>23110615</h3>
                                    <h4>Annisa Dila Kamilah</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>"Hidup ini bukan tentang seberapa kuat pukulan yang bisa kamu berikan, tetapi
                                        tentang seberapa
                                        banyak pukulan yang bisa kamu terima dan tetap terus maju."</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/ririn_nr3/" target="_blank">
                                <figure class="timeline-image"
                                    style="background-image: url('{{ asset('assets/img/ririn.jpg') }}');">
                                    <figcaption><i class="bi bi-instagram"></i></figcaption>
                                </figure>
                            </a>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>23110285</h3>
                                    <h4>Ririn Nurhalipah</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>"Hiduplah dengan tujuan, berjalanlah dengan keyakinan, dan tinggalkan jejak
                                        kebaikan di setiap perjalanan."</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <a href="https://www.instagram.com/tetehoffie/" target="_blank">
                                <figure class="timeline-image"
                                    style="background-image: url('{{ asset('assets/img/siti.jpg') }}');">
                                    <figcaption><i class="bi bi-instagram"></i></figcaption>
                                </figure>
                            </a>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>23110568</h3>
                                    <h4>Siti Nurkhopipah</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>"Hidup ini bukan tentang seberapa kuat pukulan yang bisa kamu berikan, tetapi
                                        tentang seberapa
                                        banyak pukulan yang bisa kamu terima dan tetap terus maju."</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

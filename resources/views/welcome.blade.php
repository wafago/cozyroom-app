<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
    <!-- My Style-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Logo Title Bar -->
    <link rel="icon" href="img/Group 31.png" type="image/x-icon">
    <title>CozyRoom</title>

    <style>
        /* Navbar */
        .navbar-custom {
            background-color: transparent;
            /* Change to white for better contrast */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Add subtle shadow */
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link,
        .navbar-custom .btn {
            color: #333;
            /* Darker text for better readability */
        }

        .navbar-custom .nav-link:hover,
        .navbar-custom .btn:hover {
            color: #007bff;
            /* Blue hover color */
        }

        /* Hero Section */
        .hero {

            /* Add a background image */
            background-size: fill;
            background-position: fill;
            min-height: 70vh;
            /* Set minimum hero section height */
            color: #fff;
            /* White text for better contrast on background */
        }

        .hero-tagline {
            text-align: left;
            /* Center text vertically and horizontally */
        }

        .hero-tagline h1 {
            font-size: 3rem;
            /* Increase heading size */
            margin-bottom: 1rem;
            /* Add some space after heading */
        }

        .hero-tagline p {
            font-size: 1.2rem;
            /* Increase paragraph size for readability */
            line-height: 1.5;
            /* Adjust line spacing for better flow */
        }

        .button-lg-secondary {
            background-color: #007bff;
            /* Blue button color */
            border-color: #007bff;
            padding: 15px 30px;
            border-radius: 10px;
            /* Rounded corners */
            font-size: 1rem;
            /* Adjust button text size */
            transition: all 0.3s ease-in-out;
            /* Add smooth hover effect */
        }

        .button-lg-secondary:hover {
            background-color: #0062cc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            /* Add subtle hover shadow */
        }

        /* Customizations */
        .highlight-yellow {
            color: #ffc107;
            /* Yellow for highlight */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CozyRoom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <form class="d-flex w-50">
                    <input class="form-control me-2" type="searc" placeholder="Apa yang kamu cari?" aria-label="Search">
                    <button class="btn btn-cari" type="submit">Cari</button>
                </form>
            </div>
            <div class="d-flex">
                <button class="btn btn-primary me-2" onclick="location.href='login.php'">Masuk</button>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="daftarDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Daftar
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="daftarDropdown">
                        <li><a class="dropdown-item" href="register.php">Pengguna Biasa</a></li>
                        <li><a class="dropdown-item" href="register_owner.php">Pemilik Kost (Owner)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Membantu <span class="highlight-yellow">Menemukan Kost</span> Terbaik untuk Kamu</h1>
                    <p><span class="fw-bold">CozyRoom</span> hadir untuk memudahkan Kamu dalam menemukan tempat tinggal
                        sementara
                        atau tempat menginap terbaik yang sesuai dengan kebutuhan dan keinginan Kamu</p>
                    <button onclick="location.href='before-login/semua_lapangan.php'"
                        class="button-lg-secondary">Temukan Kost</button>
                    <a href="before-login/semua_lapangan.php">
                        <img src="img/button arrow.png" alt="">
                    </a>
                </div>
            </div>
            <!-- <img src="../img/3588-removebg 1.png" alt="" class="position-absolute end-0 bottom-0 img-hero"> -->
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            $(document).ready(function () {
                $('a[href^="#"]').click(function (e) {
                    e.preventDefault();

                    var target = $(this).attr('href');

                    $('html, body').animate({
                        scrollTop: $(target).offset().top
                    }, 500, 'swing');
                });
            });
        </script>



</body>

</html>
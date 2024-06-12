<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .search-box {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .search-results {
            margin-top: 20px;
        }
        .result {
            background-color: #fff;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: background-color 0.3s ease;
        }
        .result:hover {
            background-color: #f0f0f0;
        }
        /* Animasi untuk form pencarian */
        .search-box {
            animation: fadeInDown 1s ease;
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="video-container">
        <video autoplay loop muted>
            <source src="{{ asset('videos/your-video.mp4') }}" type="video/mp4">
            <!-- Sertakan sumber video lain jika diperlukan -->
            <!-- <source src="{{ asset('videos/your-video.webm') }}" type="video/webm"> -->
            <!-- <source src="{{ asset('videos/your-video.ogg') }}" type="video/ogg"> -->
            Your browser does not support the video tag.
        </video>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="search-box">
                        <h2 class="text-center mb-4">Find Your Perfect Room</h2>
                        <form action="{{ route('search') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Search for Kost...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="search-results">
                        <!-- Hasil Pencarian akan ditampilkan di sini -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript untuk memastikan video memenuhi seluruh layar -->
    <script>
        $(document).ready(function(){
            var video = $("video");
            video.css('min-width', '100%');
            video.css('min-height', '100%');
        });
    </script>
</body>

</html>

<!-- JavaScript untuk animasi fadeInDown -->
<script>
    $(document).ready(function(){
        $(".search-box").fadeIn();
    });
</script>

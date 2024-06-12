<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Kost</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: url({{asset('bg/bg.mp4')}});

        }

        .container {
            background-color: rgba(255, 255, 255, 0.6);
            margin-top: 50px;
            margin-bottom: 50px;
            max-width: 400px;
            backdrop-filter: blur(10px); Apply the blur effect
        }

        .form-container {
            border-color: #fff;
            padding: 20px;
            border-radius: 50px;


        }

        .form-group label {
            font-weight: bold;
        }
        .bg-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;

        }
    </style>
</head>

<body>
    <video autoplay muted loop class="bg-video">
        <source src="{{ asset('bg/bg.mp4') }}" type="video/mp4">
    </video>
    <div class="container">
        <div class="form-container">
            <h2 class="text-center mb-4">Upload Kost</h2>
            <form action="{{ route('owner.uploadKost') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Kost</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="location">Lokasi</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                </div>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Upload</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add any custom JavaScript here
        });
    </script>
</body>

</html>
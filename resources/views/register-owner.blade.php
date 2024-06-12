<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Pemilik Kost</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4F4F4;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
        }

        .custom-image {

            border-radius: px;
        }

        .btn-primary {
            background-color: #ffc107;
            border: none;
        }

        .btn-primary :hover {
            background-color: #5a6268;
            border: none;
        }

        .bg-image {
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
    <image class="bg-image">
        <source src="{{ asset('bg/regis-img.jpg') }}" type="image">
    </image>
    <div class="container h-100 d-flex">
        <div class="form-container">
            <h2 class="text-center mb-4">Daftar Sebagai Owner</h2>
            <form action="{{ route('register.owner') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}" class="btn btn-link">Sudah punya akun?</a>
                </div>
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
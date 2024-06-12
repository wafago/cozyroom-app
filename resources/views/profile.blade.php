<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .profile-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
        }

        .profile-header img {
            border-radius: 50%;
        }

        .profile-info {
            margin-top: 20px;
        }

        .profile-info label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile-container">
            @if (Auth::check())
                <div class="profile-header">
                    <h2>Profile</h2>
                    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-fluid">
                    <h4>{{ Auth::user()->name }}</h4>
                    <p>{{ Auth::user()->email }}</p>
                </div>
                <div class="profile-info">
                    <h5>Informasi Profil</h5>
                    <form>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <a href="{{ route('logout') }}" class="btn btn-danger btn-block">Logout</a>
                    </form>
                </div>
            @else
                <div class="text-center">
                    <h2>Anda belum login</h2>
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                </div>
            @endif
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

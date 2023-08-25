<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VINEYARD - ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #4e73df, #224abe);
        }
        .card {
            border-radius: 15px;
            overflow: hidden;
        }
        .card-header {
            background-color: transparent;
            border: none;
        }
        .card-body {
            padding: 2rem;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-control-user {
            border-radius: 25px;
        }
        .btn-primary {
            background-color: #1cc88a;
            border-color: #1cc88a;
            border-radius: 25px;
            font-weight: bold;
            padding: 0.5rem 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card o-hidden shadow-lg">
                    <div class="card-header text-center">
                        <h1 class="card-title text-gray-900">WELCOME TO VINEYARD</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/user/login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder="Enter Email Address...">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary text-center">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

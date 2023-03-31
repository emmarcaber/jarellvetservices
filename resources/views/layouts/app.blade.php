<!DOCTYPE html>
<html lang="">
<head>
    <title>Veterinary Clinic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Veterinary Clinic</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('veterinarians.index') }}">Veterinarians</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('petowners.index') }}">Pet Owners</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pets.index') }}">Pets</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('veterinarians.index') }}">Veterinarians</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('petowners.index') }}">Pet Owners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pets.index') }}">Pets</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>

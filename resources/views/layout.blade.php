<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/authors/">Bobr</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto">
                    <a class="nav-link active" aria-current="page" href="/stats/">Stats</a>
                </div>
                <form class="d-flex mx-auto" role="search" method="get" action="/authors/">
                    <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                    <input class="form-control me-2" type="date" name="start_date" aria-label="Start date">
                    <input class="form-control me-2" type="date" name="end_date" aria-label="End date">
                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
    <footer>
        <p>© 2024 Bobr. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'CRUD operation using Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container well">
        <h2 class="text-center" style="margin-top: 5px; padding-top: 0;">CRUD operation on MySQL using Laravel</h2>
        <h3 class="text-center" style="margin-top: 5px; padding-top: 0;">Part 10: Final tweaks</h3>
    </div>

    <div class="container">
        @yield('mainContent')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
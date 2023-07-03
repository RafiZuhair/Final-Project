<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/png" href="/assets/logo-only.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Gruppo', sans-serif;
            font-size: 20px;
        }
    </style>
</head>

<body style="overflow: hidden;" class="bg-dark text-white">

    <header>
        @extends('templates.header.adminnav')
    </header>
    
    <main>
        @yield('fill')
    </main>


</body>

</html>
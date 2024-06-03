<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      .sidebar {
        background-color: #e5f141;
        padding: 20px;
        width: 250px;
    }

    .nav-link {
        color: #403F91;
        font-family: Inter;
        font-size: 18px;
        padding: 10px 0;
        text-decoration: none;
    }

    .nav-link.active {
        font-weight: bold;
    }

    </style>
</head>
<body>
    <!-- Include Header Component -->
    @include('partials.header')

    <!-- Include Side Navigation Component -->
    @include('partials.sidenav')

    <!-- Main Content -->
    <div class="content">
        <!-- Content Section -->
        @yield('content')
    </div>

    <!-- Include JavaScript files -->
    <!-- JavaScript imports and scripts -->
</body>
</html>

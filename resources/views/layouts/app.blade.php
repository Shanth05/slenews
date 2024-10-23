<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLENews - Your Source for Latest News</title>
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f9; /* Light background for readability */
        }
        .navbar {
            background-color: #007bff; /* Bright blue navbar */
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important; /* White text */
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #ffc107 !important; /* Gold color on hover */
        }
        footer {
            background-color: #343a40; /* Dark grey footer */
            color: #ffffff; /* White text in footer */
        }
        footer p {
            margin: 0; /* Remove default margin */
        }
        .card {
            border: none; /* Remove card border */
            transition: transform 0.2s; /* Animation for hover */
        }
        .card:hover {
            transform: scale(1.05); /* Scale up on hover */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">SLENews</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articles.index') }}">Articles</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')  <!-- Section for page-specific content -->
    </div>

    <footer class="text-center py-3">
        <p>&copy; 2024 SLENews. All rights reserved.</p> <!-- Single footer section -->
    </footer>

    <!-- Include Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

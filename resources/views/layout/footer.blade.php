<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        footer {
            background: linear-gradient(135deg, rgba(33,37,41,1) 0%, rgba(52,58,64,1) 100%);
            color: #fff;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.3);
            padding: 20px 0;
            margin-top: auto;
            width: 100%;
        }

        footer a {
            transition: color 0.3s, transform 0.3s;
            color: #fff;
        }

        footer a:hover {
            color: #f8f9fa;
            transform: scale(1.1);
        }

        .btn-outline-light {
            border: 2px solid #f8f9fa;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
        }

        .btn-outline-light:hover {
            background-color: #f8f9fa;
            color: #343a40;
            border-color: #f8f9fa;
        }
    </style>
</head>

<body>

    <div class="content">
        <!-- Your website content here -->
    </div>

    <footer class="text-muted py-5 bg-dark text-white">
        <div class="container position-relative">
            <p class="float-end mb-1">
                <a href="#" class="text-white text-decoration-none btn btn-outline-light rounded-pill shadow-lg">Kembali Ke Atas</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap?
                <a href="/" class="text-white text-decoration-none">Visit the homepage</a>
                or read our
                <a href="/docs/5.0/getting-started/introduction/" class="text-white text-decoration-none">getting started guide</a>.
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Your custom scripts or additional libraries -->
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Student Registration System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="margin: 0; padding: 0;">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">
                <strong style="color: blue; font-family: serif; font-size: 40px;">Student Registration System</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('student.registration') }}">Student Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('course.registration') }}">Course Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="py-5" style="background-image: url('image/register.jpg'); background-size: cover; background-position: center; min-height: calc(100vh - 60px);">
        <div class="container text-center">
            <h1 style="color: white; margin-top: 16%; font-size: 50px;">Welcome to the Student Registration System</h1>
            <p class="lead" style="color: white; font-size: 30px;">Manage your courses and registrations easily.</p>
        </div>
    </section>

    <footer class="bg-light text-center py-3" style="position: relative; bottom: 0; width: 100%;">
        <p>&copy; 2024 Student Registration System</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

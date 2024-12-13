<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home"><strong style="color:blue; font-size: 40px;  font-family: serif;php">Student Registration System</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#student-registration">Student Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courseRegister">Course Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="student-registration" class="py-5">
        <div class="container">
            <h2 class="text-center">Student Registration</h2>
            <form action="{{ route('student.register') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="registrationId" class="form-label">Registration ID</label>
                    <input type="number" class="form-control" id="registrationId" name="registrationId" required>
                </div>
                
                <div class="mb-3">
                    <label for="userId" class="form-label">User ID</label>
                    <input type="number" class="form-control" id="userId" name="userId" required>
                </div>

                <div class="mb-3">
                    <label for="courseId" class="form-label">Course ID</label>
                    <input type="number" class="form-control" id="courseId" name="courseId" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="registrationDate" class="form-label">Registration Date</label>
                    <input type="date" class="form-control" id="registrationDate" name="registrationDate" required readonly>
                </div>

                <script>
                    // Get today's date in the format YYYY-MM-DD
                    var today = new Date().toISOString().split('T')[0];
                    
                    // Set the value of the date input to today's date
                    document.getElementById('registrationDate').value = today;
                </script>

                <div class="mb-3">
                    <label for="status" class="form-label">Registration Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="" disabled selected>Select Status</option>
                        <option value="active">Active</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </section>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Student Registration System</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

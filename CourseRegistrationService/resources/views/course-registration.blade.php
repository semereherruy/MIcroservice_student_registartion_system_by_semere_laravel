<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration - Student Registration System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles.css') }}"> <!-- Use asset() to reference CSS -->
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}"><strong style="color: blue; font-family: serif; font-size: 40px;">Student Registration System</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('student.registration') }}">Student Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('course.registration') }}">Course Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="course-registration" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Course Registration</h2>
            <form action="{{ route('course.register') }}" method="POST" id="courseForm">
                @csrf
                <div class="mb-3">
                    <label for="studentId" class="form-label">Student ID</label>
                    <input type="text" class="form-control" id="studentId" name="student_id" required pattern="^[0-9]+$" title="Please enter a valid student ID (numbers only)">
                </div>
                <div class="mb-3">
                    <label for="courseSelection" class="form-label">Select Course</label>
                    <select class="form-select" id="courseSelection" name="course_name" required>
                        <option selected disabled>Select a course...</option>
                        <option value="CS101" data-credit="3">CS101 - Introduction to Programming (Credits: 3)</option>
                        <option value="SW102" data-credit="4">SW102 - Software Design (Credits: 4)</option>
                        <option value="SW103" data-credit="5">SW103 - Machine Learning (Credits: 5)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="credit" class="form-label">Credit</label>
                    <input type="number" class="form-control" id="credit" name="credit" required min="1" max="9">
                </div>
                <button type="submit" class="btn btn-primary">Register for Course</button>
            </form>
            <p id="error-message" class="text-danger mt-2"></p>
        </div>
    </section>

    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Student Registration System</p>
    </footer>

    <script>
    document.getElementById('courseForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission

        // Get selected course and its required credit value
        var courseSelect = document.getElementById('courseSelection');
        var selectedCourse = courseSelect.options[courseSelect.selectedIndex];
        var requiredCredit = selectedCourse.getAttribute('data-credit');

        // Get entered credit value
        var enteredCredit = document.getElementById('credit').value;

        // Error message container
        var errorMessage = document.getElementById('error-message');

        // Validate credit
        if (enteredCredit == requiredCredit) { // Changed '===' to '=='
            // If credit is valid, submit the form
            errorMessage.textContent = ""; // Clear error message
            this.submit(); // Submit the form normally after validation
            alert("Course registered successfully!"); // Alert on successful registration
            // Reset the form after submission
            this.reset();
        } else {
            // If credit is invalid, show error message
            errorMessage.textContent = "Invalid credit value. The correct credit for " +
                selectedCourse.text + " is " + requiredCredit + ".";
        }
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

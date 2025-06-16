<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - English Club</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f6fa;
        }

        .container {
            max-width: 400px;
            margin-top: 100px;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-control {
            border-radius: 0.375rem;
            border: 1px solid #ced4da;
        }

        .btn-primary {
            background-color: #3D405B;
            border-color: #3D405B;
            padding: 10px;
            border-radius: 0.375rem;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #F2CC8F;
            border-color: #F2CC8F;
        }

        .alert {
            margin-top: 20px;
        }

        .form-group {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Admin Login</h2>

        <!-- Error message -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3 form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <span toggle="#password" class="password-toggle bi bi-eye-slash" id="toggle-password"></span>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Password visibility toggle
        const togglePassword = document.querySelector("#toggle-password");
        const passwordField = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // Toggle the type attribute
            const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);

            // Toggle the icon
            this.classList.toggle("bi-eye");
            this.classList.toggle("bi-eye-slash");
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Test</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Placement Test</h2>
            </div>
            <div class="card-body">
                <p>Selamat mengerjakan, <strong>{{ e($testTaker->name) }}</strong>!</p>
                <p>Halaman kuis akan tampil di sini.</p>
                {{-- Di sini Anda akan me-render komponen kuis Anda --}}
            </div>
        </div>
    </div>
</body>
</html>

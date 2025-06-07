<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Club</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>
<body>

<main>
    <div class="container">
        <form action="{{ route('user.store') }}" method="POST" class="form-container">
            @csrf
            <h3>Biodata Diri</h3>
            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan Alamat Email">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Masukkan Nama Lengkap">
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label">NIM <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nim" name="nim" required placeholder="Masukkan NIM">
            </div>

            <div class="mb-3">
                <label for="score" class="form-label">Skor <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="score" name="score" min="0" required placeholder="Masukkan Skor">
            </div>

            <button type="submit" class="btn btn-submit">Submit</button>
        </form>
    </div>
</main>

</body>
</html>

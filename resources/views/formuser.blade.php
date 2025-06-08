<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Placement Test - English Club</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-tiya-golf-club.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="navbar-brand-image" />
                <span class="navbar-brand-text">English Club<small>Jambi University</small></span>
            </a>
        </div>
    </nav>

    <main>
        <div class="container mt-5">
            <div class="form-container p-5 shadow-sm rounded">
                <h3>Biodata Diri</h3>
                <form id="biodataForm" action="{{ route('user.store') }}" method="POST">
                    @csrf
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
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </main>

    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Memulai Kuis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Anda akan memulai Placement Test. Mohon perhatikan petunjuk di bawah ini sebelum memulai.</p>
                    <div style="text-align: left; padding: 15px; background-color: #f8f9fa; border-radius: 8px;">
                        <ul style="padding-left: 0; list-style: none;">
                            <li class="d-flex align-items-center mb-2"><i class="bi bi-card-checklist me-2"></i> Kuis terdiri dari 50 soal.</li>
                            <li class="d-flex align-items-center mb-2"><i class="bi bi-clock-fill me-2"></i> Waktu pengerjaan 60 menit.</li>
                            <li class="d-flex align-items-center mb-2"><i class="bi bi-shield-check me-2"></i> Kerjakan dengan jujur dan mandiri.</li>
                            <li class="d-flex align-items-center"><i class="bi bi-exclamation-triangle-fill me-2"></i> Tes hanya dapat dikerjakan satu kali.</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="startQuizBtn">Mulai Kuis</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('biodataForm');
            const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
            const startQuizBtn = document.getElementById('startQuizBtn');

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                if (form.checkValidity()) {
                    confirmationModal.show();
                } else {
                    form.reportValidity();
                }
            });

            startQuizBtn.addEventListener('click', function () {
                form.submit();
            });
        });
    </script>
</body>
</html>

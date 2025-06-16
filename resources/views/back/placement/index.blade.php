<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Option Placement - English Club Universitas Jambi</title>
  <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f6fa;
    }

    .sidebar {
      width: 260px;
      background-color: #3D405B;
      color: white;
      min-height: 100vh;
      position: fixed;
      padding-top: 1rem;
    }

    .sidebar .nav-link {
      color: white;
      padding: 12px 20px;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
      background-color: #F2CC8F;
    }

    .main-content {
      margin-left: 260px;
      padding: 2rem;
      max-width: calc(100vw - 260px);
      overflow-x: auto;
    }

    .card {
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.03);
      border: none;
    }

    thead.sticky-top {
      background-color: white;
      z-index: 1;
    }

    /* Tambahan untuk tabel */
    .table-responsive {
      overflow-x: auto;
      max-width: 100%;
    }

    table.table-sm td,
    table.table-sm th {
      white-space: nowrap;
    }
  </style>

</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // SweetAlert Delete (sudah kamu punya)
  document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.btn-delete');
    const deleteForm = document.getElementById('deleteForm');

    deleteButtons.forEach(button => {
      button.addEventListener('click', function () {
        const id = this.getAttribute('data-id');
        Swal.fire({
          title: 'Yakin ingin menghapus soal ini?',
          text: "Data tidak bisa dikembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#6c757d',
          confirmButtonText: 'Ya, Hapus!',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            deleteForm.setAttribute('action', `/placement-test/${id}`);
            deleteForm.submit();
          }
        });
      });
    });

    // ✅ SweetAlert Sukses setelah redirect
    @if(session('success'))
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        timer: 2000,
        showConfirmButton: false
      });
    @endif
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<body>
  <div class="sidebar d-flex flex-column">
    <h4 class="text-center mb-4" style="padding: 5px;">English Club Universitas Jambi</h4>
    <nav class="nav flex-column">
    {{-- Gunakan helper route() untuk semua link --}}
    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
        Dashboard
    </a>
    <a class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}" href="{{ route('admin.news.index') }}">
        News
    </a>
    <a class="nav-link {{ request()->routeIs('admin.placement-test.*') ? 'active' : '' }}" href="{{ route('admin.placement-test.index') }}">
        Placement Test Quiz
    </a>
    <a class="nav-link {{ request()->routeIs('admin.quiz-history.*') ? 'active' : '' }}" href="{{ route('admin.quiz-history.index') }}">
        Quiz History
    </a>
    <hr class="text-white">
</nav>
  </div>

  <div class="main-content container-fluid">
    <div class="card p-4">
      <h4 class="mb-3 text-center">Placement Test Question List</h4>
      <div class="mb-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahSoal">
          + Create
        </button>
      </div>

      <!-- Modal Tambah Soal -->
      <div class="modal fade" id="modalTambahSoal" tabindex="-1" aria-labelledby="modalTambahSoalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form method="POST" action="{{ url('/placement-test') }}">
              @csrf
              <div class="modal-header">
                <h5 class="modal-title">Tambah Soal Placement Test</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body row">
                <div class="col-md-6 mb-3"><label>Tag</label><input type="text" name="tags" class="form-control" required></div>
                <div class="col-md-6 mb-3"><label>Jawaban Benar</label><input type="text" name="jawaban" class="form-control" required></div>
                <div class="col-12 mb-3"><label>Soal</label><textarea name="soal" class="form-control" rows="3" required></textarea></div>
                <div class="col-md-6 mb-2"><label>Pilihan A</label><input type="text" name="pilihan1" class="form-control" required></div>
                <div class="col-md-6 mb-2"><label>Pilihan B</label><input type="text" name="pilihan2" class="form-control" required></div>
                <div class="col-md-6 mb-2"><label>Pilihan C</label><input type="text" name="pilihan3" class="form-control" required></div>
                <div class="col-md-6 mb-2"><label>Pilihan D</label><input type="text" name="pilihan4" class="form-control" required></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit Soal -->
      <div class="modal fade" id="modalEditSoal" tabindex="-1" aria-labelledby="modalEditSoalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form id="formEditSoal" method="POST">
              @csrf
              @method('PUT')
              <div class="modal-header">
                <h5 class="modal-title">Edit Soal Placement Test</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body row">
                <div class="col-md-6 mb-3"><label>Tag</label><input type="text" name="tags" id="edit-tags" class="form-control" required></div>
                <div class="col-md-6 mb-3"><label>Jawaban Benar</label><input type="text" name="jawaban" id="edit-jawaban" class="form-control" required></div>
                <div class="col-12 mb-3"><label>Soal</label><textarea name="soal" id="edit-soal" class="form-control" rows="3" required></textarea></div>
                <div class="col-md-6 mb-2"><label>Pilihan A</label><input type="text" name="pilihan1" id="edit-pilihan1" class="form-control" required></div>
                <div class="col-md-6 mb-2"><label>Pilihan B</label><input type="text" name="pilihan2" id="edit-pilihan2" class="form-control" required></div>
                <div class="col-md-6 mb-2"><label>Pilihan C</label><input type="text" name="pilihan3" id="edit-pilihan3" class="form-control" required></div>
                <div class="col-md-6 mb-2"><label>Pilihan D</label><input type="text" name="pilihan4" id="edit-pilihan4" class="form-control" required></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>

<!-- Modal Detail Soal (readonly) -->
<div class="modal fade" id="modalDetailSoal" tabindex="-1" aria-labelledby="modalDetailSoalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDetailSoalLabel">Detail Soal Placement Test</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">
        <div class="col-md-6 mb-2">
          <label>Tag</label>
          <input type="text" id="detail-tags" class="form-control" readonly>
        </div>
        <div class="col-md-6 mb-2">
          <label>Jawaban Benar</label>
          <input type="text" id="detail-jawaban" class="form-control" readonly>
        </div>
        <div class="col-12 mb-2">
          <label>Soal</label>
          <textarea id="detail-soal" class="form-control" rows="3" readonly></textarea>
        </div>
        <div class="col-md-6 mb-2">
          <label>Pilihan A</label>
          <input type="text" id="detail-pilihan1" class="form-control" readonly>
        </div>
        <div class="col-md-6 mb-2">
          <label>Pilihan B</label>
          <input type="text" id="detail-pilihan2" class="form-control" readonly>
        </div>
        <div class="col-md-6 mb-2">
          <label>Pilihan C</label>
          <input type="text" id="detail-pilihan3" class="form-control" readonly>
        </div>
        <div class="col-md-6 mb-2">
          <label>Pilihan D</label>
          <input type="text" id="detail-pilihan4" class="form-control" readonly>
        </div>
      </div>
    </div>
  </div>
</div>


      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="sticky-top">
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Tag</th>
              <th>Soal</th>
              <th class="text-center">Pilihan A</th>
              <th class="text-center">Pilihan B</th>
              <th class="text-center">Pilihan C</th>
              <th class="text-center">Pilihan D</th>
              <th class="text-center">Jawaban</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($soal as $index => $item)
              <tr>
                <td class="text-center">{{ $index + 1 }}</td>
                <td class="text-center">{{ $item->tags }}</td>
                <td>{{ $item->soal }}</td>
                <td class="text-center">{{ $item->pilihan1 }}</td>
                <td class="text-center">{{ $item->pilihan2 }}</td>
                <td class="text-center">{{ $item->pilihan3 }}</td>
                <td class="text-center">{{ $item->pilihan4 }}</td>
                <td class="text-center"><span class="badge bg-success">{{ $item->jawaban }}</span></td>
                <td>
                  <div class="d-flex gap-1 justify-content-center">
                    <button
                      class="btn btn-info btn-sm text-white"
                      data-bs-toggle="modal"
                      data-bs-target="#modalDetailSoal"
                      data-tags="{{ $item->tags }}"
                      data-soal="{{ $item->soal }}"
                      data-pilihan1="{{ $item->pilihan1 }}"
                      data-pilihan2="{{ $item->pilihan2 }}"
                      data-pilihan3="{{ $item->pilihan3 }}"
                      data-pilihan4="{{ $item->pilihan4 }}"
                      data-jawaban="{{ $item->jawaban }}"
                    >Detail
                    </button>
                    <button
                      class="btn btn-warning btn-sm text-dark"
                      data-bs-toggle="modal"
                      data-bs-target="#modalEditSoal"
                      data-id="{{ $item->id }}"
                      data-tags="{{ $item->tags }}"
                      data-soal="{{ $item->soal }}"
                      data-pilihan1="{{ $item->pilihan1 }}"
                      data-pilihan2="{{ $item->pilihan2 }}"
                      data-pilihan3="{{ $item->pilihan3 }}"
                      data-pilihan4="{{ $item->pilihan4 }}"
                      data-jawaban="{{ $item->jawaban }}"
                    >Edit</button>
                    <!-- Tombol Delete (dengan SweetAlert) -->
                    <button
                    type="button"
                    class="btn btn-danger btn-sm btn-delete"
                    data-id="{{ $item->id }}"
                  >
                    Delete
                  </button>
                  </div>
                </td>
              </tr>
            @endforeach
            <form id="deleteForm" method="POST" style="display: none;">
              @csrf
              @method('DELETE')
            </form>
          </tbody>

        </table>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Modal Edit
      var modalEdit = document.getElementById('modalEditSoal');
      modalEdit.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        modalEdit.querySelector('#formEditSoal').action = '/placement-test/' + button.getAttribute('data-id');
        modalEdit.querySelector('#edit-tags').value = button.getAttribute('data-tags');
        modalEdit.querySelector('#edit-soal').value = button.getAttribute('data-soal');
        modalEdit.querySelector('#edit-pilihan1').value = button.getAttribute('data-pilihan1');
        modalEdit.querySelector('#edit-pilihan2').value = button.getAttribute('data-pilihan2');
        modalEdit.querySelector('#edit-pilihan3').value = button.getAttribute('data-pilihan3');
        modalEdit.querySelector('#edit-pilihan4').value = button.getAttribute('data-pilihan4');
        modalEdit.querySelector('#edit-jawaban').value = button.getAttribute('data-jawaban');
      });

      // Modal Detail
      var modalDetail = document.getElementById('modalDetailSoal');
      modalDetail.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        modalDetail.querySelector('#detail-tags').value = button.getAttribute('data-tags');
        modalDetail.querySelector('#detail-soal').value = button.getAttribute('data-soal');
        modalDetail.querySelector('#detail-pilihan1').value = button.getAttribute('data-pilihan1');
        modalDetail.querySelector('#detail-pilihan2').value = button.getAttribute('data-pilihan2');
        modalDetail.querySelector('#detail-pilihan3').value = button.getAttribute('data-pilihan3');
        modalDetail.querySelector('#detail-pilihan4').value = button.getAttribute('data-pilihan4');
        modalDetail.querySelector('#detail-jawaban').value = button.getAttribute('data-jawaban');
      });
    });
    </script>


</body>
</html>

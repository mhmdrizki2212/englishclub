<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Quiz Histoy Admin - English Club Universitas Jambi</title>
  <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" />

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
<body>
  <!-- Sidebar -->
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
    <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link bg-transparent border-0 text-white w-100 text-left">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>
</nav>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="card p-3">
      <h4 class="mb-3 text-center">Placement Test History</h4>
      <div class="mb-3">
      </div>
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      @if(session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      @endif

      <table class="table table-bordered table-striped">
        <thead class="sticky-top">
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Name</th>
            <th class="text-center">Date</th>
            <th class="text-center">Correct Answer</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($histories as $history)
            <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td>{{ $history->name }}</td>
              <td class="text-center">{{ $history->created_at->format('d-M-Y') }}</td>
              <td class="text-center">{{ $history->score }}</td>
              <td class="text-center">

                <!-- Delete Button -->
                <a href="{{ route('admin.quiz-history.delete', $history->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
              </td>
            </tr>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal{{ $history->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $history->id }}" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $history->id }}">Edit Quiz History</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <!-- Edit Form -->
                    <form action="{{ route('admin.quiz-history.update', $history->id) }}" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label for="quiz_title" class="form-label">Quiz Title</label>
                        <input type="text" class="form-control" id="quiz_title" name="quiz_title" value="{{ $history->quiz_title }}" required>
                      </div>
                      <div class="mb-3">
                        <label for="score" class="form-label">Score</label>
                        <input type="number" class="form-control" id="score" name="score" value="{{ $history->score }}" required>
                      </div>
                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Edit Modal -->
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js for Modal functionality -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

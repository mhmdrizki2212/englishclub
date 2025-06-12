<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin - English Club Universitas Jambi</title>
  <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" />

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
    }
    .card-stats {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      text-align: center;
    }
    .rounded-chart {
      border-radius: 1rem;
    }
    .scroll-card {
      max-height: 300px;
      overflow-y: auto;
    }
    thead.sticky-top {
      background-color: white;
      z-index: 1;
    }
    img.rounded-circle {
      border: 2px solid #dee2e6;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column">
    <h4 class="text-center mb-4" style="padding: 5px;">English Club Universitas Jambi</h4>
    <nav class="nav flex-column">
      <a class="nav-link active" href="/dashboard">Dashboard</a>
      <a class="nav-link" href="{{ url('/newss') }}">News</a>
      <a class="nav-link" href="{{ url('/placement-test') }}"">Option Placement Test Quiz</a>
      <!-- Corrected Quiz History Link -->
      <a class="nav-link" href="{{ route('admin.quiz.history') }}">Quiz History</a>
      <hr class="text-white">
    </nav>
  </div>

  <!-- Main content -->
  <div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Dashboard</h2>
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center">
                <span class="me-2">Hi, Muhammad Rizki 👋</span>
          </div>
        
      </div>
    </div>

    <!-- Stats -->
    <div class="row mb-4 justify-content-center">
        <div class="col-md-3">
            <div class="card card-stats p-3">
                <h6>Total Visits</h6>
                <h4>1,478,286</h4>
                <p class="text-success mb-0">+4.07% Last month</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-stats p-3">
                <h6>Total News</h6>
                <h4>1,478,286</h4>
                <p class="text-success mb-0">+0.24% Last month</p>
            </div>
        </div>
    </div>
    
    <!-- Chart & Widgets -->
    <div class="row">
      <div class="col-md-8">
        <div class="card p-3 mb-4" style="height: 350px;">
          <h5>Visitor Statistics</h5>
          <div style="height: 280px;">
            <canvas id="visitorChart"></canvas>
          </div>
        </div>

        <!-- Table Section -->
        <div class="card p-3 scroll-card">
          <h6>Recent Posts</h6>
          <div class="table-responsive">
            <table class="table align-middle">
              <thead class="sticky-top">
                <tr>
                  <th>Thumbnail</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Status</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="https://via.placeholder.com/50" class="rounded" alt=""></td>
                  <td>Starting your traveling blog with Vasco</td>
                  <td>Jenny Wilson</td>
                  <td><span class="badge bg-warning">Pending</span></td>
                  <td>17.04</td>
                </tr>
                <tr>
                  <td><img src="https://via.placeholder.com/50" class="rounded" alt=""></td>
                  <td>Start a blog to reach your creative peak</td>
                  <td>Annette Black</td>
                  <td><span class="badge bg-warning">Pending</span></td>
                  <td>23.04</td>
                </tr>
                <!-- Tambahkan lebih banyak data jika ingin menguji scroll -->
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        
        <div class="card p-3 scroll-card mb-3">
          <h6>History Placement Test</h6>
        
          <ul class="list-group list-group-flush">
            @foreach ($histories as $history)
              <li class="list-group-item d-flex justify-content-between">
                {{ $history->name }}
                <span>{{ $history->created_at->format('d M Y') }}</span>
              </li>
            @endforeach
          </ul>
        </div>
        
          
          <div class="card p-3 scroll-card">
            <h6>Top Categories</h6>

            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between">Lifestyle <span>8.2k</span></li>
              <li class="list-group-item d-flex justify-content-between">Tutorials <span>8.2k</span></li>
              <li class="list-group-item d-flex justify-content-between">Technology <span>8.2k</span></li>
              <li class="list-group-item d-flex justify-content-between">UX Design <span>8.2k</span></li>
              <li class="list-group-item d-flex justify-content-between">Interaction Tips <span>8.2k</span></li>
            </ul>
          </div>
          
      </div>
    </div>
  </div>

  <!-- Chart JS Script -->
  <script>
    const ctx = document.getElementById('visitorChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [
          {
            label: 'Last 6 months',
            data: [25, 40, 30, 45, 40, 35, 60],
            borderColor: '#6f42c1',
            fill: false,
            tension: 0.4
          },
          {
            label: 'Previous',
            data: [30, 35, 40, 25, 30, 45, 20],
            borderColor: '#20c997',
            fill: false,
            tension: 0.4
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false
      }
    });

    const customerCtx = document.getElementById('newCustomerChart').getContext('2d');
    new Chart(customerCtx, {
      type: 'line',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
          data: [5, 10, 4, 8, 12, 6, 10],
          borderColor: 'white',
          fill: false,
          tension: 0.4
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false }
        },
        scales: {
          x: { display: false },
          y: { display: false }
        }
      }
    });
  </script>

</body>
</html>

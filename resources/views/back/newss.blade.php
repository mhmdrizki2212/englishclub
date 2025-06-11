<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Elegant Dashboard</title>
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
          .card {
  background-color: #ffffff;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.03);
  border: none;
}

          img.rounded-circle {
        border: 2px solid #dee2e6;
      }
      
        </style>
      </head>
<body>
    
    <!-- Sidebar -->
  <div class="sidebar d-flex flex-column">
    <h4 class="text-center mb-4"style ="padding : 5px;">English Club Universitas Jambi</h4>
    <nav class="nav flex-column">
      <a class="nav-link active" href="/dashboard">Dashboard</a>
      <a class="nav-link" href="{{ url('/newss') }}">News</a>
      <a class="nav-link" href="#">Option Placement Test Quiz</a>
      <a class="nav-link" href="#">Quiz History</a>
      <hr class="text-white">
    </nav>
   
  </div>

  <!-- Main Content -->
  <div class="main-content container-fluid">
    <div class="card p-3">
      <h6>Recent News</h6>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="sticky-top">
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Category</th>
              <th>Status</th>
              <th>Views</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Launching New Feature</td>
              <td>Technology</td>
              <td><span class="badge bg-success">Published</span></td>
              <td>1,234</td>
            </tr>
            <tr>
              <td>2</td>
              <td>How to Stay Healthy</td>
              <td>Health</td>
              <td><span class="badge bg-warning text-dark">Draft</span></td>
              <td>820</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Top Travel Destinations</td>
              <td>Travel</td>
              <td><span class="badge bg-danger">Archived</span></td>
              <td>430</td>
            </tr>
            <!-- Tambahkan baris lainnya jika perlu -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Chart Script -->
<script>
  const ctx = document.getElementById('viewsChart').getContext('2d');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Views',
        data: [1200, 1900, 3000, 5000, 2300, 3600],
        fill: false,
        borderColor: 'rgba(75, 192, 192, 1)',
        tension: 0.2
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
        }
      }
    }
  });
</script>

</body>
</html>
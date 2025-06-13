{{-- Menggunakan layout utama admin --}}
@extends('back.dashboard')

{{-- Judul Halaman --}}
@section('title', 'Admin Dashboard')

{{-- Konten Halaman --}}
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Dashboard</h2>
    <div class="d-flex align-items-center">
        {{-- Nama user bisa dibuat dinamis jika menggunakan sistem login --}}
        <span class="me-2">Hi, Admin 👋</span>
    </div>
</div>

<div class="row mb-4 justify-content-center">
    <div class="col-md-4">
        <div class="card card-stats p-3">
            <h6>Total Visits</h6>
            <h4>1,478,286</h4>
            <p class="text-success mb-0">+4.07% Last month</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-stats p-3">
            <h6>Total News</h6>
            {{-- Tampilkan total berita dari controller --}}
            <h4>{{ $totalNews }}</h4>
            <p class="text-muted mb-0">Total news published</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card p-3 mb-4" style="height: 350px;">
            <h5>Visitor Statistics</h5>
            <div style="height: 280px;">
                <canvas id="visitorChart"></canvas>
            </div>
        </div>

        <div class="card p-3">
            <h6>Recent Posts</h6>
            <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
                <table class="table align-middle">
                    <thead class="sticky-top bg-light">
                        <tr>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Looping untuk menampilkan berita terbaru --}}
                        @forelse($recentNews as $news)
                        <tr>
                            <td>
                                <img src="{{ $news->image ? asset('storage/' . $news->image) : 'https://via.placeholder.com/50x50.png?text=EC' }}"
                                     class="rounded" alt="{{ $news->title }}" width="50" height="50" style="object-fit: cover;">
                            </td>
                            <td>{{ Str::limit($news->title, 40) }}</td>
                            <td>
                                <span class="badge bg-{{ $news->status == 'published' ? 'success' : 'warning' }}">
                                    {{ ucfirst($news->status) }}
                                </span>
                            </td>
                            <td>{{ $news->created_at->format('d M Y') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No recent news.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 scroll-card mb-3" style="max-height: 485px;">
            <h6>History Placement Test</h6>
            <ul class="list-group list-group-flush">
                @forelse ($histories as $history)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $history->name }}
                    <span class="badge bg-primary rounded-pill">{{ $history->score }}</span>
                </li>
                @empty
                <li class="list-group-item">No history found.</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection

@push('scripts')
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
                    borderColor: '#3D405B',
                    backgroundColor: 'rgba(61, 64, 91, 0.1)',
                    fill: true,
                    tension: 0.4
                },
                {
                    label: 'Previous',
                    data: [30, 35, 40, 25, 30, 45, 20],
                    borderColor: '#E07A5F',
                    backgroundColor: 'rgba(224, 122, 95, 0.1)',
                    fill: true,
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>
@endpush

@extends('back.dashboard')

@section('title', 'Admin Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Dashboard</h2>
    <div class="d-flex align-items-center">
        <span class="me-2">Hi, Admin 👋</span>
    </div>
</div>

<div class="row">
    {{-- Kolom Kiri (Grafik dan Berita) --}}
    <div class="col-lg-8">
        {{-- Kartu Statistik Atas --}}
        <div class="row mb-4">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Total Visits</h6>
                        <h4 class="card-title">{{ number_format($totalVisits) }}</h4>
                        {{-- Persentase bisa ditambahkan nanti jika ada data bulan lalu --}}
                        <p class="text-success small mb-0">+0% Last month</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Total News</h6>
                        <h4 class="card-title">{{ $totalNews }}</h4>
                        <p class="text-muted small mb-0">Total news published</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Grafik Visitor --}}
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Visitor Statistics</h5>
                <div style="height: 300px;">
                    <canvas id="visitorChart"></canvas>
                </div>
            </div>
        </div>

        {{-- Tabel Berita Terbaru --}}
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Recent Posts</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentNews as $news)
                            <tr>
                                <td>
                                    <img src="{{ $news->image ? asset('storage/' . $news->image) : 'https://via.placeholder.com/50' }}"
                                         class="rounded" alt="{{ $news->title }}" width="50" height="50" style="object-fit: cover;">
                                </td>
                                <td>{{ Str::limit($news->title, 45) }}</td>
                                <td>
                                    <span class="badge bg-{{ $news->status == 'published' ? 'success' : 'secondary' }}">
                                        {{ ucfirst($news->status) }}
                                    </span>
                                </td>
                                <td>{{ $news->created_at->format('d M Y') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No recent posts found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Kolom Kanan (Riwayat Tes) --}}
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">History Placement Test</h5>
                <div style="max-height: 520px; overflow-y: auto;">
                    <ul class="list-group list-group-flush">
                        @forelse ($histories as $history)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>
                                <i class="bi bi-person-circle me-2"></i>
                                {{ Str::limit($history->name, 20) }}
                            </span>
                            <span class="badge bg-primary rounded-pill">{{ $history->score }}</span>
                        </li>
                        @empty
                        <li class="list-group-item text-center text-muted">No history found.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('visitorChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($chartLabels) !!},
                datasets: [
                    {
                        label: 'Last 6 months',
                        data: {!! json_encode($chartDataCurrent) !!},
                        borderColor: '#3D405B', // Warna biru gelap
                        backgroundColor: 'rgba(61, 64, 91, 0.1)',
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#3D405B',
                        pointRadius: 4,
                    },
                    {
                        label: 'Previous',
                        data: {!! json_encode($chartDataPrevious) !!},
                        borderColor: '#E07A5F', // Warna oranye
                        backgroundColor: 'rgba(224, 122, 95, 0.1)',
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#E07A5F',
                        pointRadius: 4,
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                        align: 'end',
                        labels: {
                            boxWidth: 12,
                            padding: 20
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
            }
        });
    });
</script>
@endpush

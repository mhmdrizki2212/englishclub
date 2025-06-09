<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Placement Test</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
                <h3>Tes Selesai!</h3>
            </div>
            <div class="card-body p-4">
                <h5 class="card-title">Terima kasih, {{ e($testTaker->name) }}!</h5>
                <p class="card-text">Anda telah menyelesaikan placement test.</p>

                @php
                    $percentage = ($totalQuestions > 0) ? round(($testTaker->score / $totalQuestions) * 100) : 0;
                @endphp

                <div class="alert alert-success">
                    <h4>Skor Akhir Anda:</h4>
                    <h1 class="display-3 fw-bold">{{ $percentage }}</h1>
                    <p class="mb-0">({{ $testTaker->score }} dari {{ $totalQuestions }} soal benar)</p>
                </div>

                <div class="mt-4 pt-3 border-top">
                    <h4 class="mb-3">Analisis Kemampuan</h4>
                    @forelse($tagPerformance as $tag => $performance)
                        <div class="mb-3 text-start">
                            <strong>{{ $tag }}</strong>
                            <span class="float-end">{{ $performance['correct'] }} / {{ $performance['total'] }} Benar</span>
                            @php
                                $tagPercentage = ($performance['total'] > 0) ? ($performance['correct'] / $performance['total']) * 100 : 0;
                            @endphp
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: {{ $tagPercentage }}%;" aria-valuenow="{{ $tagPercentage }}" aria-valuemin="0" aria-valuemax="100">{{ round($tagPercentage) }}%</div>
                            </div>
                            @if($tagPercentage < 60)
                                <small class="form-text text-muted">Anda perlu memperbanyak latihan di area ini.</small>
                            @endif
                        </div>
                    @empty
                        <p>Tidak ada analisis yang tersedia.</p>
                    @endforelse
                </div>

                <a href="{{ url('/') }}" class="btn btn-primary mt-4">Kembali ke Halaman Utama</a>
            </div>
            <div class="card-footer text-muted">
                English Club - Universitas Jambi
            </div>
        </div>
    </div>
</body>
</html>

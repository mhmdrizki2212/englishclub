<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Test - English Club</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f0f2f5; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .quiz-container { max-width: 1100px; margin: 30px auto; }
        .quiz-header { background-color: #3D405B; color: white; padding: 15px 20px; border-radius: 8px 8px 0 0; }
        .quiz-header h4 { margin: 0; }
        .timer { font-size: 1.2rem; font-weight: bold; }
        .quiz-body { display: flex; gap: 20px; }
        .question-panel { flex-grow: 1; background-color: #fff; padding: 25px; border-radius: 0 0 0 8px; }
        .navigation-panel { width: 280px; background-color: #fff; padding: 20px; border-radius: 0 0 8px 0; }
        .question-block { display: none; }
        .question-block.active { display: block; }
        .question-text { font-size: 1.2rem; margin-bottom: 20px; }
        .answer-options .form-check { margin-bottom: 15px; font-size: 1.1rem; }
        .nav-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; }
        .nav-item { cursor: pointer; background-color: #e9ecef; border: 1px solid #dee2e6; text-align: center; padding: 8px; border-radius: 4px; transition: all 0.2s; }
        .nav-item:hover { background-color: #d1d5db; }
        .nav-item.answered { background-color: #81B29A; color: white; border-color: #81B29A; }
        .nav-item.current { background-color: #3D405B; color: white; border-color: #3D405B; font-weight: bold; }
        .quiz-footer { background-color: #fff; padding: 15px; border-radius: 0 0 8px 8px; margin-top: -1px; text-align: center; }
    </style>
</head>
<body>
    <div class="quiz-container">
        <div class="quiz-header d-flex justify-content-between align-items-center">
            <h4>Placement Test</h4>
            <div>
                <span class="timer me-3"><i class="bi bi-clock-fill"></i> <span id="time">60:00</span></span>
                <button class="btn btn-danger" id="finishBtn">Selesaikan Tes</button>
            </div>
        </div>

        <form id="quizForm" action="{{ route('placement.submit', $testTaker) }}" method="POST">
            @csrf
            <div class="quiz-body">
                <div class="question-panel">
                    @forelse($questions as $index => $question)
                        <div class="question-block" id="question-{{ $index }}">
                            <p class="question-text fw-bold">Question {{ $index + 1 }}:<br>{{ $question->soal }}</p>
                            <div class="answer-options">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="option-{{ $index }}-1" value="A">
                                    <label class="form-check-label" for="option-{{ $index }}-1">{{ $question->pilihan1 }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="option-{{ $index }}-2" value="B">
                                    <label class="form-check-label" for="option-{{ $index }}-2">{{ $question->pilihan2 }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="option-{{ $index }}-3" value="C">
                                    <label class="form-check-label" for="option-{{ $index }}-3">{{ $question->pilihan3 }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="option-{{ $index }}-4" value="D">
                                    <label class="form-check-label" for="option-{{ $index }}-4">{{ $question->pilihan4 }}</label>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Belum ada soal yang ditambahkan.</p>
                    @endforelse
                </div>

                <div class="navigation-panel">
                    <h5 class="mb-3">Navigasi Soal</h5>
                    <div class="nav-grid" id="nav-grid">
                        @foreach($questions as $index => $question)
                            <div class="nav-item" data-index="{{ $index }}">{{ $index + 1 }}</div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="quiz-footer d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" id="prevBtn" disabled>Previous</button>
                <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
            </div>
        </form>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const quizForm = document.getElementById('quizForm');
        const questions = document.querySelectorAll('.question-block');
        const navItems = document.querySelectorAll('.nav-item');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const finishBtn = document.getElementById('finishBtn');
        const timeDisplay = document.getElementById('time');

        let currentQuestionIndex = 0;
        const totalQuestions = questions.length;

        function showQuestion(index) {
            questions.forEach((q, i) => {
                q.classList.toggle('active', i === index);
            });
            navItems.forEach((n, i) => {
                n.classList.toggle('current', i === index);
            });

            // Update button states
            prevBtn.disabled = index === 0;
            nextBtn.disabled = index === totalQuestions - 1;
        }

        function navigate(direction) {
            let newIndex = currentQuestionIndex + direction;
            if (newIndex >= 0 && newIndex < totalQuestions) {
                currentQuestionIndex = newIndex;
                showQuestion(currentQuestionIndex);
            }
        }

        // Event Listeners for buttons
        prevBtn.addEventListener('click', () => navigate(-1));
        nextBtn.addEventListener('click', () => navigate(1));

        navItems.forEach(item => {
            item.addEventListener('click', () => {
                currentQuestionIndex = parseInt(item.getAttribute('data-index'));
                showQuestion(currentQuestionIndex);
            });
        });

        // Mark question as answered in navigator
        quizForm.addEventListener('change', function(e) {
            if (e.target.type === 'radio') {
                const questionId = e.target.name.match(/\[(\d+)\]/)[1];
                // Cari question block berdasarkan id soal
                const questionBlock = e.target.closest('.question-block');
                const questionIndex = Array.from(questions).indexOf(questionBlock);

                if (questionIndex !== -1) {
                    navItems[questionIndex].classList.add('answered');
                }
            }
        });

        // Timer
        let timeInSeconds = 3600; // 60 menit
        const timerInterval = setInterval(() => {
            timeInSeconds--;
            const minutes = Math.floor(timeInSeconds / 60);
            const seconds = timeInSeconds % 60;
            timeDisplay.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
            if (timeInSeconds <= 0) {
                clearInterval(timerInterval);
                alert('Waktu habis!');
                quizForm.submit();
            }
        }, 1000);

        // Finish Button
        finishBtn.addEventListener('click', () => {
            if(confirm('Apakah Anda yakin ingin menyelesaikan tes ini?')) {
                quizForm.submit();
            }
        });

        // Initialize first question
        if (totalQuestions > 0) {
            showQuestion(0);
        } else {
            prevBtn.disabled = true;
            nextBtn.disabled = true;
        }
    });
    </script>
</body>
</html>

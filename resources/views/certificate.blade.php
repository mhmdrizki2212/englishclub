<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificate of Achievement</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-color: #f0f2f5;
        }
        .certificate-container {
            border: 10px solid #81B29A;
            padding: 50px;
            width: 800px;
            margin: auto;
            background-color: white;
            position: relative;
        }
        .header {
            font-size: 48px;
            font-weight: bold;
            color: #3D405B;
        }
        .subtitle {
            font-size: 24px;
            color: #717275;
        }
        .recipient-name {
            font-size: 40px;
            font-style: italic;
            color: #F2CC8F;
            margin: 40px 0;
            border-bottom: 2px solid #81B29A;
            display: inline-block;
            padding-bottom: 5px;
        }
        .completion-text {
            font-size: 20px;
            margin-bottom: 30px;
        }
        .score {
            font-size: 36px;
            font-weight: bold;
            color: #3D405B;
            margin-bottom: 40px;
        }
        .footer {
            display: -webkit-box;
            -webkit-box-pack: justify;
            margin-top: 50px;
        }
        .signature-block {
            width: 45%;
            text-align: center;
        }
        .signature-line {
            border-top: 2px solid #3D405B;
            width: 80%;
            margin: 0 auto;
        }
        .signature-title {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="certificate-container">
        <div class="header">
            Certificate of Achievement
        </div>
        <div class="subtitle">
            This certificate is proudly presented to
        </div>
        <div class="recipient-name">
            {{ $testTaker->name }}
        </div>
        <div class="completion-text">
            For successfully completing the Placement Test on {{ \Carbon\Carbon::parse($testTaker->updated_at)->format('F j, Y') }}.
        </div>
        <div class="score">
            Final Score: {{ round(($testTaker->score / \App\Models\placement_test::count()) * 100) }}
        </div>
        <div class="footer">
            <div class="signature-block">
                <div class="signature-line"></div>
                <div class="signature-title">Chairman of English Club</div>
            </div>
            <div class="signature-block">
                <div class="signature-line"></div>
                <div class="signature-title">Head of Academic Department</div>
            </div>
        </div>
    </div>
</body>
</html>

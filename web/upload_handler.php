<?php


$uploadDir = __DIR__ . '/uploads/'; // 파일을 저장할 디렉토리
$uploadFile = $uploadDir . basename($_FILES['file']['name']); // 업로드될 파일의 전체 경로

// uploads 디렉토리가 존재하지 않으면 생성 시도
if (!is_dir($uploadDir)) {
    // mkdir 함수를 사용하여 디렉토리 생성. 0777 권한은 모든 사용자에게 읽기/쓰기/실행 권한을 부여합니다.
    // 이는 교육용으로 취약점을 명확히 보여주기 위함이며, 실제 운영 환경에서는 매우 위험합니다.
    mkdir($uploadDir, 0777, true); 
}

$uploadOk = 1;
$message = "";

// 파일이 실제로 업로드되었는지 확인
if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    // 파일 확장자나 MIME 타입 검사 없이 모든 파일 업로드 허용
    // 이것이 바로 취약점입니다! 이로 인해 PHP 웹셸 파일이 업로드될 수 있습니다.
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
        $message = "파일 " . htmlspecialchars(basename($_FILES["file"]["name"])) . "이(가) 성공적으로 업로드되었습니다.";
    } else {
        $message = "파일 업로드 중 오류가 발생했습니다.";
        $uploadOk = 0;
    }
} else {
    // 파일이 선택되지 않았거나 업로드 오류가 발생한 경우
    $message = "파일이 선택되지 않았거나 업로드 오류가 발생했습니다. 오류 코드: " . $_FILES["file"]["error"];
    $uploadOk = 0;
}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>업로드 결과</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 2rem;
        }
        .container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .success {
            color: #10b981; /* Green */
        }
        .error {
            color: #ef4444; /* Red */
        }
        button {
            background-color: #3b82f6;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            margin-top: 1.5rem;
        }
        button:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">업로드 결과</h1>
        <p class="text-lg <?= $uploadOk ? 'success' : 'error' ?> mb-6">
            <?= htmlspecialchars($message) ?>
        </p>
        <button onclick="window.location.href='upload_page.php'">파일 업로드 페이지로 돌아가기</button>
    </div>
</body>
</html>

<?php
// uploads 디렉토리의 파일 목록을 가져옵니다.
// '.'과 '..'은 제외합니다.
$uploadDir = __DIR__ . '/uploads';
$files = [];

// uploads 디렉토리가 존재하고 읽을 수 있는지 확인합니다.
if (is_dir($uploadDir)) {
    $files = array_diff(scandir($uploadDir), array('.', '..'));
} else {
    // 디렉토리가 없으면 경고 메시지를 출력합니다.
    // 실제 운영 환경에서는 이런 메시지를 노출하지 않아야 합니다.
    error_log("Upload directory not found: " . $uploadDir);
    echo "<p style='color: red;'>경고: 'uploads' 디렉토리를 찾을 수 없습니다. 생성해주세요!</p>";
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>취약한 게시판 CMS (교육용)</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 2rem;
        }
        .container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        input[type="text"], input[type="file"], button {
            border-radius: 0.5rem;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
        }
        button {
            background-color: #3b82f6;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        button:hover {
            background-color: #2563eb;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background-color: #e5e7eb;
            padding: 0.75rem;
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        li a {
            color: #1f2937;
            text-decoration: none;
            word-break: break-all; /* 긴 파일명 처리 */
        }
        li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">게시글 작성 및 파일 업로드</h1>

        <form method="POST" action="upload.php" enctype="multipart/form-data" class="mb-8 p-6 border border-gray-200 rounded-lg shadow-sm">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">제목:</label>
                <input type="text" id="title" name="title" placeholder="게시글 제목을 입력하세요" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="file" class="block text-gray-700 text-sm font-bold mb-2">파일 선택:</label>
                <input type="file" id="file" name="file" class="w-full text-gray-700">
                <p class="text-sm text-gray-500 mt-1">어떤 파일이든 업로드 가능합니다. (교육용 취약점)</p>
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                업로드
            </button>
        </form>

        <h2 class="text-2xl font-bold mb-4 text-gray-800">업로드된 파일 목록</h2>
        <?php if (empty($files)): ?>
            <p class="text-gray-600">업로드된 파일이 없습니다.</p>
        <?php else: ?>
            <ul class="space-y-2">
                <?php foreach ($files as $file): ?>
                    <li class="bg-gray-100 p-3 rounded-md flex justify-between items-center">
                        <a href="uploads/<?= htmlspecialchars($file) ?>" target="_blank" class="text-blue-600 hover:underline">
                            <?= htmlspecialchars($file) ?>
                        </a>
                        <!-- 삭제 기능 (선택 사항: 교육 목적에 따라 추가 가능) -->
                        <!-- <form method="POST" action="delete.php" class="inline-block">
                            <input type="hidden" name="filename" value="<?= htmlspecialchars($file) ?>">
                            <button type="submit" class="text-red-500 hover:text-red-700 text-sm ml-4">삭제</button>
                        </form> -->
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>


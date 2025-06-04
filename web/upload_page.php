<?php include 'header.php'; ?>

    <!-- File Upload Hero Section -->
    <section class="relative bg-gray-800 text-white py-24 px-4 overflow-hidden">
        <img src="https://placehold.co/1920x1080/6a707c/ffffff?text=Secure+Upload" 
             alt="Upload Background" 
             class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative max-w-7xl mx-auto text-center z-10">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 animate-fade-in-down">
                Client Portal: Secure File Upload
            </h1>
            <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto opacity-90 animate-fade-in">
                프로젝트 관련 문의가 있으시다면, 파일을 업로드 후 신청하시면 됩니다.
            </p>
        </div>
    </section>

    <!-- File Upload Form & List Section -->
    <section id="upload-content" class="py-20 px-4 bg-gray-100">
        <div class="max-w-4xl mx-auto card p-8 bg-white">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Upload Your Project Files</h2>
            
            <form action="upload_handler.php" method="POST" enctype="multipart/form-data" class="space-y-6">
                <div>
                    <label for="title" class="block text-gray-700 text-lg font-medium mb-2">파일 제목:</label>
                    <input type="text" id="title" name="title" placeholder="문서 제목 또는 설명" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="file" class="block text-gray-700 text-lg font-medium mb-2">파일 선택:</label>
                    <input type="file" id="file" name="file" class="w-full text-gray-700 p-3 border border-gray-300 rounded-lg bg-white cursor-pointer">
                    <p class="text-sm text-gray-500 mt-2">업로드 가능한 파일 형식에 제한이 없습니다. </p>
                </div>
                <button type="submit" class="btn-primary bg-yellow-500 text-white w-full hover:bg-yellow-600">
                    파일 업로드
                </button>
            </form>

            <h3 class="text-2xl font-bold text-gray-800 mt-12 mb-6 text-center">업로드된 파일 목록</h3>
            <ul class="space-y-3">
                <?php
                // PHP 스크립트가 실행되는 디렉토리 기준으로 uploads 폴더를 찾습니다.
                $uploadDir = __DIR__ . '/uploads';
                
                // uploads 디렉토리가 존재하는지 확인합니다.
                if (is_dir($uploadDir)) {
                    // 디렉토리 내의 모든 파일과 폴더를 읽어오고, '.'과 '..'은 제외합니다.
                    $files = array_diff(scandir($uploadDir), array('.', '..'));
                    
                    // 파일이 하나도 없을 경우 메시지 출력
                    if (empty($files)) {
                        echo "<li class='text-gray-600 text-center'>업로드된 파일이 없습니다.</li>";
                    } else {
                        // 각 파일을 순회하며 목록으로 표시
                        foreach ($files as $file) {
                            // 파일 경로를 안전하게 HTML 엔티티로 변환하여 XSS 방지
                            // 하지만, 파일 자체가 웹셸이라면 실행될 수 있습니다.
                            echo "<li class='bg-gray-50 p-4 rounded-md flex justify-between items-center card'>
                                    <a href='uploads/" . htmlspecialchars($file) . "' class='text-blue-600 hover:underline text-lg' target='_blank'>" . htmlspecialchars($file) . "</a>
                                  </li>";
                        }
                    }
                } else {
                    // uploads 디렉토리가 없을 경우 경고 메시지 출력
                    echo "<li class='text-red-500 text-center font-semibold'>'uploads' 디렉토리를 찾을 수 없습니다. 생성해주세요!</li>";
                }
                ?>
            </ul>
        </div>
    </section>

<?php include 'footer.php'; ?>


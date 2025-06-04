<?php include 'header.php'; ?>

    <!-- Contact & Upload Hero Section -->
    <section class="relative bg-gray-800 text-white py-24 px-4 overflow-hidden">
        <img src="https://placehold.co/1920x1080/5a606c/ffffff?text=Contact+and+Upload" 
             alt="Contact and Upload Background" 
             class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative max-w-7xl mx-auto text-center z-10">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 animate-fade-in-down">
                Let's Connect and Collaborate
            </h1>
            <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto opacity-90 animate-fade-in">
                문의 사항이 있으시거나 파일을 업로드하시려면 아래 양식을 이용해주세요.
            </p>
        </div>
    </section>

    <!-- Main Content Section: Contact Form & File Upload -->
    <section id="contact-upload-content" class="py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left Column: Contact Form & Info -->
            <div>
                <h2 class="text-4xl font-bold text-gray-800 mb-8">문의하기</h2>
                <p class="text-lg text-gray-600 mb-6">
                    궁금한 점이 있으시면 언제든지 연락 주세요. 프로젝트 문의, 협력 제안 등 모든 질문에 답변해 드립니다.
                </p>
                
                <!-- Contact Form -->
                <div class="card p-8 bg-gray-100 mb-12">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">메시지 보내기</h3>
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label for="name" class="block text-gray-700 font-medium mb-2">이름:</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">이메일:</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 font-medium mb-2">제목:</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">메시지:</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                        </div>
                        <button type="submit" class="btn-primary bg-blue-600 text-white w-full hover:bg-blue-700">
                            메시지 전송
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <h3 class="text-2xl font-bold text-gray-800 mb-6">연락처 정보</h3>
                <div class="space-y-6">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-4 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-3.86-3.86A19.79 19.79 0 0 1 2 4.18 2 2 0 0 1 4.18 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <div>
                            <p class="font-semibold text-gray-800">전화</p>
                            <p class="text-gray-600">+1 (234) 567-8900</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-4 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <div>
                            <p class="font-semibold text-gray-800">이메일</p>
                            <p class="text-gray-600">info@buildingsolutions.com</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-4 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"></path>
                            <circle cx="12" cy="9" r="3"></circle>
                        </svg>
                        <div>
                            <p class="font-semibold text-gray-800">주소</p>
                            <p class="text-gray-600">123 Construction Blvd, Cityville, State 12345</p>
                        </div>
                    </div>
                </div>
                
                <!-- Placeholder for Map -->
                <div class="mt-12 card bg-gray-200 h-64 flex items-center justify-center text-gray-600 text-xl font-semibold">
                    [Image of Map Placeholder]
                </div>
            </div>

            <!-- Right Column: File Upload Section -->
            <div>
                <h2 class="text-4xl font-bold text-gray-800 mb-8">파일 업로드</h2>
                <p class="text-lg text-gray-600 mb-6">
                    프로젝트 관련 문서, 도면 등을 안전하게 업로드할 수 있습니다.
                </p>

                <div class="card p-8 bg-gray-100 mb-12">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">프로젝트 파일 업로드</h3>
                    <form action="upload_handler.php" method="POST" enctype="multipart/form-data" class="space-y-6">
                        <div>
                            <label for="upload_title" class="block text-gray-700 text-lg font-medium mb-2">파일 제목:</label>
                            <input type="text" id="upload_title" name="title" placeholder="문서 제목 또는 설명" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="upload_file" class="block text-gray-700 text-lg font-medium mb-2">파일 선택:</label>
                            <input type="file" id="upload_file" name="file" class="w-full text-gray-700 p-3 border border-gray-300 rounded-lg bg-white cursor-pointer">
                            <p class="text-sm text-gray-500 mt-2">업로드 가능한 파일 형식(hwp, ppt, pdf, word, jpeg, img)</p>
                        </div>
                        <button type="submit" class="btn-primary bg-yellow-500 text-white w-full hover:bg-yellow-600">
                            파일 업로드
                        </button>
                    </form>
                </div>

                
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>

<?php include 'header.php'; ?>

    <section class="relative bg-gray-800 text-white py-24 px-4 overflow-hidden">
        <img src="https://placehold.co/1920x1080/1a202c/ffffff?text=Modern+Construction+Site" 
             alt="Modern Construction Site" 
             class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative max-w-7xl mx-auto text-center z-10">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 animate-fade-in-down">
                짱돌건설 회사
            </h1>
            <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto opacity-90 animate-fade-in">
                혁신적이고 지속 가능하며 고품질의 건설 솔루션을 제공하여 더 나은 미래를 만듭니다.
            </p>
            <a href="projects.php" class="btn-primary bg-yellow-500 text-white hover:bg-yellow-600">
                우리의 프로젝트 보기
            </a>
        </div>
    </section>

    <section id="home-services" class="py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-12">우리의 전문성</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="card p-8 bg-gray-100 flex flex-col items-center text-center transform hover:scale-105 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                        <path d="M12 22V7"></path>
                        <path d="M7 12h10"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-3">주거</h3>
                    <p class="text-gray-600">
                        현대적인 삶을 위한 아름답고 기능적인 주택을 건설합니다.
                    </p>
                </div>
                <div class="card p-8 bg-gray-100 flex flex-col items-center text-center transform hover:scale-105 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h12l4 4z"></path>
                        <path d="M17 21v-8a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v8"></path>
                        <path d="M10 10h.01"></path>
                        <path d="M14 10h.01"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-3">상업</h3>
                    <p class="text-gray-600">
                        견고하고 효율적인 상업용 부동산을 개발합니다.
                    </p>
                </div>
                <div class="card p-8 bg-gray-100 flex flex-col items-center text-center transform hover:scale-105 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 12L12 3L21 12"></path>
                        <path d="M7 21V12"></path>
                        <path d="M17 21V12"></path>
                        <path d="M12 21V12"></path>
                        <path d="M5 21H19"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-3">리모델링</h3>
                    <p class="text-gray-600">
                        현대적이고 지속 가능한 업그레이드로 공간을 활성화합니다.
                    </p>
                </div>
            </div>
            <a href="services.php" class="btn-primary bg-blue-600 text-white mt-12 inline-block hover:bg-blue-700">
                모든 서비스 살펴보기
            </a>
        </div>
    </section>

    <section id="home-about" class="py-20 px-4 bg-gray-200">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-800 mb-6">우리는 누구인가?</h2>
                <p class="text-lg text-gray-600 mb-4">
                    짱돌건설 회사는 우수성을 제공하기 위해 헌신하는 선도적인 건설 회사입니다. 혁신과 지속 가능성에 중점을 두고 고객의 비전을 현실로 만듭니다.
                </p>
                <a href="about.php" class="btn-primary bg-yellow-500 text-white inline-block hover:bg-yellow-600">
                    우리에 대해 더 알아보기
                </a>
            </div>
            <img src="https://placehold.co/600x400/9ca3af/ffffff?text=Our+Company" alt="Our Company" class="card w-full rounded-lg shadow-lg">
        </div>
    </section>

<?php include 'footer.php'; ?>

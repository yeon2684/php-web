<?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="relative bg-gray-800 text-white py-24 px-4 overflow-hidden">
        <img src="https://placehold.co/1920x1080/1a202c/ffffff?text=Modern+Construction+Site" 
             alt="Modern Construction Site" 
             class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative max-w-7xl mx-auto text-center z-10">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 animate-fade-in-down">
                Building Tomorrow, Today.
            </h1>
            <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto opacity-90 animate-fade-in">
                Delivering innovative, sustainable, and high-quality construction solutions for a better future.
            </p>
            <a href="projects.php" class="btn-primary bg-yellow-500 text-white hover:bg-yellow-600">
                VIEW OUR PROJECTS
            </a>
        </div>
    </section>

    <!-- Brief Services Section -->
    <section id="home-services" class="py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-12">Our Expertise</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Service 1 -->
                <div class="card p-8 bg-gray-100 flex flex-col items-center text-center transform hover:scale-105 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                        <path d="M12 22V7"></path>
                        <path d="M7 12h10"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-3">Residential</h3>
                    <p class="text-gray-600">
                        Crafting beautiful and functional homes for modern living.
                    </p>
                </div>
                <!-- Service 2 -->
                <div class="card p-8 bg-gray-100 flex flex-col items-center text-center transform hover:scale-105 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h12l4 4z"></path>
                        <path d="M17 21v-8a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v8"></path>
                        <path d="M10 10h.01"></path>
                        <path d="M14 10h.01"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-3">Commercial</h3>
                    <p class="text-gray-600">
                        Developing robust and efficient commercial properties.
                    </p>
                </div>
                <!-- Service 3 -->
                <div class="card p-8 bg-gray-100 flex flex-col items-center text-center transform hover:scale-105 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600 mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 12L12 3L21 12"></path>
                        <path d="M7 21V12"></path>
                        <path d="M17 21V12"></path>
                        <path d="M12 21V12"></path>
                        <path d="M5 21H19"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-3">Renovation</h3>
                    <p class="text-gray-600">
                        Revitalizing spaces with modern and sustainable upgrades.
                    </p>
                </div>
            </div>
            <a href="services.php" class="btn-primary bg-blue-600 text-white mt-12 inline-block hover:bg-blue-700">
                EXPLORE ALL SERVICES
            </a>
        </div>
    </section>

    <!-- Brief About Us Section -->
    <section id="home-about" class="py-20 px-4 bg-gray-200">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Who We Are</h2>
                <p class="text-lg text-gray-600 mb-4">
                    Building Solutions is a leading construction firm dedicated to delivering excellence. With a focus on innovation and sustainability, we bring your visions to life.
                </p>
                <a href="about.php" class="btn-primary bg-yellow-500 text-white inline-block hover:bg-yellow-600">
                    LEARN MORE ABOUT US
                </a>
            </div>
            <img src="https://placehold.co/600x400/9ca3af/ffffff?text=Our+Company" alt="Our Company" class="card w-full rounded-lg shadow-lg">
        </div>
    </section>

<?php include 'footer.php'; ?>

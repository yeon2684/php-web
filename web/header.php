<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building Solutions - Your Partner in Construction</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom styles for rounded corners and shadows */
        .card {
            border-radius: 0.75rem; /* rounded-xl */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* shadow-md */
        }
        .btn-primary {
            border-radius: 0.5rem; /* rounded-lg */
            padding: 0.75rem 1.5rem;
            font-weight: 600; /* font-semibold */
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            opacity: 0.9;
        }
        /* Simple animation for hero text */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out forwards;
        }
        .animate-fade-in {
            animation: fadeIn 1.5s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header / Navigation Bar -->
    <header class="bg-gray-900 text-white py-4 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <!-- Logo / Company Name -->
            <div class="text-2xl font-bold flex items-center">
                <!-- Construction Icon (simple SVG) -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-yellow-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <polyline points="12 18 12 12 16 10"></polyline>
                    <line x1="8" y1="10" x2="12" y2="12"></line>
                </svg>
                BUILDING SOLUTIONS
            </div>
            <!-- Navigation Links -->
            <nav class="hidden md:flex space-x-8">
                <a href="index.php" class="hover:text-yellow-400 transition duration-300">HOME</a>
                <a href="services.php" class="hover:text-yellow-400 transition duration-300">SERVICES</a>
                <a href="projects.php" class="hover:text-yellow-400 transition duration-300">PROJECTS</a>
                <a href="about.php" class="hover:text-yellow-400 transition duration-300">ABOUT US</a>
                <a href="contact_upload.php" class="hover:text-yellow-400 transition duration-300">CONTACT</a>
            </nav>
            <!-- Mobile Menu Button (for responsiveness) -->
            <button class="md:hidden text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </header>

<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building Solutions - Your Partner in Construction</title>
    <link rel="icon" type="image/png" href="/assets/favicon.png"> <!-- favicon 경로는 환경에 맞게 조정 -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .card {
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .btn-primary {
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Sticky Navigation Header -->
<header class="sticky top-0 z-50 bg-gray-900 text-white py-4 shadow-md">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-bold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-yellow-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                <polyline points="12 18 12 12 16 10"></polyline>
                <line x1="8" y1="10" x2="12" y2="12"></line>
            </svg>
            BUILDING SOLUTIONS
        </div>

        <!-- Navigation -->
        <nav class="space-x-8 text-sm font-medium">
            <a href="index.php" class="<?= $currentPage == 'index.php' ? 'text-yellow-400 font-semibold' : 'hover:text-yellow-400' ?>">HOME</a>
            <a href="services.php" class="<?= $currentPage == 'services.php' ? 'text-yellow-400 font-semibold' : 'hover:text-yellow-400' ?>">SERVICES</a>
            <a href="projects.php" class="<?= $currentPage == 'projects.php' ? 'text-yellow-400 font-semibold' : 'hover:text-yellow-400' ?>">PROJECTS</a>
            <a href="about.php" class="<?= $currentPage == 'about.php' ? 'text-yellow-400 font-semibold' : 'hover:text-yellow-400' ?>">ABOUT US</a>
            <a href="upload_page.php" class="<?= $currentPage == 'upload_page.php' ? 'text-yellow-400 font-semibold' : 'hover:text-yellow-400' ?>">FILE UPLOAD</a>
            <a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'text-yellow-400 font-semibold' : 'hover:text-yellow-400' ?>">CONTACT</a>
        </nav>
    </div>
</header>

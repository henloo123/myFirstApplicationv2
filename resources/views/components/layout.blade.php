<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board - @yield('title', 'Find Your Dream Job')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blush': '#FFE4E6',
                        'rose': '#FDA4AF',
                        'pink': '#FB7185',
                        'mauve': '#DB2777',
                        'lavender': '#DDD6FE',
                        'lilac': '#C4B5FD',
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-blush min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg border-b-4 border-rose">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-r from-rose to-pink rounded-full flex items-center justify-center">
                            <i class="fas fa-briefcase text-white text-lg"></i>
                        </div>
                        <span class="text-2xl font-bold bg-gradient-to-r from-rose to-mauve bg-clip-text text-transparent">JobBloom</span>
                    </a>
                    <div class="ml-12 flex items-baseline space-x-8">
                        <a href="/jobs" 
                           class="{{ request()->is('jobs') || request()->is('jobs/*') ? 'text-mauve font-semibold border-b-2 border-mauve' : 'text-gray-600 hover:text-mauve' }} px-3 py-2 text-sm font-medium transition-all duration-300 flex items-center space-x-2">
                            <i class="fas fa-list"></i>
                            <span>All Jobs</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @if(isset($heading))
            <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-bold text-gray-800">{{ $heading }}</h1>
            </div>
        @endif
        
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t-4 border-rose mt-16">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-rose to-pink rounded-full flex items-center justify-center">
                            <i class="fas fa-briefcase text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold bg-gradient-to-r from-rose to-mauve bg-clip-text text-transparent">JobBloom</span>
                    </div>
                    <p class="text-gray-600 max-w-md">Find your dream job in a blooming career. We connect talented individuals with amazing opportunities.</p>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/jobs" class="text-gray-600 hover:text-mauve transition-colors">Browse Jobs</a></li>
                        <li><a href="/jobs/create" class="text-gray-600 hover:text-mauve transition-colors">Post a Job</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">Connect</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-rose transition-colors">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-rose transition-colors">
                            <i class="fab fa-linkedin text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-rose transition-colors">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-200 text-center">
                <p class="text-gray-500 text-sm">&copy; 2024 JobBloom. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
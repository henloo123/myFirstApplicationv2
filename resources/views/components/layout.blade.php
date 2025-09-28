<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board - @yield('title', 'Find Your Dream Job')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-xl font-bold text-gray-800 hover:text-gray-900 transition-colors">JobBoard</a>
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/jobs" 
                           class="{{ request()->is('jobs') || request()->is('jobs/*') ? 'bg-gray-100 text-gray-900 border-b-2 border-indigo-600' : 'text-gray-600 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium transition-colors">
                            All Jobs
                        </a>
                    </div>
                </div>
                {{-- Removed the entire Post a Job button section --}}
            </div>
        </div>
    </nav>

    <main>
        @if(isset($heading))
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">{{ $heading }}</h1>
            </div>
        @endif
        
        {{ $slot }}
    </main>
</body>
</html>
<x-layout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blush via-white to-lavender py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-5xl md:text-7xl font-bold text-gray-900 mb-6">
                    Find Your
                    <span class="bg-gradient-to-r from-rose to-mauve bg-clip-text text-transparent">Dream Job</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                    Discover amazing career opportunities and take the next step in your professional journey. Your perfect job is waiting to bloom.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/jobs" 
                       class="bg-gradient-to-r from-rose to-pink text-white px-8 py-4 rounded-full hover:from-pink hover:to-mauve transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 font-semibold text-lg flex items-center justify-center space-x-2">
                        <i class="fas fa-search"></i>
                        <span>Browse Jobs</span>
                    </a>
                    <a href="/jobs/create" 
                       class="border-2 border-rose text-rose px-8 py-4 rounded-full hover:bg-rose hover:text-white transition-all duration-300 font-semibold text-lg flex items-center justify-center space-x-2">
                        <i class="fas fa-plus"></i>
                        <span>Post a Job</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-6 h-6 bg-rose rounded-full opacity-20 animate-bounce"></div>
        <div class="absolute top-20 right-20 w-4 h-4 bg-pink rounded-full opacity-30 animate-pulse"></div>
        <div class="absolute bottom-16 left-1/4 w-8 h-8 bg-lavender rounded-full opacity-40 animate-bounce delay-75"></div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose JobBloom?</h2>
                <p class="text-gray-600 text-lg">We make job hunting and hiring beautiful and simple</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-2xl hover:bg-blush transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-rose to-pink rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Curated Opportunities</h3>
                    <p class="text-gray-600">Hand-picked jobs from companies that value talent and diversity.</p>
                </div>
                
                <div class="text-center p-6 rounded-2xl hover:bg-blush transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-lavender to-lilac rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bolt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Quick & Easy</h3>
                    <p class="text-gray-600">Simple application process and instant job posting for employers.</p>
                </div>
                
                <div class="text-center p-6 rounded-2xl hover:bg-blush transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-pink to-mauve rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Community Focused</h3>
                    <p class="text-gray-600">Join a growing community of professionals and innovative companies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gradient-to-r from-rose to-pink text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl md:text-4xl font-bold mb-2">500+</div>
                    <div class="text-rose-100">Jobs Posted</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold mb-2">200+</div>
                    <div class="text-rose-100">Companies</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold mb-2">95%</div>
                    <div class="text-rose-100">Success Rate</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold mb-2">24/7</div>
                    <div class="text-rose-100">Support</div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
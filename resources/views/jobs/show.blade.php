<x-layout>
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Job Header -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-6">
            <div class="flex justify-between items-start mb-6">
                <div class="flex-1">
                    <div class="flex items-center space-x-3 mb-4">
                        <h1 class="text-3xl font-bold text-gray-900">{{ $job->title }}</h1>
                        @if($job->created_at->gt(now()->subDays(3)))
                            <span class="inline-flex items-center space-x-1 bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full font-medium">
                                <i class="fas fa-sparkle text-xs"></i>
                                <span>New</span>
                            </span>
                        @endif
                    </div>
                    
                    <div class="flex flex-wrap gap-3 mb-4">
                        <span class="inline-flex items-center space-x-2 bg-blue-50 text-blue-700 px-4 py-2 rounded-full">
                            <i class="fas fa-building text-sm"></i>
                            <span class="font-medium">{{ $job->employer->name }}</span>
                        </span>
                        <span class="inline-flex items-center space-x-2 bg-green-50 text-green-700 px-4 py-2 rounded-full">
                            <i class="fas fa-dollar-sign text-sm"></i>
                            <span class="font-medium">{{ $job->salary }}</span>
                        </span>
                        <span class="inline-flex items-center space-x-2 bg-purple-50 text-purple-700 px-4 py-2 rounded-full">
                            <i class="fas fa-clock text-sm"></i>
                            <span class="font-medium">Posted {{ $job->created_at->diffForHumans() }}</span>
                        </span>
                    </div>
                </div>
                
                <div class="flex space-x-3 ml-6">
                    <a href="/jobs/{{ $job->id }}/edit" 
                       class="bg-gradient-to-r from-rose to-pink text-white px-6 py-3 rounded-xl hover:from-pink hover:to-mauve transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 font-medium flex items-center space-x-2">
                        <i class="fas fa-edit"></i>
                        <span>Edit Job</span>
                    </a>
                    <a href="/jobs" 
                       class="px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 transition-all duration-200 font-medium flex items-center space-x-2">
                        <i class="fas fa-arrow-left"></i>
                        <span>Back</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Job Description -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <div class="flex items-center space-x-3 mb-6">
                <div class="w-12 h-12 bg-gradient-to-r from-rose to-pink rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-white text-lg"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900">Job Description</h2>
            </div>
            
            <div class="prose prose-lg max-w-none">
                <div class="text-gray-700 whitespace-pre-wrap leading-relaxed text-lg">
                    {{ $job->description }}
                </div>
            </div>
        </div>

        <!-- Action Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <div class="bg-gradient-to-br from-lavender to-lilac rounded-2xl p-6 text-white">
                <div class="flex items-center space-x-3 mb-3">
                    <i class="fas fa-share-alt text-2xl"></i>
                    <h3 class="text-xl font-semibold">Share This Job</h3>
                </div>
                <p class="text-lavender-100 mb-4">Know someone perfect for this role? Share it with your network!</p>
                <button class="bg-white text-lilac px-4 py-2 rounded-xl font-medium hover:bg-opacity-90 transition-all">
                    <i class="fas fa-share mr-2"></i>Share
                </button>
            </div>
            
            <div class="bg-gradient-to-br from-rose to-pink rounded-2xl p-6 text-white">
                <div class="flex items-center space-x-3 mb-3">
                    <i class="fas fa-question-circle text-2xl"></i>
                    <h3 class="text-xl font-semibold">Have Questions?</h3>
                </div>
                <p class="text-rose-100 mb-4">Interested in this position? Reach out to the employer for more details.</p>
                <button class="bg-white text-rose px-4 py-2 rounded-xl font-medium hover:bg-opacity-90 transition-all">
                    <i class="fas fa-envelope mr-2"></i>Contact
                </button>
            </div>
        </div>
    </div>
</x-layout>
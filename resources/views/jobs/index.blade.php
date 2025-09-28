<x-layout>
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-4xl font-bold text-gray-900 mb-2">Available Jobs</h1>
                <p class="text-gray-600">Find your next career opportunity</p>
            </div>
            <a href="/jobs/create" 
               class="bg-gradient-to-r from-rose to-pink text-white px-6 py-3 rounded-full hover:from-pink hover:to-mauve transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center space-x-2">
                <i class="fas fa-plus"></i>
                <span>Post a Job</span>
            </a>
        </div>

        <div class="mb-6 p-4 bg-white rounded-2xl shadow-sm border border-rose/10">
            <div class="flex flex-col sm:flex-row justify-between items-center space-y-2 sm:space-y-0">
                <div class="text-gray-600">
                    Showing <span class="font-semibold text-mauve">{{ $jobs->firstItem() }} - {{ $jobs->lastItem() }}</span> 
                    of <span class="font-semibold text-mauve">{{ $jobs->total() }}</span> jobs
                </div>
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <i class="fas fa-info-circle text-rose"></i>
                    <span>Sorted by latest</span>
                </div>
            </div>
        </div>
        
        <div class="space-y-6">
            @foreach ($jobs as $job)
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-rose/20 p-6 group">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <div class="flex items-center space-x-3 mb-3">
                                <h2 class="text-xl font-semibold text-gray-800 group-hover:text-mauve transition-colors">
                                    <a href="/jobs/{{ $job->id }}" class="hover:underline">
                                        {{ $job->title }}
                                    </a>
                                </h2>
                                @if($job->created_at->gt(now()->subDays(3)))
                                    <span class="inline-block bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full font-medium">
                                        <i class="fas fa-sparkle mr-1"></i>New
                                    </span>
                                @endif
                            </div>
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ Str::limit($job->description, 120) }}</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center space-x-1 bg-blue-50 text-blue-700 text-sm px-3 py-1 rounded-full">
                                    <i class="fas fa-dollar-sign text-xs"></i>
                                    <span>{{ $job->salary }}</span>
                                </span>
                                <span class="inline-flex items-center space-x-1 bg-green-50 text-green-700 text-sm px-3 py-1 rounded-full">
                                    <i class="fas fa-building text-xs"></i>
                                    <span>{{ $job->employer->name }}</span>
                                </span>
                                <span class="inline-flex items-center space-x-1 bg-purple-50 text-purple-700 text-sm px-3 py-1 rounded-full">
                                    <i class="fas fa-clock text-xs"></i>
                                    <span>{{ $job->created_at->diffForHumans() }}</span>
                                </span>
                            </div>
                        </div>
                        <div class="ml-6 flex flex-col space-y-3 items-end">
                            <a href="/jobs/{{ $job->id }}/edit" 
                               class="text-rose hover:text-mauve transition-colors flex items-center space-x-1 text-sm font-medium">
                                <i class="fas fa-edit"></i>
                                <span>Edit</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <div class="bg-white rounded-2xl shadow-sm p-4">
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
</x-layout>
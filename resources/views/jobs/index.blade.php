<x-layout>
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Available Jobs</h1>
            <a href="/jobs/create" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                Post a New Job
            </a>
        </div>

        <div class="mb-4 text-gray-600">
            Showing {{ $jobs->firstItem() }} to {{ $jobs->lastItem() }} of {{ $jobs->total() }} jobs
        </div>
        
        <div class="space-y-6">
            @foreach ($jobs as $job)
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <h2 class="text-xl font-semibold text-gray-800">
                                    <a href="/jobs/{{ $job->id }}" class="hover:text-indigo-600">
                                        {{ $job->title }}
                                    </a>
                                </h2>
                                @if($job->created_at->gt(now()->subDays(3)))
                                    <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-medium">
                                        New
                                    </span>
                                @endif
                            </div>
                            <p class="text-gray-600 mt-2 line-clamp-2">{{ $job->description }}</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="inline-block bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">
                                    Salary: {{ $job->salary }}
                                </span>
                                <span class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full">
                                    {{ $job->employer->name }}
                                </span>
                            </div>
                        </div>
                        <div class="ml-4 flex flex-col space-y-2 items-end">
                            <a href="/jobs/{{ $job->id }}/edit" 
                               class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                                Edit
                            </a>
                            <span class="text-gray-500 text-sm">
                                {{ $job->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
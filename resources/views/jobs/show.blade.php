<x-layout>
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex justify-between items-start">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">{{ $job->title }}</h1>
                        <p class="text-gray-600 mt-2">Posted by {{ $job->employer->name }}</p>
                    </div>
                    <div class="flex space-x-4">
                        <a href="/jobs/{{ $job->id }}/edit" 
                           class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                            Edit Job
                        </a>
                        <a href="/jobs" 
                           class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition">
                            Back to Jobs
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="px-6 py-4">
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Salary</h2>
                    <p class="text-gray-700">{{ $job->salary }}</p>
                </div>
                
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Job Description</h2>
                    <p class="text-gray-700 whitespace-pre-wrap">{{ $job->description }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
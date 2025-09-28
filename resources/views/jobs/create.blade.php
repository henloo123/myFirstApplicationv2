<x-layout>
    <div class="max-w-2xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Create a New Job Listing</h1>

        <form method="POST" action="/jobs" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                <div class="mt-1">
                    <input type="text" name="title" id="title" 
                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border"
                           placeholder="e.g. Senior Web Developer"
                           value="{{ old('title') }}"
                           required>
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                <div class="mt-1">
                    <input type="text" name="salary" id="salary" 
                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border"
                           placeholder="e.g. $80,000 per year"
                           value="{{ old('salary') }}"
                           required>
                    @error('salary')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Job Description</label>
                <div class="mt-1">
                    <textarea name="description" id="description" rows="4"
                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border"
                              placeholder="Describe the job responsibilities and requirements..."
                              required>{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end space-x-4">
                <a href="/jobs" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition">Cancel</a>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">Create Job</button>
            </div>
        </form>
    </div>
</x-layout>
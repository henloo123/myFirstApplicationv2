<x-layout>
    <div class="max-w-2xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Edit Job Listing</h1>

        <!-- Edit Form -->
        <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-6">
            @csrf
            @method('PATCH')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                <div class="mt-1">
                    <input type="text" name="title" id="title" 
                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border"
                           value="{{ old('title', $job->title) }}"
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
                           value="{{ old('salary', $job->salary) }}"
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
                              required>{{ old('description', $job->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                    Update Job
                </button>
                
                <!-- Delete Button that triggers modal -->
                <button type="button" 
                        onclick="openModal()" 
                        class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">
                    Delete Job
                </button>
            </div>
        </form>

        <!-- Confirmation Modal -->
        <div id="confirmationModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
            <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                <div class="mt-3 text-center">
                    <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100">
                        <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900 mt-2">Delete Job</h3>
                    <div class="mt-2 px-7 py-3">
                        <p class="text-sm text-gray-500">
                            Are you sure you want to delete "{{ $job->title }}"? This action cannot be undone.
                        </p>
                    </div>
                    <div class="flex justify-center space-x-4 mt-4">
                        <button onclick="closeModal()" 
                                class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition">
                            Cancel
                        </button>
                        <button onclick="deleteJob()" 
                                class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition">
                            Yes, Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hidden Delete Form -->
        <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
            @csrf
            @method('DELETE')
        </form>

        <!-- JavaScript for Modal -->
        <script>
            function openModal() {
                document.getElementById('confirmationModal').classList.remove('hidden');
            }

            function closeModal() {
                document.getElementById('confirmationModal').classList.add('hidden');
            }

            function deleteJob() {
                document.getElementById('delete-form').submit();
            }

            // Close modal when clicking outside
            window.onclick = function(event) {
                const modal = document.getElementById('confirmationModal');
                if (event.target === modal) {
                    closeModal();
                }
            }
        </script>
    </div>
</x-layout>
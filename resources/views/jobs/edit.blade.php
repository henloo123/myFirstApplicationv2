<x-layout>
    <div class="max-w-2xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-gradient-to-r from-rose to-pink rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-edit text-white text-2xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Edit Job Listing</h1>
            <p class="text-gray-600 mt-2">Update your job details</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <form method="POST" action="/jobs/{{ $job->id }}">
                @csrf
                @method('PATCH')

                <div class="space-y-6">
                    <!-- Job Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2 flex items-center space-x-2">
                            <i class="fas fa-heading text-rose text-sm"></i>
                            <span>Job Title</span>
                        </label>
                        <div class="mt-1">
                            <input type="text" name="title" id="title" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-rose focus:border-rose transition-all duration-200"
                                   value="{{ old('title', $job->title) }}"
                                   required>
                            @error('title')
                                <p class="text-red-500 text-xs mt-2 flex items-center space-x-1">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <span>{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                    </div>

                    <!-- Salary -->
                    <div>
                        <label for="salary" class="block text-sm font-medium text-gray-700 mb-2 flex items-center space-x-2">
                            <i class="fas fa-dollar-sign text-rose text-sm"></i>
                            <span>Salary</span>
                        </label>
                        <div class="mt-1">
                            <input type="text" name="salary" id="salary" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-rose focus:border-rose transition-all duration-200"
                                   value="{{ old('salary', $job->salary) }}"
                                   required>
                            @error('salary')
                                <p class="text-red-500 text-xs mt-2 flex items-center space-x-1">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <span>{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2 flex items-center space-x-2">
                            <i class="fas fa-align-left text-rose text-sm"></i>
                            <span>Job Description</span>
                        </label>
                        <div class="mt-1">
                            <textarea name="description" id="description" rows="6"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-rose focus:border-rose transition-all duration-200 resize-none"
                                      required>{{ old('description', $job->description) }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-xs mt-2 flex items-center space-x-1">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <span>{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-between items-center pt-6">
                        <button type="button" 
                                onclick="confirmDelete()" 
                                class="bg-red-500 text-white px-6 py-3 rounded-xl hover:bg-red-600 transition-all duration-200 shadow-lg hover:shadow-xl font-medium flex items-center space-x-2">
                            <i class="fas fa-trash"></i>
                            <span>Delete Job</span>
                        </button>
                        
                        <div class="flex space-x-4">
                            <a href="/jobs/{{ $job->id }}" 
                               class="px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 transition-all duration-200 font-medium flex items-center space-x-2">
                                <i class="fas fa-times"></i>
                                <span>Cancel</span>
                            </a>
                            <button type="submit" 
                                    class="bg-gradient-to-r from-rose to-pink text-white px-6 py-3 rounded-xl hover:from-pink hover:to-mauve transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 font-medium flex items-center space-x-2">
                                <i class="fas fa-save"></i>
                                <span>Update Job</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Hidden Delete Form -->
            <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>

    <!-- JavaScript for Confirmation -->
    <script>
        function confirmDelete() {
            if (confirm('Are you sure you want to delete "{{ $job->title }}"? This action cannot be undone.')) {
                document.getElementById('delete-form').submit();
            }
        }
    </script>
</x-layout>
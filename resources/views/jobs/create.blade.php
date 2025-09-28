<x-layout>
    <div class="max-w-2xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-gradient-to-r from-rose to-pink rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-plus text-white text-2xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Create a New Job</h1>
            <p class="text-gray-600 mt-2">Share your amazing opportunity with the world</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <form method="POST" action="/jobs" class="space-y-6">
                @csrf

                <!-- Job Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2 flex items-center space-x-2">
                        <i class="fas fa-heading text-rose text-sm"></i>
                        <span>Job Title</span>
                    </label>
                    <div class="mt-1">
                        <input type="text" name="title" id="title" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-rose focus:border-rose transition-all duration-200 placeholder-gray-400"
                               placeholder="e.g. Senior Web Developer"
                               value="{{ old('title') }}"
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
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-rose focus:border-rose transition-all duration-200 placeholder-gray-400"
                               placeholder="e.g. $80,000 per year"
                               value="{{ old('salary') }}"
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
                                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-rose focus:border-rose transition-all duration-200 placeholder-gray-400 resize-none"
                                  placeholder="Describe the job responsibilities, requirements, and what makes your company special..."
                                  required>{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-2 flex items-center space-x-1">
                                <i class="fas fa-exclamation-circle"></i>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end space-x-4 pt-6">
                    <a href="/jobs" 
                       class="px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 transition-all duration-200 font-medium flex items-center space-x-2">
                        <i class="fas fa-arrow-left"></i>
                        <span>Back to Jobs</span>
                    </a>
                    <button type="submit" 
                            class="bg-gradient-to-r from-rose to-pink text-white px-6 py-3 rounded-xl hover:from-pink hover:to-mauve transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 font-medium flex items-center space-x-2">
                        <i class="fas fa-sparkle"></i>
                        <span>Create Job</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Tips -->
        <div class="mt-8 bg-lavender/30 rounded-2xl p-6 border border-lavender">
            <div class="flex items-start space-x-3">
                <i class="fas fa-lightbulb text-rose mt-1"></i>
                <div>
                    <h3 class="font-semibold text-gray-900 mb-2">Tips for a Great Job Post</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Be clear and specific about responsibilities</li>
                        <li>• Highlight your company culture and benefits</li>
                        <li>• Include required skills and qualifications</li>
                        <li>• Mention remote work options if available</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layout>
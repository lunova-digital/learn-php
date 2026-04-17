   <div class="max-w-3xl mx-auto bg-white shadow-sm rounded-xl border border-gray-200">
        <!-- Header -->
        <div class="px-6 py-5 border-b border-gray-200">
            <h2 class="text-lg font-bold text-gray-800">Faculty Details</h2>
            <p class="text-sm text-gray-500 mt-1">Manage teacher profile and subject assignments.</p>
        </div>

        <!-- Form -->
        <form class="p-6 space-y-6">
            
            <!-- Grid Layout for ID and Name -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Teacher ID -->
                <div>
                    <label for="teacherId" class="block text-sm font-medium text-gray-700 mb-1">Teacher ID</label>
                    <input type="text" id="teacherId" value="TCH-004" readonly 
                        class="w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-lg text-sm text-gray-500 focus:outline-none cursor-not-allowed">
                    <p class="text-xs text-gray-400 mt-1">Auto-generated</p>
                </div>

                <!-- Full Name -->
                <div>
                    <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                    <input type="text" id="fullName" placeholder="e.g. Dr. Jane Smith" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-shadow">
                </div>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Official Email <span class="text-red-500">*</span></label>
                <input type="email" id="email" placeholder="e.g. jane.s@school.edu" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-shadow">
            </div>

            <!-- Grid Layout for Subject and Status -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Subject -->
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Primary Subject <span class="text-red-500">*</span></label>
                    <select id="subject" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-shadow bg-white">
                        <option value="" disabled selected>Select Subject</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Physics">Physics</option>
                        <option value="English">English</option>
                        <option value="History">History</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Biology">Biology</option>
                    </select>
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Employment Status</label>
                    <select id="status"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-shadow bg-white">
                        <option value="Active">Active</option>
                        <option value="On Leave">On Leave</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
            </div>

            <!-- Phone Number (Extra useful field for teachers) -->
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <input type="tel" id="phone" placeholder="+1 (555) 000-0000"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-shadow">
            </div>

        </form>

        <!-- Footer Actions -->
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-end gap-3 rounded-b-xl">
            <button type="button" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition shadow-sm">
                Cancel
            </button>
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition shadow-sm">
                Save Faculty
            </button>
        </div>
    </div>

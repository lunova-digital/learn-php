          <!-- TEACHER TABLE SECTION -->
          <div class="bg-white shadow-sm rounded-xl border border-gray-200">
            <div class="px-6 py-5 border-b border-gray-200 flex flex-col sm:flex-row justify-between sm:items-center gap-4">
              <div>
                <h2 class="text-lg font-bold text-gray-800">Teachers List</h2>
                <p class="text-sm text-gray-500 mt-1">Manage faculty members and assignments.</p>
              </div>
              <div class="flex gap-2">
                 <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition">Filter</button>
                 <a href="add_teacher.php"><button class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition shadow-sm">+ Add Teacher</button></a>
              </div>
            </div>
            
            <div class="overflow-x-auto">
              <table class="w-full text-left border-collapse">
                <thead class="bg-gray-50">
                  <tr>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Full Name</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Subject</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider text-right">Actions</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                  <!-- Row 1 -->
                  <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">TCH-001</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Dr. Emily Carter</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">emily.c@school.edu</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mathematics</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2.5 py-0.5 text-xs font-semibold rounded-full bg-green-100 text-green-700">Active</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-right space-x-3">
                      <button class="text-indigo-600 hover:text-indigo-900 font-medium">Edit</button>
                      <button class="text-red-600 hover:text-red-900 font-medium">Delete</button>
                    </td>
                  </tr>
                  <!-- Row 2 -->
                  <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">TCH-002</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Prof. James Wilson</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">james.w@school.edu</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Physics</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2.5 py-0.5 text-xs font-semibold rounded-full bg-green-100 text-green-700">Active</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-right space-x-3">
                      <button class="text-indigo-600 hover:text-indigo-900 font-medium">Edit</button>
                      <button class="text-red-600 hover:text-red-900 font-medium">Delete</button>
                    </td>
                  </tr>
                  <!-- Row 3 -->
                  <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">TCH-003</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Sarah Thompson</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">sarah.t@school.edu</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">English</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2.5 py-0.5 text-xs font-semibold rounded-full bg-red-100 text-red-700">On Leave</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-right space-x-3">
                      <button class="text-indigo-600 hover:text-indigo-900 font-medium">Edit</button>
                      <button class="text-red-600 hover:text-red-900 font-medium">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
             <!-- Pagination Footer -->
             <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 flex items-center justify-between">
              <span class="text-sm text-gray-500">Showing <span class="font-medium text-gray-900">1</span> to <span class="font-medium text-gray-900">3</span> of <span class="font-medium text-gray-900">3</span> results</span>
              <div class="flex gap-1">
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-500 hover:bg-gray-50 disabled:opacity-50" disabled>Prev</button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-500 hover:bg-gray-50 disabled:opacity-50" disabled>Next</button>
              </div>
            </div>
          </div>

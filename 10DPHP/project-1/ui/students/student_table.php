<?php

$sql = 'SELECT * FROM students';
$result = $conn->query($sql);
$students = $result->fetchAll(PDO::FETCH_ASSOC);

?>
          <!-- STUDENT TABLE SECTION -->
          <div class="bg-white shadow-sm rounded-xl border border-gray-200">
            <div class="px-6 py-5 border-b border-gray-200 flex flex-col sm:flex-row justify-between sm:items-center gap-4">
              <div>
                <h2 class="text-lg font-bold text-gray-800">Students List</h2>
                <p class="text-sm text-gray-500 mt-1">Manage student enrollments and status.</p>
              </div>
              <div class="flex gap-2">
                 <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition">Filter</button>
                 <a href="add_student.php"><button class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition shadow-sm">+ Add Student</button></a>
              </div>
            </div>
            
            <div class="overflow-x-auto">
              <table class="w-full text-left border-collapse">
                <thead class="bg-gray-50">
                  <tr>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Full Name</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Class</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider text-right">Actions</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
          <?php foreach ($students as $student) { ?>
                  <!-- Row 1 -->
                  <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium"><?= $student['student_id'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?= $student['full_name'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $student['email'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $student['class_grade'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2.5 py-0.5 text-xs font-semibold rounded-full bg-green-100 text-green-700"><?= $student['enrollment_status'] ?></span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-right space-x-3">
                      <a href="edit_student.php?id=<?= $student['student_id']?>"><button class="text-indigo-600 hover:text-indigo-900 font-medium">Edit</button></a>
                      <a href="delete.php?id=<?= $student['student_id'] ?>"><button class="text-red-600 hover:text-red-900 font-medium">Delete</button> </a>
                    </td>
                  </tr>
          <?php } ?>
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

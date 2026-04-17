<?php
$id = $_GET['id'] ?? null;

$sql = 'SELECT * FROM students WHERE student_id = ?';
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);

?>
    <div class="max-w-3xl mx-auto bg-white shadow-sm rounded-xl border border-gray-200">
        <!-- Header -->
        <div class="px-6 py-5 border-b border-gray-200">
            <h2 class="text-lg font-bold text-gray-800">Student Details</h2>
            <p class="text-sm text-gray-500 mt-1">Enter or update student enrollment information.</p>
        </div>

        <!-- Form -->
        <form class="p-6 space-y-6" action="backend/students/edit.php" method="POST">
            
            <!-- Grid Layout for Name and ID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Student ID (Read Only usually, but included for completeness) -->
                <div>
                    <label for="studentId" class="block text-sm font-medium text-gray-700 mb-1">Student ID</label>
                    <input type="text" value="<?= $student['student_id'] ?>" name="student_id" readonly
                        class="w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-lg text-sm text-gray-500 focus:outline-none cursor-not-allowed">
                </div>

                <!-- Full Name -->
                <div>
                    <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                    <input type="text" id="fullName" name="full_name" placeholder="e.g. John Doe" required value="<?= $student['full_name'] ?>"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-shadow">
                </div>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                <input type="email" id="email" placeholder="e.g. john.d@school.edu" required name="email"
                    value="<?= $student['email']?>"                   class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-shadow">
            </div>

            <!-- Grid Layout for Class and Status -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
               <div>
                    <label for="classGrade" class="block text-sm font-medium text-gray-700 mb-1">Class / Grade <span class="text-red-500">*</span></label>
                    <select id="classGrade" required name="class_grade"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-shadow bg-white">
                        
                        <option value="" disabled <?= empty($student['class_grade']) ? 'selected' : '' ?>>Select Grade</option>
                        <option value="Grade 9" <?= ($student['class_grade'] ?? '') == 'Grade 9' ? 'selected' : '' ?>>Grade 9</option>
                        <option value="Grade 10" <?= ($student['class_grade'] ?? '') == 'Grade 10' ? 'selected' : '' ?>>Grade 10</option>
                        <option value="Grade 11" <?= ($student['class_grade'] ?? '') == 'Grade 11' ? 'selected' : '' ?>>Grade 11</option>
                        <option value="Grade 12" <?= ($student['class_grade'] ?? '') == 'Grade 12' ? 'selected' : '' ?>>Grade 12</option>
                    </select>
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Enrollment Status</label>
                    <select id="status" name="enrollment_status"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-shadow bg-white">
                        
                        <option value="Active" <?= ($student['enrollment_status'] ?? 'Active') == 'Active' ? 'selected' : '' ?>>Active</option>
                        <option value="Pending" <?= ($student['enrollment_status'] ?? '') == 'Pending' ? 'selected' : '' ?>>Pending</option>
                        <option value="Inactive" <?= ($student['enrollment_status'] ?? '') == 'Inactive' ? 'selected' : '' ?>>Inactive</option>
                    </select>
                </div>
            </div>

            <!-- Additional Notes (Optional) -->
            <div>
                <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Additional Notes</label>
                <textarea id="notes" rows="3" name="additional_notes"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-shadow"
                    placeholder="Any specific requirements or notes..."><?= $student['additional_notes'] ?></textarea>
            </div>

        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-end gap-3 rounded-b-xl">
            <button type="button" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition shadow-sm">
                Cancel
            </button>
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition shadow-sm">
                Save Student
            </button>
        </div>
        </form>

        <!-- Footer Actions -->
    </div>

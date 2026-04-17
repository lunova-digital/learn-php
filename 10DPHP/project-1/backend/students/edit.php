<?php

require_once __DIR__.'/../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id']; // Generate a random 6-digit student ID
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $class_grade = $_POST['class_grade'];
    $enrollment_status = $_POST['enrollment_status'];
    $additional_notes = $_POST['additional_notes'];

    $sql = "SELECT * FROM students WHERE student_id='$student_id'";
    $result = $conn->query($sql);

    if (! $result->rowCount() > 0) {
        echo '<script>
                alert("The data is not exist. Please insert data first.");
                window.location.href = "../../students.php";
              </script>';
        exit();
    }

    $update_sql = "UPDATE students SET 
                    full_name='$full_name', 
                    email='$email', 
                    class_grade='$class_grade', 
                    enrollment_status='$enrollment_status', 
                    additional_notes='$additional_notes' 
                   WHERE student_id='$student_id'";

    $update_result = $conn->query($update_sql);

    if ($update_result->rowCount() > 0) {
        echo '<script>
                alert("Student updated successfully!");
        window.location.href = "../../students.php";
              </script>';
        exit();
    } else {
        echo 'Error: '.$conn->error;
    }
}

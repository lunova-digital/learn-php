<?php

require_once __DIR__.'/../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = rand(100000, 999999); // Generate a random 6-digit student ID
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $class_grade = $_POST['class_grade'];
    $enrollment_status = $_POST['enrollment_status'];
    $additional_notes = $_POST['additional_notes'];

    $sql = "SELECT * FROM students WHERE student_id='$student_id' OR email='$email'";
    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        echo '<script>
                alert("Student ID or email already exists. Please use a unique ID.");
                window.location.href = "../../add_student.php";
              </script>';
        exit();
    }

    $sql = "INSERT INTO students 
    (student_id, full_name, email, class_grade, enrollment_status, additional_notes) 
    VALUES 
    ('$student_id', '$full_name', '$email', '$class_grade', '$enrollment_status', '$additional_notes')";

    $result = $conn->query($sql);

    if ($result) {
        echo '<script>
                alert("Student added successfully!");
                window.location.href = "../../add_student.php";
              </script>';
        exit();
    } else {
        echo 'Error: '.$conn->error;
    }
}

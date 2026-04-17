<?php

require_once __DIR__.'/backend/connection.php';

$id = $_GET['id'];

if (! isset($id)) {
    header('Location: students.php');
    exit;
}

$sql = "DELETE FROM students WHERE student_id = $id";

$result = $conn->query($sql);

if ($result) {
    echo '<script>
            alert("Delete Successfully!");
            window.location.href = "../../students.php";
          </script>';
    exit;
} else {
    echo 'Error deleting record: '.$conn->error;
}

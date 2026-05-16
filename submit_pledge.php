<?php
$conn = new mysqli("localhost", "root", "", "plv_sexed_hub");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$student_number = $_POST['student_number'] ?? '';
$concern = $_POST['concern'] ?? '';

if ($student_number == '') {
    die("Student number is required");
}

$stmt = $conn->prepare("INSERT INTO pledges (student_number, concern) VALUES (?, ?)");
$stmt->bind_param("ss", $student_number, $concern);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conn->close();
?>

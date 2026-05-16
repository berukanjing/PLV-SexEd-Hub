<?php
$conn = new mysqli("localhost", "root", "", "plv_sexed_hub");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pledges ORDER BY created_at DESC";
$result = $conn->query($sql);

$pledges = array();

while($row = $result->fetch_assoc()) {
    $pledges[] = $row;
}

header('Content-Type: application/json');
echo json_encode($pledges);

$conn->close();
?>

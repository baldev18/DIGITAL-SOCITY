<?php
include 'connect.php';

$name = $_POST['name'] ?? '';

if (empty($name)) {
    echo "ID is required.";
    exit;
}

$sql = "DELETE FROM users WHERE name='$name'";
mysqli_query($con, $sql);
mysqli_close($con);

echo "Record deleted successfully";
?>
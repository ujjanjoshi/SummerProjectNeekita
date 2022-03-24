<?php
$sql = "CREATE DATABASE TutionManagementSystem";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: ";
}

$conn->close();
?>
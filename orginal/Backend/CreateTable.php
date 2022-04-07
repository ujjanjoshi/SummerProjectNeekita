<?php
$sql = "CREATE TABLE Login (
    L_id INT(1) AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(30) NOT NULL,
    Password VARCHAR(30) NOT NULL)";
if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating database: ";
}

$conn->close();
?>
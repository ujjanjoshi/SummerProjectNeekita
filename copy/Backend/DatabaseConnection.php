<?php
$conn = new mysqli("localhost", "root", "","TutionManagementSystem");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
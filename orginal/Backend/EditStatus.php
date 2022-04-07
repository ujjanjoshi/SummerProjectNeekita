<?php
$id=$_GET['id'];
echo($id);
include'../Backend/DatabaseConnection.php';
$sql = "Update studentfeesection set Status='Paid' where Sid=$id";
if ($conn->query($sql) === TRUE) {
    echo"<script>
    window.location='../html/FeeSection.php';
    </script>";
}  
?>
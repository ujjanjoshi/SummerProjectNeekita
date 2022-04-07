<?php
$id=$_GET['id'];
$status=$_GET['status'];
$dates=date("Y/m/d");
include'../Backend/DatabaseConnection.php';
$sql = "SELECT * from studentdetails where Sid=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id=$row['Sid'];
                $name=$row['Name'];
            }} echo($id);
            echo($name);
            $sql = "INSERT INTO studentattendance(Sid,Name,Date,Status) VALUES ('$id','$name','$dates','$status');";
        if ($conn->query($sql) === TRUE) {
            echo"<script>
            window.location='../html/Attendance.php';
            </script>";}
?>
<?php
$id=$_GET['id'];
echo($id);
$dates=date("Y/m/d");
include'../Backend/DatabaseConnection.php';
$sql = "SELECT * from tutordetails where TId=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id=$row['TId'];
                $name=$row['Name'];
           
            }} echo($id);
            echo($name);
            $sql = "INSERT INTO tutorfeesection(Tid,Name,Date,Status,Price) VALUES ('$id','$name','$dates','Paid','2000');";
        if ($conn->query($sql) === TRUE) {
            echo"<script>
            alert('Payment Sucessful');
            window.location='../html/SalarySection.php';
            </script>";}

?>
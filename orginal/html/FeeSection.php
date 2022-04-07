<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Main.css">
    <!-- <link rel="stylesheet" href="../CSS/SalarySection.css">    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="../CSS/StudentDetails.css">   
    <script>
        $(document).ready(function() {
             $('#example').DataTable();
        } );
    </script>
    <title>Document</title>
    <title>Document</title>
</head>
<body>
<?php include 'Nav.php';?>
    <div class="bg">
    </div>
    <div class="top">
        <span>Fee Section:</span>
    </div>
    <div class="tb">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
            <th>Fid</th> 
            <th>Sid</th>
            <th>Name</th>
            <th>Enrolleddate</th>
            <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php include'../Backend/DatabaseConnection.php';
            $sql = "SELECT * from studentfeesection";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id=$row['Sid'];
            echo("
                <tr>
                    <td>".$row['Fid']."</td>
                    <td>".$row['Sid']."</td>
                    <td>".$row['Name']."</td>
                    <td>".$row['EnrolledDate']."</td>");
                    if($row['Status']=="Unpaid"){
                    echo("
                    <td><input type='submit' style='background-color: red;' value=".$row['Status']." onclick=window.location='../Backend/EditStatus.php?id=$id'></td>
                    ");
                }else{
                    echo("
                    <td><input type='submit' style='background-color: Green;' value=".$row['Status']." onclick=window.location='../Backend/EditStatus.php?id=$id'></td>
                    ");
                }
                echo("</tr>
                ");
  }}  
    ?>
        </tbody>
    </table>
</div>
</body>
</html>
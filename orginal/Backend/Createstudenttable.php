<html>
<head>
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
</head>
<?php include'../Backend/DatabaseConnection.php';
            $sql = "SELECT * from studentdetails";
            $result = $conn->query($sql);
            echo("<table id='example' class='table table-striped' style='width:90%'>");
            if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    //   echo($row["Sid"].$row["Name"].$row["Address"].$row["Gender"].$row["ContactNo"].$row["GuardainsName"].$row["EnrolledDate"].$row["IntrestedCourse"]);
            echo("
            <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>".$row['Sid']."</td>
                    <td>".$row['Name']."</td>
                    <td>".$row['Address']."</td>
                    <td>".$row['Gender']."</td>
                    <td>".$row['ContactNo']."</td>
                    <td>".$row['GuardainsName']."</td>
                    <td>".$row['EnrolledDate']."</td>
                    <td>".$row['IntrestedCourse']."</td>
                </tr>
                </tbody>
                </table>");
  }}  
    ?>
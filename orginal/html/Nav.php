<!-- <?php 
session_start();
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Main.css">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <img src="../Photos/viber_image_2022-03-08_17-05-33-374.jpg" class="logo">
        <ul>
            <li><a href="#"><i class="small material-icons" style=" font-size: 12px; padding-top: 10px;">expand_more</i> Student</a>
            <div class="sub-menu1">
                <ul>
                    <li><a href="../html/StudentDetails.php">Student Details</a></li>
                    <li><a href="../html/FeeSection.php">Fee Section</a></li>
                    <li><a href="../html/Attendance.php">Attendance</a></li>
                    <li><a href="../html/Attendance.php">Routine</a></li>
                
                </ul>
            </div>
            </li>
            <!-- <span class="expand"><i class="small material-icons">expand_more</i></span> -->
            <li><a href=""><i class="small material-icons" style=" font-size: 12px; padding-top: 10px;">expand_more</i> Tutor</a>
                <div class="sub-menu2">
                    <ul>
                        <li><a href="../html/TutorDetails.php">Tutor Details</a></li>
                        <li><a href="../html/SalarySection.php">Salary</a></li>
                        <li><a href="../html/Attendance.php">Routine</a></li>
                    
                    </ul>
                </div>
            </li>
            <span class="setting"><li><a href=""><i class="small material-icons"  style=" font-size: 17px; padding-top: 10px;">settings</i><i class="small material-icons" style=" font-size: 17px; padding-top: 10px;">expand_more</i></a>
                <div class="sub-menu3">
                    <ul>
                        <li><a href="../html/Main.php"><i class="small material-icons"  style=" font-size: 12px;">person</i> <?php  include'../Backend/DatabaseConnection.php';
        $sql = "SELECT * FROM details";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($_SESSION['usrname']==$row["Username"]){
                    $name= $row["Name"];
                }
    }} echo $name;?> (you)</a></li>
                        <hr>
                        <li><a href="../html/Password.php">Change password</a></li>
                        <li><a href="../html/Login.html"><i class="small material-icons"  style=" font-size: 12px;">logout</i> Log Out</a></li>
                    
                    </ul>
                </div>
                </li>
            </li></span>
        </ul>
    </div>
</body>
</html>
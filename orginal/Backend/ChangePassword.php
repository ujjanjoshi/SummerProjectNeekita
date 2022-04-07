<?php
session_start();
$oldpass=$_POST["tutoldpas"];
$newpassword=$_POST["tutnewpas"];
$usr=  $_SESSION["usrname"] ;
$confrompass=$_POST['tutconfrompass'];
// echo($oldpass."".$newpassword."".$confrompass);
include'DatabaseConnection.php';
$sql = "SELECT Username, Password FROM Login where Username='$usr'";
// print($sql);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    // echo "Username: " . $row["Username"]. " - Password: " . $row["Password"]."<br>";
    if($oldpass=="" || $newpassword==""||$confrompass==""){
        echo"<script>
        alert('All field required');
        window.location='../html/Password.php';
        </script>";
    }
    else if($row["Password"]!=$oldpass){
        echo"<script>
    alert('Password not match');
    window.location='../html/Password.php';
    </script>";
    }
    else if($confrompass!=$newpassword){
        echo"<script>
        alert('ConfromPassword and NewPassword not match');
        window.location='../html/Password.php';
        </script>";
    }
    else{
        $sql1 = "UPDATE Login SET Password='$newpassword' WHERE Username='$usr'";
        $conn->query($sql1);
        echo"<script>
        alert('Password Updated Sucessful');
        window.location='../html/Password.php';
        </script>";
    }
    }
} else {
  echo "0 results";
}
?>
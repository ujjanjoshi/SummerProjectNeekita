<?php
session_start();
$choose= $_POST['users'];
$username =$_POST['username'];
$password = $_POST['password'];
include'DatabaseConnection.php';
$sql = "SELECT * FROM login";
$result = $conn->query($sql);
$flag=0;
$flag1=0;
$flag2=0;
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if($choose=="Admin"){
        if($username[0]=="A"){
            if($username==$row["Username"] && $password== $row["Password"]){
                $_SESSION["usrname"] = $username;
                $_SESSION["chose"] = $choose;
                header('Location: ../html/Main.php');
            }
            else{
                $flag=1;
            }
        }
        else{
            $flag1=0;
        }
    } 
    else if($choose=="Tutor"){
        if($username[0]=="T"){
            if($username==$row["Username"] && $password== $row["Password"]){
                $_SESSION["usrname"] = $username;
                $_SESSION["chose"] = $choose;
                header('Location: ../html/Main.php');
            }
            else{
                $flag=1;
            }
        }
        else{
            $flag1=0;
        }
    } 
    else if($choose=="Parents"){
        if($username[0]=="P"){
            if($username==$row["Username"] && $password== $row["Password"]){
                $_SESSION["usrname"] = $username;
                $_SESSION["chose"] = $choose;
                header('Location: ../html/Main.php');
            }
            else{
                $flag=1;
            }
        }
        else{
            $flag1=0;
        }
    }
    else{
        $flag2=0;
    }
  }
  if($flag==1){
    echo"<script>
    alert('Username and Password doesnot match');
    window.location='../html/Login.html';
    </script>";
  }
  if($flag1==0){
    echo"<script>
    alert('Username not match');
    window.location='../html/Login.html';
    </script>";
  }
  if($flag2==0){
    echo"<script>
    alert('Choose Correct User Type');
    window.location='../html/Login.html';
    </script>";
  }
} else {
  echo "0 results";
}
// $a="hello";
// $frst=$a[0];
// echo $frst;
?>
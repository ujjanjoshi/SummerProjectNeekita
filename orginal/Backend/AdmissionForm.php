<?php
$name=$_POST["stname"];
$Gender=$_POST["gender"];
$Address=$_POST["staddress"];
$contact=$_POST["stcontact"];
$Guardainname=$_POST["stgname"];
$EnrolledDate=$_POST["stdate"];
$intrestedcourseSchoollevel=$_POST["scgrade"];
$intrestedcourseTenplustwolevel=$_POST["tengrade"];
$intrestedcourseBachelorlevel=$_POST["bacgrade"];
include'DatabaseConnection.php';
if($intrestedcourseSchoollevel!="Choose Grade"){
  if($intrestedcourseSchoollevel=="School-Science"){
    $price="5000";
  }
  else if($intrestedcourseSchoollevel=="School-Math"){
    $price="5000";
  }
  else{
    $price="2000";
  }
    $sql = "INSERT INTO studentdetails(Name,Address,Gender,ContactNo,GuardainsName,EnrolledDate,IntrestedCourse,Price) VALUES ('$name','$Address','$Gender','$contact','$Guardainname','$EnrolledDate','$intrestedcourseSchoollevel','$price');";
  }
else if($intrestedcourseTenplustwolevel!="Choose Grade"){
  if($intrestedcourseTenplustwolevel=="(10+2)-Science"){
    $price="8000";
  }
  else if($intrestedcourseTenplustwolevel=="(10+2)-Math"){
    $price="6000";
  }
  else{
    $price="3000";
  }  
  $sql = "INSERT INTO studentdetails(Name,Address,Gender,ContactNo,GuardainsName,EnrolledDate,IntrestedCourse,Price) VALUES ('$name','$Address','$Gender','$contact','$Guardainname','$EnrolledDate','$intrestedcourseTenplustwolevel','$price');";
}
else if($intrestedcourseBachelorlevel!="Choose Grade"){
  if($intrestedcourseBachelorlevel=="Bachelor-Science"){
    $price="10000";
  }
  else if($intrestedcourseBachelorlevel=="Bachelor-Math"){
    $price="8000";
  }
  else{
    $price="6000";
  } 
  $sql = "INSERT INTO studentdetails(Name,Address,Gender,ContactNo,GuardainsName,EnrolledDate,IntrestedCourse,Price) VALUES ('$name','$Address','$Gender','$contact','$Guardainname','$EnrolledDate','$intrestedcourseBachelorlevel','$price');";
}
print($sql);
$count=0;
if ($conn->query($sql) === TRUE) {
  $sql = "SELECT * from studentdetails";
  $result = $conn->query($sql);
  echo("<table id='example' class='table table-striped' style='width:90%'>");
  if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
  $count=$count+1;
  }}
  echo($count);
  $sql1="INSERT INTO studentfeesection(Sid,Name,EnrolledDate,Status) values('$count','$name','$EnrolledDate','Unpaid');";
  $conn->query($sql1);
    echo"<script>
    alert('SucessfullyInserted');
    window.location='../html/AdmissionForm.php';
    </script>";
  } else {
    echo"<script>
    alert('Error');
    window.location='../html/AdmissionForm.php';
    </script>";
  }
?>
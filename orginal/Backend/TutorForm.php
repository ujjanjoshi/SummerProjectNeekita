<?php
$tutorname=$_POST["tutname"];
$tutoradress=$_POST['tutaddress'];
$tutorgender=$_POST['gender'];
$tutorcont=$_POST['tutcontact'];
$tutenrolleddate=$_POST['tutenrolleddate'];
echo($tutorname);
echo($tutoradress);
echo($tutorgender);
echo($tutorcont);
echo($tutenrolleddate);
include'DatabaseConnection.php';
if($tutenrolleddate==""|| $tutorname=="" || $tutoradress=="" || $tutorgender=="" || $tutorcont==""){
    echo"<script>
    alert('please fill all required fields');
    window.location='../html/TutorForm.php';
    </script>";
}
else{
    $sql = "INSERT INTO tutordetails(Name,Address,Gender,ContactNo,EnrolledDate) VALUES ('$tutorname','$tutoradress','$tutorgender','$tutorcont','$tutenrolleddate');";
    if ($conn->query($sql) === TRUE) {
        echo"<script>
        alert('SucessfullyInserted');
        window.location='../html/TutorForm.php';
        </script>";
      } else {
        echo"<script>
        alert('Error');
        window.location='../html/TutorForm.php';
        </script>";
      }
}

?>
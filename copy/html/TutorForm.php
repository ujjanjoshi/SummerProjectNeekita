<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/TutorForm.css">   
    <link rel="stylesheet" href="../CSS/Main.css">
    <title>Document</title>
</head>
<body>
<?php include 'Nav.php';?>
    <div class="bg">
    </div>
    <div class="TutorForm">
        <h1>Tutor</h1>
        <form action="#">
            <p>Name: <input type="text" name="tutname" class="tname"></p>
            <p>Address: <input type="text" name="tutname" class="taddress"></p>
            <p>Gender: <input type="text" name="tutname" class="tgender"></p>
            <p>Contact: <input type="text" name="tutname" class="tcontact"></p>
            <p>Enrolled date: <input type="text" name="tutname"class="ted"></p>
        <input type="submit" class="submitbtn" value="Confirm">
        <input type="reset" class="clearbtn"value="Clear">
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/AdmissionForm.css">   
    <link rel="stylesheet" href="../CSS/Main.css">
    <title>Document</title>
</head>
<body>
<?php include 'Nav.php';?>
    <div class="bg">
    </div>
    <div class="AdmissionForm">
        <h1>Admission Form</h1>
        <form action="#">
            <p>Name: <input type="text" name="tutname" class="aname">
                Gender: <input type="radio"class="gndr" name="gender" value="Male"> Male
                <input type="radio"class="gndr" name="gender" value="Female"> Female</p>
                <p>Address: <input type="text" name="tutname" class="aaddress">
            Contact No: <input type="text" name="tutname" class="acontact"></p>
            <p>Guardain's Name: <input type="text" name="tutname"class="agd">
            Enrolled date: <input type="text" name="tutname"class="aed">
            <div class="ic">
            <p>Interested Courses:</p>
            </div>  
            <div class="schllvl">
            <h1>School level</h1>
            <select name="grade" class="grd">
                <option value="Choose Grade">Choose Grade</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
              </select>
        </div>
        <div class="tentwlvl">
            <h1>10+2 level</h1>
            <select name="grade" class="grd">
                <option value="Choose Grade">Choose Grade</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
              </select>
        </div>
        <div class="bachlvl">
            <h1>Bachelors level</h1>
            <select name="grade" class="grd">
                <option value="Choose Subject">Choose Subject</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
              </select>
        </div>
        <div class="btn">
            <input type="reset" class="clearbtn"value="Clear">
            <input type="submit" class="submitbtn" value="Confirm"></div>
        </form>
    
    </div>
</body>
</html> 
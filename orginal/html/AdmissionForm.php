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
        <form action="../Backend/AdmissionForm.php" method="Post">
            <p>Name: <input type="text" name="stname" class="aname">
                Gender: <input type="radio"class="gndr" name="gender" value="Male"> Male
                <input type="radio"class="gndr" name="gender" value="Female"> Female</p>
                <p>Address: <input type="text" name="staddress" class="aaddress">
            Contact No: <input type="text" name="stcontact" class="acontact"></p>
            <p>Guardain's Name: <input type="text" name="stgname"class="agd">
            Enrolled date: <input type="text" value='<?php echo date("Y/m/d");?>' name="stdate"class="aed">
            <div class="ic">
            <p>Interested Courses:</p>
            </div>  
            <div class="schllvl">
            <h1>School level</h1>
            <select name="scgrade" class="grd">
                <option value="Choose Grade">Choose Subject</option>
                <option value="School-Science">Science</option>
                <option value="School-Math">Math</option>
                <option value="School-English">English</option>
              </select>
        </div>
        <div class="tentwlvl">
            <h1>10+2 level</h1>
            <select name="tengrade" class="grd">
                <option value="Choose Grade">Choose Subject</option>
                <option value="(10+2)-Science">Science</option>
                <option value="(10+2)-Math">Math</option>
                <option value="(10+2)-English">English</option>
              </select>
        </div>
        <div class="bachlvl">
            <h1>Bachelors level</h1>
            <select name="bacgrade" class="grd">
                <option value="Choose Grade">Choose Subject</option>
                <option value="Bachelor-Science">Science</option>
                <option value="Bachelor-Math">Math</option>
                <option value="Bachelor-English">English</option>
              </select>
        </div>
        <div class="btn">
            <input type="reset" class="clearbtn"value="Clear">
            <input type="submit" class="submitbtn" value="Confirm"></div>
        </form>
    
    </div>
</body>
</html> 